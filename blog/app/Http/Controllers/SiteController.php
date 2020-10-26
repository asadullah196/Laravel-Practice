<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //Site Controller Pratice
    function Home(){
            // return "I am from Site  Controller Home Method";
            return view('GreensoftHome');
    }

    function About(){
        return "I am from Site  Controller About Method";
    }

    function Contact(){
        return "I am from Site  Controller Contact Method";
    }
}
