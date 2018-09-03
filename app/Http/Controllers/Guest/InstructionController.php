<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InstructionController extends Controller
{
    public function index()
    {
        return view('instruction');
    }

}
