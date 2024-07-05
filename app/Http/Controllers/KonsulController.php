<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KonsulController extends Controller
{
    public function index()
    {
        // Logic to handle the request for the /konsul rout
        return view('konsul'); // You'll likely want to return a view her
    }
}
