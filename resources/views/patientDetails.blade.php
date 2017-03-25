<table id="simple-table" class="table table-striped table-bordered table-hover dataTable no-footer">
	<thead>
		<tr>
			<th style="width:50px;">#</th>
			<th>User id</th>
			<th>First Name</th>
			<th>Last Name</th>
			
			<th>NIC</th>
			<!-- <th>ACTION</th> -->
		</tr>
	</thead>
	<tbody>
		<?php $count_val=0; ?>
	    @foreach($result_patient as $arrival) 
	    <?php  $count_val+=1; ?>
        <tr>
			<td><?php echo $count_val.'.'; ?></td>
			<td>{{$arrival->patinet_id}}</td>
			<td>{{$arrival->firstName}}</td>
			<td>{{$arrival->lastName}}</td>
			<td>{{$arrival->NIC_number}}</td>

		</tr>
        @endforeach
		
	</tbody>
</table>