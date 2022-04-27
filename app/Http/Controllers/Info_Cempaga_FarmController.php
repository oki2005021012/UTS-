<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info_Cempaga_FarmModel;

class Info_Cempaga_FarmController extends Controller
{
   public function index()
   {
      return view('Info_Cempaga_Farm');
   }
}
