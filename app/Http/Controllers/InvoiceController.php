<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use \App\Models\User;
use \App\Models\Invoice;
use \App\Models\Product;
use Illuminate\Support\Facades\DB;

use Dompdf\Dompdf;
use Barryvdh\DomPDF\Facade\Pdf;


class InvoiceController extends Controller
{
    public function create(User $user)
    {
        return view('Invoice.create', compact('user'));
    }


    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'middlename' => 'required',
            'addres' => 'required',
            'Postal' => 'required',
            'title' => '',
            'product' => 'required',
        ]);

        auth()->user()->Invoices()->create($data);


        return redirect('/Invoices');
    }

    //Deleting Invoice
    public function destroy($Invoices)
    {

        $blog = Invoice::FindOrFail($Invoices);

        $blog->delete();

        return redirect('/Invoices');
    }


    public function install($Invoices)
    { 
        //looking for a product in order
        $id = Invoice::FindOrFail($Invoices);
        $product = DB::table('Products')->where('product_id', $id->product)->first();

        //Sorting date for Invoice nr
        $data = Invoice::FindOrFail($Invoices);
        $date = $data->created_at;
        $date = date_format($date, 'y/m/d');


        //Creating Pdf file with domPDF library
        $dompdf = Pdf::loadView('document.pdf', compact('data', 'date', 'product'));
        $name = $id->id;
        return $dompdf->download("$date/$name.pdf");

    }

    //searching controller
    public function search()
    {
        //redirect persons without registration

        if(Auth::check() == false){
            return redirect('login');
        }
        
        $search_text = $_GET['query'];
        $find_invoice = Invoice::where('id', 'LIKE', '%'.$search_text.'%')->get();
        return view('Invoice.search', compact('find_invoice'));
    }
}
