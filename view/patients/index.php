<h1>Patients</h1>
<div class="container">

	<table border="1">
		<tr>
				<th>Name</th>
				<th>Species</th>
				<th>Client</th>
				<th>Status</th>
				<th colspan="2">Action</th>
		</tr>
		
		<?php foreach ($patients as $patient) { ?>
		<tr>
			<td><?= $patient['patient_name']; ?></td>
			<td><?= $patient['species_id']; ?></td>
			<td><?= $patient['client_id']; ?></td>
			<td><?= $patient['patient_status']; ?></td>
			<td>Edit</td>
			<td>Delete</td>
				

		</tr>
		<?php } ?>

	</table>
	<a href="<?= URL ?>patient/create">Toevoegen</a>
</div>