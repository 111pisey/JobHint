@extends('layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit CV</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="/index"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('items.update',$item) }}" method="POST">
        @csrf
        @method('patch')
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>User_id:</strong>
                    <input type="text" name="id" value="{{ $cV->id }}" class="form-control" placeholder="{{ $cV->id }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>INTERESTING_POSITION:</strong>
                    <textarea class="form-control" style="height:150px" name="interesting_position" value="" placeholder="interesting">{{ $cV->interesting_position }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>LOCATION:</strong>
                    <textarea class="form-control" style="height:150px" name="Location" value="" placeholder="location">{{ $cV->Location }}</textarea>
                </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </div>
   
    </form>
@endsection
resources/views/products/