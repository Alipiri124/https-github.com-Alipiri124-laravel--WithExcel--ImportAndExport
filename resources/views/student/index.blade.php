<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>laravel & Excel</title>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
				@if(session('message'))
                  <h4>{{ session('message') }}</h4>
	            @endif
			<div class="card">
				<div class="card-header">
					<h4>Import Excel in Laravel</h4>
				</div>
				<div class="card-body">
					<form action="{{url('import-student')}}" method="post" enctype="multipart/form-data">
						@csrf
						<label>Upload Excel File</label>
						<input type="file" name="excel_file" class="form-control">
						<br>
						<button type="submit" class="btn btn-primary">Import Data</button>
					</form>
				</div>
			</div>
		</div>
         <div class="col-md-12">
         	<a href="{{ url('export-all')}}" class="btn btn-success mt-5">Export Students Data</a>
         </div>

	</div>
</div>
</body>
</html>