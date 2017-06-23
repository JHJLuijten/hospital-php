<h1>Species</h1>
<div class="container">

	<table border="1">
		<tr>
				<th>Species_id</th>
				<th>Species_description</th>
				<th colspan="2">Action</th>
		</tr>
		
		<?php foreach ($species as $specie) { ?>
		<tr>
			<td><?= $specie['species_id']; ?></td>
			<td><?= $specie['species_description']; ?></td>
			<td><a href="<?= URL ?>species/edit/<?= $specie['species_id'] ?>">Edit</td>
			<td><a href="<?= URL ?>species/delete/<?= $specie['species_id'] ?>">Delete</td>
				

		</tr>
		<?php } ?>

	</table>
	<a href="<?= URL ?>species/create">Toevoegen</a>
</div>