<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use \App\Models\User;

class ProfileController extends Controller
{
    public function index(User $user)
    {   
        if(Auth::check() == false){
            return redirect('login');
        }
        $user = auth()->user();
        $invoice = auth()->user()->invoices();
        return view('dashboard', compact('user', 'invoice'));
    }
}
