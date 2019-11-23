<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\student;

class UpdateController extends Controller
{
    public function update(Request $request){

$name = $request->input('name');
$email = $request->input('email');

$affected = $request->input('name');
DB::update('update students set name = ? where email = ?',[$name,$email]);

if($affected == true){

echo "Account has been updated ";


}else{


echo " Account has not been updated";


}

    }
}
