



@extends('layout.home')
<!-- @section('page_title')
  My Home Page
@endsection -->

@section('pagecontent')

        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Register new patient <small>....</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li> -->
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="StoreNewPatients">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="firstname">First Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="firstname" name="firstname" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lastname">Last Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="lastname" name="lastname" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middlename" class="control-label col-md-3 col-sm-3 col-xs-12">Middle Name / Initial</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middlename" class="form-control col-md-7 col-xs-12" type="text" name="middlename">
                        </div>
                      </div>
                      <!-- <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="female"> Female
                            </label>
                          </div>
                        </div>
                      </div> -->

                      <div class="form-group">
                        <label for="gender" class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="gender" class="form-control col-md-7 col-xs-12" type="text" name="gender">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="NICnumber" class="control-label col-md-3 col-sm-3 col-xs-12">NIC number</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="NICnumber" class="form-control col-md-7 col-xs-12" type="text" name="NICnumber">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="contactno" class="control-label col-md-3 col-sm-3 col-xs-12">Contact Number</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="contactno" class="form-control col-md-7 col-xs-12" type="text" name="contactno">
                        </div>
                      </div>

                       <div class="form-group">
                        <label for="address" class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="address" class="form-control col-md-7 col-xs-12" type="text" name="address">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="email" class="form-control col-md-7 col-xs-12" type="text" name="email">
                        </div>
                      </div>

                    <!--   <div class="form-group">
                        <label for="address" class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="address" class="form-control col-md-7 col-xs-12" type="text" name="address">
                        </div>
                      </div>
 -->



                      <div class="form-group">
                        <label for="bloodgroup" class="control-label col-md-3 col-sm-3 col-xs-12">Blood Group</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="bloodgroup" class="form-control col-md-7 col-xs-12" type="text" name="bloodgroup">
                        </div>
                      </div>


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
						  <button class="btn btn-primary" type="reset">Reset</button>


                      <input type="hidden" name="_token" value="{{ csrf_token() }}" >

        {{csrf_field()}}



        
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
     

                      


                      

                   
@endsection