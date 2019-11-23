<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\student;

class FetchallController extends Controller
{

public function getall(){


$data = DB::select('select * from students');

return view('/allstudent',['show'=>$data]);

}


}



