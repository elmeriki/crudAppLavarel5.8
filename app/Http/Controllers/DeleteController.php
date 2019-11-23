<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\student;
use Symfony\Component\Console\Helper\Table;

class DeleteController extends Controller
{

public function delete(Request $request){

$idn = $request->input('id');

$student = DB::delete('delete from students where id = ?',[$idn]);

if( $student == true){

    echo  "Data has been Deleted ok  <a href='/'> Back </a> ";

}else{

    echo "not ok";

}

}


}
