<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;


class AddHistoryController extends Controller{

	    public function store(Request $request)



    {
        $patient_id= $request->patient_id;

        $unique_id=time();
        $drugs=$request->drugs;
        $bloodpressure=$request->bloodpressure;
        $patientname= $request->patientname;
        $description=$request->description;
        $date=$request->date;


        // $userlevel= $request->userlevel;
        // $password=md5($password);
        //$dob=$request->dob;
        

        $sql_newuser="INSERT INTO `disease_details`(`recordID`, `doctorID`, `PatientID`, `discription`, `drugs`,`preassure`, `Date`) VALUES (?,?,?,?,?,?,?)";
        $val_newuser=[$unique_id,$patient_id,$patient_id,$description,$drugs,$bloodpressure, $date];
        DB::insert($sql_newuser,$val_newuser);

        $sql_patient_history="select * from disease_details";
        $result_history=DB::select($sql_patient_history);

        return view('medicalHistory',compact('result_history'));
    }




}