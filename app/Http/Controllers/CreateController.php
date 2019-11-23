<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\student;

class CreateController extends Controller
{

public function insert(Request $req){

 $data = DB::insert('insert into students (id, name ,email) values (?, ?,?)',
 [$req->input('id'),$req->input('name'),$req->input('email')]);


if($data == true) {


echo  "Data has been inserted ok  <a href='/'> Back </a> ";


}else{

echo "Not in";

}




}


}
