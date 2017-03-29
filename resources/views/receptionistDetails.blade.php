 @extends("layout.home")
 @section('pagecontent')
 <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Receptionist Details</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="addreceptionist">Add Receptionist</a>
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
<table id="simple-table" class="table table-striped table-bordered table-hover dataTable no-footer">
	<thead>
		<tr>
			<th style="width:50px;">#</th>
			<th>Name</th>
			<th>Email</th>
			<th> NIC</th>
			<th>user name</th>
      <th>Profile</th>
			<!-- <th>ACTION</th> -->
		</tr>
	</thead>
	<tbody>
		<?php $count_val=0; ?>
	    @foreach($result_receptionist as $arrival) 
	    <?php  $count_val+=1; ?>
        <tr>
			<td><?php echo $count_val.'.'; ?></td>
			<td>{{$arrival->Name}}</td>
			<td>{{$arrival->Email}}</td>
			<td>{{$arrival->NICno}}</td>
			<td>{{$arrival->Profile}}</td>
      <td>
        <a class="btn btn-default submit" href="#">Edit</a>
        <a class="btn btn-danger submit" href="#">Delete</a>
      </td>

		</tr>
        @endforeach
		
	</tbody>
</table>

              </div>
                </div>
              </div>
            </div>
          </div>
        </div>
            @endsection