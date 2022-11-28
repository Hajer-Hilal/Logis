<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetAQuoteController extends Controller
{
    public function index()
    {
        return view('website-pages.Quote.index');
    }
}
