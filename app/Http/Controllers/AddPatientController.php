<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;


class AddPatientController extends Controller{

	    public function store(Request $request)
    {
        $firstname= $request->firstname;
        $lastname=$request->lastname;
        $middlename=$request->middlename;
        $email= $request->email;
        $contactno=$request->contactno;

        $username= $request->username;
        $NICnumber=$request->NICnumber;
        $gender=$request->gender;
        $address=$request->address;

        // $userlevel= $request->userlevel;
        // $password=md5($password);
        $bloodgroup=$request->bloodgroup;
        $unique_id=time();

        $sql_newuser="INSERT INTO `patients_info`(`patinet_id`, `firstName`, `lastName`, `middleName`, `NIC_number`,`sex`, `phoneNumber`, `address`, `email`) VALUES (?,?,?,?,?,?,?,?,?)";
        $val_newuser=[$unique_id,$firstname,$lastname,$middlename,$NICnumber,$gender,$contactno,$address,$email];
        DB::insert($sql_newuser,$val_newuser);
    
		// $sql_newuser="INSERT INTO `tblusers`(`UserId`, `PersonId`, `UserName`, `Password`, `UserLevel`, `LoginStatus`) VALUES (?,?,?,?,?,?)";
  //       $val_newuser=[$unique_id,$unique_id,$username,$password,$userlevel,'0'];
  //       DB::insert($sql_newuser,$val_newuser);


        // return Redirect::to("/registerNewPatient".$unique_id."/Added");
                $sql_select_patient="select * from patients_info";
        $result_patient=DB::select($sql_select_patient);

        return view('patientDetails',compact('result_patient'));
    }




}