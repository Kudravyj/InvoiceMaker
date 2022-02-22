<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use \App\Models\User;

class ProfileController extends Controller
{
    public function index(User $user)
    {   
        //redirect persons without registration

        if(Auth::check() == false){
            return redirect('login');
        }
        //view profile with authentification user and their information
        $user = auth()->user();
        $invoice = auth()->user()->invoices();
        return view('dashboard', compact('user', 'invoice'));
    }
}
