<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;


class AddNoticeBoardController extends Controller{

	    public function store(Request $request)
    {
        $title= $request->title;
        $description=$request->description;
        $startDate=$request->startDate;
        $endDate=$request->endDate;


        $unique_id=time();

        $sql_newuser="INSERT INTO `noticeBoard`(`NoticeID`, `Title`,`Description`, `Startdate`,`Enddate`) VALUES (?,?,?,?,?)";
        $val_newuser=[$unique_id,$title,$description,$startDate,$endDate];
        
        DB::insert($sql_newuser,$val_newuser);
    

        $sql_select_noticeboard="select * from noticeBoard";
        $result_noticeboard=DB::select($sql_select_noticeboard);

        return view('noticeboardDetails',compact('result_noticeboard'));
    }




}