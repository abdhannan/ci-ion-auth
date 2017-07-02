<table class="table table-bordered">
	<thead>
		<tr>
			<th>Name</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($list_user as $user) : ?>
		<tr>
			<td><?php echo $user->first_name; ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>