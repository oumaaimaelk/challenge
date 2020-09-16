<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
       <h1> Products</h1>
       <button class="btn btn-primary float-right mb-4"><a href="{{url('api/add-product')}}">Add Product</a></button>
       
 <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Category</th>
      <th scope="col">Image</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
     <tr>
<td>{{$product->id}}</td>
<td>{{$product->name}}</td>
<td>{{$product->description}}</td>
<td>{{$product->price}}</td>
<td>{{$product->category->name}}</td>
<td><image height="50px" src="{{asset('/storage/images/products/'.$product->image)}}"/></td>
<td> <button class="btn btn-warning "><a href="{{url('/edit-product/'.$product->id)}}">Edit</a></button>
    <form action="{{url('api/delete-product/'.$product->id)}}" method="post">
        {{method_field('DELETE')}}
        {{csrf_field()}}
 <button class="btn btn-danger ">Delete</button ></form></td>
       @endforeach
  
    </tr>
  
  </tbody>
</table>       
    </body>
</html>
