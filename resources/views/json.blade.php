
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Stock Market Data </title>
</head>
<body>    
	<h1>Stock Market Data</h1>
	<form method="POST" action="{{ route('json_store') }}" enctype="multipart/form-data">
		@csrf
			<label for="input-21" class="col-sm-2 col-form-label">Name</label>
			<div class="col-sm-10">
				<input type="text" name="data" value="{{ $data['open'] }}" placeholder="Name" />
			</div>
			
			<label class="col-sm-2 col-form-label"></label>
			<div class="col-sm-10">
				<button type="submit" class="btn btn-white px-5"><i class="icon-lock"></i> ADD</button>
		</div>
	</form>
</body>
</html>