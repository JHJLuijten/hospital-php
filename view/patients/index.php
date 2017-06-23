<h1>Patients</h1>
<div class="container">

	<table border="1">
		<tr>
				<th>Name</th>
				<th>Species</th>
				<th>Species Description</th>
				<th>Client</th>
				<th>Client Name</th>
				<th>Status</th>
				<th colspan="2">Action</th>
		</tr>
		
		<?php foreach ($patients as $patient) { ?>
		<tr>
			<td><?= $patient['patient_name']; ?></td>
			<td><?= $patient['species_id']; ?></td>
			<td><?= $patient['species_description']; ?></td>
			<td><?= $patient['client_id']; ?></td>
			<td><?= $patient['client_firstname']; ?> <?= $patient['client_lastname']; ?></td>
			<td><?= $patient['patient_status']; ?></td>

			<td>Edit</td>
			<td><a href="<?= URL ?>patients/delete/<?= $patient['patient_id'] ?>">Delete</td>
				

		</tr>
		<?php } ?>

	</table>
	<a href="<?= URL ?>patients/create">Toevoegen</a>
</div>