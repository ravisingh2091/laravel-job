<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestsController extends Controller
{
    public function index()
    {
        return view('tests.index');
    }

    public function confirmationEmail()
    {

    }
}
