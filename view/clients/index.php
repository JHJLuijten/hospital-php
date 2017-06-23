<h1>Clients</h1>
	<table border="1">
		<thead>
			<tr>
				<th>Client_id</th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
			<?php foreach ($clients as $client) { ?>
			<tr>
				<td><?= $client['client_id']; ?></td>
				<td><?= $client['client_firstname']; ?></td>
				<td><?= $client['client_lastname']; ?></td>
				<td><a href="<?= URL ?>clients/edit/<?= $client['client_id'] ?>">Edit</td>
				<td><a href="<?= URL ?>clients/delete/<?= $client['client_id'] ?>">Delete</td>

				
			</tr>

		<?php } ?>

		</tbody>
	</table>
			<a href="<?= URL ?>clients/create">Toevoegen</a>
