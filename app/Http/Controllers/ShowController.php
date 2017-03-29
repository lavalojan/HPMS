<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;


class ShowController extends Controller{
	public function showUser(){
		$sql_select_user="select * from user_details";
                $result_user=DB::select($sql_select_user);
		return view('userDetails',compact('result_user'));
	}

	public function showPatients(){
                $sql_select_patient="select * from patients_info";
                $result_patient=DB::select($sql_select_patient);

                return view('patientDetails',compact('result_patient'));
	}
	public function showDepartment(){
                $sql_select_department="select * from Department";
                $Department=DB::select($sql_select_department);

                return view('departmentDetails',compact('Department'));
	}
	public function showDoctor(){
                $sql_select_user="select * from doctor_details";
                $result_doctor=DB::select($sql_select_user);

                return view('doctorDetails',compact('result_doctor'));
	}
	public function showCashier(){
                $sql_select_user="select * from cashier_details";
                $result_cashier=DB::select($sql_select_user);

                return view('cashierDetails',compact('result_cashier'));
	}

        public function showReceptionist(){

                $sql_select_user="select * from receptionist_details";
                $result_receptionist=DB::select($sql_select_user);

                return view('receptionistDetails',compact('result_receptionist'));
        }
        public function showNoticeBoard(){

                $sql_select_notice="select * from noticeBoard";
                $result_noticeboard=DB::select($sql_select_notice);

                return view('noticeboardDetails',compact('result_noticeboard'));
        }    
        public function showPrescription(){

                $sql_select_prescription="select * from disease_details";
                $result_history=DB::select($sql_select_prescription);

                return view('medicalHistory',compact('result_history'));
        }  
        public function showPayment(){
                $sql_select_payment="select * from payment_details";
                $result_payment=DB::select($sql_select_payment);

                return view('paymentDetails',compact('result_payment'));               
        }   


}