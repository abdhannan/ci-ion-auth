<table class="table table-bordered">
	<h2>List group</h2>
	<thead>
		<tr>
			<th>Name</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($list_group as $group) : ?>
		<tr>
			<td><?php echo $group->name; ?></td>
			<td><?php echo $group->description; ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>