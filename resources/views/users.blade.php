<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Datatable</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
</head>
<body>
	<div class="container">
		<h1>datable
			
		</h1>
		<div class="table">
			<table  id="abc">
				<thead>
					<th>Id</th>
					<th>name</th>
					<th>email</th>
					<th>salary</th>
					<th>date of birth</th>
				</thead>
				<tbody>
					@foreach($data as $d)
					<tr>
						<td>{{ $d->id }}</td>
						<td>{{ $d->name }}</td>
						<td>{{ $d->email }}</td>
						<td>{{ $d->salary }}</td>
						<td>{{ $d->birthdate }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>

	</div>
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

	<script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
	$(document).ready( function () {
    $('#abc').DataTable();
} );
</script>
</body>
</html>