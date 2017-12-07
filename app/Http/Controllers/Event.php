<?php

namespace App\Http\Controllers;

use App\Model\Event;

use Illuminate\Http\Request;

class Event extends Controller
{
    //
    public function store(Request $request){
 Event::create($request->except('_token'));

 // using eloquent//create a new model store and take evry value from the form except token
/*$name = $request->input('name');
$amount= $request->input('amount');
$description = $request->input('description');
DB::insert('insert into Stores (name, amount, description) values(?,?,?)',[$name, $amount, $description]);*/
echo "Record inserted successfully.<br/>";

}
}
