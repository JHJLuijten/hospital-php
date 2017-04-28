	<h2>Patiënts</h2>
	<table>
		<thead>
			<tr>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Phone</th>
				<th>Email</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
			<tr>
				<td>John</td>
				<td>Doe</td>
				<td>0612345678</td>
				<td>johndoe@hismail.com</td>
				<td class="center"><a href="#">edit</a></td>
				<td class="center"><a href="#">delete</a></td>
			</tr>
			<tr>
				<td>Jane</td>
				<td>Doe</td>
				<td>0687654321</td>
				<td>janedoe@hermail.com</td>
				<td class="center"><a href="<?= URL ?>student/edit/<?= $student['student_id'] ?>">Edit</a>edit</a></td>
				<td class="center"><a href="<?= URL ?>student/delete/<?= $student['student_id'] ?>">Delete</a>delete</a></td>
			</tr>
		</tbody>
	</table>
		<p>	<a href="<?= URL ?>client/create">Toevoegen</a></p>
		<p><a href="index.html">Home</a></p>