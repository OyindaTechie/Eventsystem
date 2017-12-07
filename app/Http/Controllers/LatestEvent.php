<?php

namespace App\Http\Controllers;

use App\Model\Event;
use App\Model\Category;

use Illuminate\Http\Request;

use DB;

class LatestEvent extends Controller
{
    //
  public function Login(Request $request){
      

                      

  return view('login');
  

     
                          }
  public function GoLogin(Request $request){

        $username = $request->input('username');
        $password = $request->input('password');
       

        $checkLogin = DB::table('users')->where(['username'=> $username, 'password' => $password])->get();

      if(count($checkLogin)  > 0)
      {
       //echo "Login SuccessFull<br/>";
        $request->session()->put('useraccess',$username);
        $user = $request->session()->get('useraccess');
        return view('layout.master', compact('user'));
      }
      else
      {
       echo "Login Faield Wrong Data Passed";
      }
      //DB::select('insert into registers (firstname, lastname,username,password, phonenumber) values(?,?,?,?,?)',[  $firstname, $lastname, $username, $password, $phonenumber]);
    }
    public function CreateForm(Request $request){
            $user = $request->session()->get('useraccess');$username = $request->input('username');
      
        $sql = DB::table('users')->where('username','=', $user)->get();

            
            foreach ($sql as $variable) {
        # code...
        $id = $variable -> id;
        
      }
                    return view('layout.form', compact('user', 'id'));


    }
public function store(Request $request){
  $imageName = $request->file('banner');
  $imageName1 = $request->file('logo');
  //if($imageName !== null){
    //get the extension
    $extension = $imageName->getClientOriginalExtension();
    $extension1 = $imageName1->getClientOriginalExtension();
    //create a new file name
    $new_image = date('Y-m-d').'-'.str_random(10).'.'.$extension;

    $new_image1 = date('Y-m-d').'-'.str_random(10).'.'.$extension1;

    //move files to public/images and use $new_name
    $imageName->move(public_path('images'), $new_image);
     $imageName1->move(public_path('images'), $new_image1);

 // }
     $data = [
        'logo' => $new_image,
        'banner' => $new_image1
     ];
 Event::create(array_merge($request->except('_token', 'banner', 'logo'), $data));

 
echo "Record inserted successfully.<br/>";

										}

public function Viewallevents(Request $request){
    	
 $user = $request->session()->get('useraccess');
  $sql = DB::table('events')->get();
  if(count($sql) != 0){
    
  	return view('layout.viewallevents',['query'=> $sql], compact('user'));
                      }
else{
	echo "wrong query";
    }

     
    											}
public function Showallevents(Request $request){
        

  $sql = DB::table('events')->get();
  if(count($sql) != 0){
    
    return view('home',['query'=> $sql]);
                      }
else{
    echo "wrong query";
    }

     
                                                }



public function Categoryform(Request $request){


 $user = $request->session()->get('useraccess');
 return view('layout.categoryform', compact('user'));

}

public function Processcategoryform(Request $request){


  Category::create($request->except('_token'));
  echo "inserted successfully";
 

}

public function Searchbycategory(Request $request){

$category = $request->input('category');
$sql = DB::table('events')->where('category','=', $category)->get();
if(count($sql) != 0){
    return view('categoryresult', ['query' => $sql]);
                    }

                                    }

 public function Searchbylocation(Request $request){

$state = $request->input('state');
$sql = DB::table('events')->where('state','=', $state)->get();
if(count($sql) != 0){
    return view('stateresult', ['query' => $sql]);
                    }

                                    }


}



