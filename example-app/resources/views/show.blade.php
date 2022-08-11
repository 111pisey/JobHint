@extends('layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show CV</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="/index"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>id:</strong>
                {{ $cV->id}}
            </div>
        </div>
        <div class="col-xs- 12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>INTERESTING_POSITION:</strong>
                {{ $cV->interesting_position}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>LOCATION:</strong>
                {{ $cV->Location}}
            </div>
        </div>
    </div>
@endsection