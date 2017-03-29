<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;


class AddDoctorController extends Controller{



	    public function store(Request $request)
    {
        $name= $request->name;
        $NICnumber=$request->NICnumber;

        $contactno= $request->contactno;
        $email=$request->email;

        $address= $request->address;
        $gender=$request->gender;
        $username=$request->username;
        $password=$request->password;
        $Department=$request->Department;
        $Profile=$request->Profile;
       
        $unique_id=time();

        $sql_newuser="INSERT INTO `doctor_details`(`Doc_id`, `Name`,`NICno`, `Email`, `Address`,`Phone`, `Department`, `Profile`, `userName`, `password`) VALUES (?,?,?,?,?,?,?,?,?,?)";
        $val_newuser=[$unique_id,$name,$NICnumber,$email,$address,$contactno,$Department,$Profile,$username,$password];
        DB::insert($sql_newuser,$val_newuser);
        
		// $sql_newuser="INSERT INTO `tblusers`(`UserId`, `PersonId`, `UserName`, `Password`, `UserLevel`, `LoginStatus`) VALUES (?,?,?,?,?,?)";
  //       $val_newuser=[$unique_id,$unique_id,$username,$password,$userlevel,'0'];
  //       DB::insert($sql_newuser,$val_newuser);


        //return Redirect::to("/registerNewPatient".$unique_id."/Added");

        $sql_select_user="select * from doctor_details";
        $result_doctor=DB::select($sql_select_user);

        return view('doctorDetails',compact('result_doctor'));

    }




}