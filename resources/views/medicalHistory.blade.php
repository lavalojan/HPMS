@extends("layout.home")
@section('pagecontent')

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
                    <br />
<font size="5" color="black">
<table id="simple-table" class="table table-striped table-bordered table-hover dataTable no-footer">
	<thead>
		<tr>
			<th style="width:50px;">#</th>

			<th>FRecord</th>
			<th>Patient id</th>
			<th>description</th>
			<th>drugs</th>
			<!-- <th>ACTION</th> -->
		</tr>
	</thead>
	<tbody>
		<?php $count_val=0; ?>
	    @foreach($result_history as $arrival) 
	    <?php  $count_val+=1; ?>
        <tr>
			<td><?php echo $count_val.'.'; ?></td>
			<td>{{$arrival->recordID}}</td>
			<td>{{$arrival->preassure}}</td>
			<td>{{$arrival->drugs}}</td>

		</tr>
        @endforeach
		
	</tbody>
</table>
</font>

 </div>
                </div>
              </div>
            </div>

@endsection