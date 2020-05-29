<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

// AJOUT DE LA DB ICI
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{

    public function contact()
    {
        return view('Contact.contact');
    }    
}