<!doctype html>
<html lang="ca">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<title>Aproximació a MVC - CRUD PDO</title>
	</head>
	<body>
		<div class="container">
			<div class="py-5 text-center">
				<h1>Aproximació a MVC</h1>
				<h3>CRUD amb PDO</h3>
			</div>
			<div class="table-responsive-sm">
				<table class="table table-striped">
					<thead class="thead-dark">
						<tr>
							<th class="align-middle">ID</th>
							<th class="align-middle">NOM</th>
							<th class="align-middle">COGNOMS</th>
							<th class="align-middle">DATA NAIXEMENT</th>
							<th class="align-middle text-right"><a class="btn btn-primary" role="button" href="?action=new">Afegir</a></th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach($result as $row) {
								echo "<tr>";
								echo "<td class='align-middle'>" . $row['id'] . "</td>";
								echo "<td class='align-middle'>" . $row['Nom'] . "</td>";
								echo "<td class='align-middle'>" . $row['Cognoms'] . "</td>";
								echo "<td class='align-middle'>" . date('d/m/Y', strtotime($row['Data_naixement'])) . "</td>";
								echo "<td class='align-middle'>";
								echo "<a class='btn btn-success' role='button' href='?action=show&id=".$row['id']."'>Mostrar</a> ";
								echo "<a class='btn btn-warning' role='button' href='?action=edit&id=".$row['id']."'>Editar</a> ";
								echo "<a class='btn btn-danger' role='button' href='?action=delete&id=".$row['id']."'>Eliminar</a> ";
								echo "</td>";
								echo "</tr>";
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>