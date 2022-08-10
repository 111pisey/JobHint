<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    
</head>
<body>
@extends('crud')
@section('content')
<center>
<button type="button" class="btn btn-outline-success mt-4 fw-bold fs-4 rounded-pill" data-toggle="modal" data-target="#staticBackdrop">
  Add Record
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">CRUD Comapny</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="insertData" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-2">
                <input type="text" placeholder="Enter Position" class="form-control" name="cdescribe" id="">
            </div>
            <div class="mb-2">
            <input type="text" placeholder="Enter Company Name" class="form-control" name="cname" id="">
            </div>
            <div class="mb-2">
            <input type="file" class="form-control" name="image" id="">
            </div>
            
            <button type="submit" class="btn btn-outline-success fs-4 rounded-pill">Add Record</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</center>
<div class="container">

<table class="table mt-5">
    <thead class="bg-success text-white fw-bold">
        <th>ID</th>
        <th>Company Name</th>
        <th>Position</th>
        <th>Image of Company</th>
        <th>Updates</th>
        <th>Deleted</th>
    </thead>
    <tbody class="text-success bg-light fs-4">
        @foreach($data as $item)
        <tr>
            <form action="updatedelete" method="get">
            <td class="pt-5"><input type="hidden" name="id" value="{{$item['Id']}}">{{$item['Id']}}</td>
            <td class="pt-5"><input type="hidden" name="cname" value="{{$item['PName']}}">{{$item['PName']}}</td>
            <td class="pt-5"><input type="hidden" name="cdescribe" value="{{$item['PPosition']}}">{{$item['PPosition']}}</td>
            <td><img src="images/{{$item['PImage']}}"width="100px" alt=""></td>
            <td class="pt-5"><input type="submit" name="update" value="Update" class="btn btn-outline-success rounded-pill"></td>
            <td class="pt-5"><input type="submit" value="Delete" class="btn btn-outline-success rounded-pill"></td>
            </form>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
    @endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script> 
</body>
</html>