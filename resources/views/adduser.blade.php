

@extends('layout.home')
<!-- @section('page_title')
  My Home Page
@endsection -->

@section('pagecontent')

<div class="right_col" role="main">
          <div class="">
           
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Projects</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="AddUsers"> 

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="UfirstName">First Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="UfirstName" name="UfirstName" required="required" class="form-control col-md-7 col-xs-12">
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
                        <label for="NICnumber" class="control-label col-md-3 col-sm-3 col-xs-12">NIC number</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="NICnumber" class="form-control col-md-7 col-xs-12" type="text" name="NICnumber">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="contactno" class="control-label col-md-3 col-sm-3 col-xs-12">Contact number</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="contactno" class="date-picker form-control col-md-7 col-xs-12" type="text" name="contactno">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="email" class="form-control col-md-7 col-xs-12" type="text" name="email">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="address" class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="address" class="form-control col-md-7 col-xs-12" type="text" name="address">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gender">sex <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="gender" name="gender" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>




                      <div class="form-group">
                        <label for="user_type" class="control-label col-md-3 col-sm-3 col-xs-12">User type</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="user_type" class="form-control col-md-7 col-xs-12" type="text" name="user_type">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="username" class="control-label col-md-3 col-sm-3 col-xs-12">User name</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="username" class="form-control col-md-7 col-xs-12" type="text" name="username">
                        </div>
                      </div>

                       <div class="form-group">
                        <label for="password1" class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password1" class="form-control col-md-7 col-xs-12" type="text" name="password1">
                        </div>
                      </div>

                       <div class="form-group">
                        <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Confirm Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password2" class="form-control col-md-7 col-xs-12" type="text" name="password2">
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
          </div>
        </div>

          
  @endsection

