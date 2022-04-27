<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PetaniModel;

class PetaniController extends Controller
{
    public function index()
    {
        return view('Petani');
    }
}
