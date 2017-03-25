dfbthnhdfhbtr
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