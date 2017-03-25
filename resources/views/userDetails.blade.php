<table id="simple-table" class="table table-striped table-bordered table-hover dataTable no-footer">
	<thead>
		<tr>
			<th style="width:50px;">#</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>contact number</th>
			<th>user name</th>
			<!-- <th>ACTION</th> -->
		</tr>
	</thead>
	<tbody>
		<?php $count_val=0; ?>
	    @foreach($result_user as $arrival) 
	    <?php  $count_val+=1; ?>
        <tr>
			<td><?php echo $count_val.'.'; ?></td>
			<td>{{$arrival->UfirstName}}</td>
			<td>{{$arrival->UlastName}}</td>
			<td>{{$arrival->phoneNumber}}</td>
			<td>{{$arrival->userName}}</td>

		</tr>
        @endforeach
		
	</tbody>
</table>