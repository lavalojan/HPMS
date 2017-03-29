<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;


class AddPaymentController extends Controller{

	    public function store(Request $request)
    {
        $patientid= $request->patientid;
        $date=$request->date;
        $title=$request->title;
        $amount= $request->amount;
        
        
       
        $unique_id=time();

        $sql_newuser="INSERT INTO `payment_details`(`Bill_id`, `Date`, `PatientId`, `Title`, `Amount`) VALUES (?,?,?,?,?)";
        $val_newuser=[$unique_id,$date,$patientid,$title,$amount];
        DB::insert($sql_newuser,$val_newuser);
    

        $sql_select_payment="select * from payment_details";
        $result_payment=DB::select($sql_select_payment);

        return view('paymentDetails',compact('result_payment'));
    }




}