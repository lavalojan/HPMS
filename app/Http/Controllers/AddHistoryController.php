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
        $note=$request->note;
        $pressure=$request->pressure;
        $patientId= $request->patientId;
        $medication=$request->medication;
        $date=$request->date;
        $caseHistory=$request->caseHistory;
        $doctorName=$request->doctorName;

        
        $sql_newuser="INSERT INTO `disease_details`(`recordID`, `doctorName`, `PatientID`, `CaseHistory`, `Medication`,`Note`, `preassure`, `Date`) VALUES (?,?,?,?,?,?,?,?)";

        $val_newuser=[$unique_id,$doctorName,$patient_id,$caseHistory,$medication,$note,$pressure, $date];
        DB::insert($sql_newuser,$val_newuser);

        $sql_patient_history="select * from disease_details";
        $result_history=DB::select($sql_patient_history);

        return view('medicalHistory',compact('result_history'));
    }




}