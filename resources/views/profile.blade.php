

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
                    <h2>Edit Profile</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <!-- <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul> -->
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="AddUsers"> 

                     <div>
                      
                      <div class="form-group">
                        <label for="name" class="control-label col-md-3 col-sm-3 col-xs-12">Name</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nme" class="form-control col-md-7 col-xs-12" type="text" name="name">
                        </div>
                      </div>

                       <div class="form-group">
                        <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="email" class="form-control col-md-7 col-xs-12" type="email" name="email">
                        </div>
                      </div>

                       <div class="form-group">
                        <label for="address" class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="address" class="form-control col-md-7 col-xs-12" type="text" name="address">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="phone" class="control-label col-md-3 col-sm-3 col-xs-12">Phone number</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="phone" class="form-control col-md-7 col-xs-12" type="text" name="phone">
                        </div>
                      </div>

                        <div class="form-group">
                        <label for="profile" class="control-label col-md-3 col-sm-3 col-xs-12">Profile</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="profile" class="form-control col-md-7 col-xs-12" type="text" name="profile">
                        </div>
                      </div>


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">


<!-- 
                <input type="hidden" name="_token" value="{{ csrf_token() }}" >

        {{csrf_field()}} -->

        
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
<!--                   </div>
                </div>
              </div>
            </div> -->

              </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  <div class="right_col" role="main">
          <div class="">
           
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Change Password</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                       <!--  <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul> -->
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

<!-- 
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Register user <small>...</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br /> -->
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="AddUsers"> 

                     <div>
                      
                      <div class="form-group">
                        <label for="username" class="control-label col-md-3 col-sm-3 col-xs-12">Old Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="oldPassword" class="form-control col-md-7 col-xs-12" type="password" name="oldPasssword">
                        </div>
                      </div>

                       <div class="form-group">
                        <label for="password1" class="control-label col-md-3 col-sm-3 col-xs-12">New Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password1" class="form-control col-md-7 col-xs-12" type="password" name="password1">
                        </div>
                      </div>

                       <div class="form-group">
                        <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Confirm Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password2" class="form-control col-md-7 col-xs-12" type="password" name="password2">
                        </div>
                      </div>


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">


<!-- 
                <input type="hidden" name="_token" value="{{ csrf_token() }}" >

        {{csrf_field()}} -->

        
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
<!--                   </div>
                </div>
              </div>
            </div> -->

              </div>
                </div>
              </div>
            </div>
          </div>
        </div>

  @endsection

