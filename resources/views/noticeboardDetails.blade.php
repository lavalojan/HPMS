 @extends("layout.home")
 @section('pagecontent')

  <div class="right_col" role="main">
          <div class="">
<!--             <div class="page-title">
              <div class="title_left">
                <h3>Projects <small>Listing design</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Notice Board</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="addnoticeboard">add Notice</a>
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

                    <p>Simple table with project listing with progress and editing options</p>


<table id="simple-table" class="table table-striped table-bordered table-hover dataTable no-footer">
	<thead>
		<tr>
			<th style="width:50px;">#</th>
			<th>Title</th>
			<th>Description</th>
      <th>Start date</th>
      <th>End date</th>
      <th>Options</th>
		
		</tr>
	</thead>
	<tbody>
		<?php $count_val=0; ?>
	    @foreach($result_noticeboard as $arrival) 
	    <?php  $count_val+=1; ?>
        <tr>
			<td><?php echo $count_val.'.'; ?></td>
			<td>{{$arrival->Title}}</td>
			<td>{{$arrival->Description}}</td>
      <td>{{$arrival->Startdate}}</td>
      <td>{{$arrival->Enddate}}</td>
			<td>
      <a class="btn btn-default submit" href="edit">Edit</a>
      <a class="btn btn-danger submit" href="delete">Delete</a>
        
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