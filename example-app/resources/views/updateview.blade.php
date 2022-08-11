<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('crud');
    @section('content');

    <div class="col-md-4 m-auto border mt-3 p-2 border-info">
    <h2 class="text-center text-warning">Update View</h2>
    <form action="updatedata" method="get">
        <div class="mb-2">
            <label for="">Company Name</label>
            <input type="text" name="cname" value="{{$pname}}" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Position</label>
            <input type="text" name="cdescribe" value="{{$pdescribe}}" class="form-control" >
        </div>
        <br>
        <input type="text" name="id" vlaue="{{$pid}}" class="border border-2">
        <button type="submit" class="btn btn-outline-warning rounded-pill">Update</button>
    </form>
    </div>
    @endsection
</body>
</html>


