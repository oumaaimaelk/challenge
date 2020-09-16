<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<div class="container">
		<div class="col-sm-10" style="width: 600px; margin-left: 250px; margin-top: 50px;">
			<div class="jumbotron">
				<div class="form-group" style="margin-top: -50px;">
					<h1 class="text-center">
					     Add new Product
					</h1>
					</div>
					<hr>

					<form   action="{{url('/add-product')}}" enctype="multipart/form-data" method="POST"  autocomplete= "off" class="form-horizontal" style="margin-left: 50px;">
						{{csrf_field()}}
				
	<label> Name: </label>
						<input type="text" class="form-control"name="name">

							<hr>
					<label> Description: </label>
						<input type="text" class="form-control" name="description">

							<hr>
							<label> price: </label>
						<input type="number"class="form-control" name="price">

							<hr>
						
							<label> Category: </label>
						<select  class="form-control action" name="category_id"   required>
							<option "selected hidden"> Select Category of Product </option>
							@foreach($categories as $category)
							<option value="{{$category->id}}">{{$category->name}}</option>
							@endforeach

						</select>
						<hr>
						<label for="exampleFormControlFile1">Select Product Image</label>
						<input type="file" name="image" class="form-control file">
						<hr>
						<div  class="text-center">	
							<input type="submit" name="btnaddd" class="btn btn-primary" value="Add">
							<input type="reset"  class="btn btn-danger" value="Reset">
						</div>

					</form>

				</div>
			</div>
		</div>