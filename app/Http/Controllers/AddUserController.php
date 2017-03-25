<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;


class AddUserController extends Controller{


    //     public function userDetails()
    // {


    //     $sql_select_user="select * from user_details";
    //     $result_user=DB::select($sql_select_user);

    //     return view('userDetails',compact('result_user'));
    // }

	    public function store(Request $request)
    {
        $UfirstName= $request->UfirstName;
        $lastname=$request->lastname;

        $email= $request->email;
        $contactno=$request->contactno;

        $username= $request->username;
        $NICnumber=$request->NICnumber;
        $gender=$request->gender;
        $address=$request->address;
        $password=$request->password1;
        $user_type=$request->user_type;

        // $userlevel= $request->userlevel;
        // $password=md5($password);
        //$dob=$request->dob;
        $unique_id=time();

        $sql_newuser="INSERT INTO `user_details`(`user_id`, `UfirstName`, `UlastName`, `NICnumber`,`Usex`, `phoneNumber`, `address`, `email`, `password`, `user_type`, `userName`) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        $val_newuser=[$unique_id,$UfirstName,$lastname,$NICnumber,$gender,$contactno,$address,$email,$password,$user_type,$username];
        DB::insert($sql_newuser,$val_newuser);
        
		// $sql_newuser="INSERT INTO `tblusers`(`UserId`, `PersonId`, `UserName`, `Password`, `UserLevel`, `LoginStatus`) VALUES (?,?,?,?,?,?)";
  //       $val_newuser=[$unique_id,$unique_id,$username,$password,$userlevel,'0'];
  //       DB::insert($sql_newuser,$val_newuser);


        //return Redirect::to("/registerNewPatient".$unique_id."/Added");

        $sql_select_user="select * from user_details";
        $result_user=DB::select($sql_select_user);

        return view('userDetails',compact('result_user'));

    }




}