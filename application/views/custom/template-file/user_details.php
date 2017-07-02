<table class="table table-bordered">
	<thead>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?php echo $user_login->first_name; ?></td>
			<td><?php echo $user_login->email; ?></td>
			<td><?php echo $user_login->phone; ?></td>
			<td><a href="<?php echo base_url(); ?>explore/edit_user/<?php echo $user_login->user_id; ?>">Edit</a></td>
		</tr>
	</tbody>
</table>