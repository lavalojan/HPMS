<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;


class AddDepartmentController extends Controller{

	    public function store(Request $request)
    {
        $DepName= $request->DepName;
        $description=$request->description;


        $unique_id=time();

        $sql_newuser="INSERT INTO `Department`(`Name`, `Description`) VALUES (?,?)";
        $val_newuser=[$DepName,$description];
        
        DB::insert($sql_newuser,$val_newuser);
    

        $sql_select_department="select * from Department";
        $Department=DB::select($sql_select_department);

        return view('departmentDetails',compact('Department'));
    }




}