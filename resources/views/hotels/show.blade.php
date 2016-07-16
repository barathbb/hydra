@extends('layout')
@section('header')
<div class="page-header">
        <h1>Hotels / Show #{{$hotel->id}}</h1>
        <form action="{{ route('hotels.destroy', $hotel->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('hotels.edit', $hotel->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <button type="submit" class="btn btn-danger">Delete <i class="glyphicon glyphicon-trash"></i></button>
            </div>
        </form>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static"></p>
                </div>
                <div class="form-group">
                     <label for="name">NAME</label>
                     <p class="form-control-static">{{$hotel->name}}</p>
                </div>
                    <div class="form-group">
                     <label for="address">ADDRESS</label>
                     <p class="form-control-static">{{$hotel->address}}</p>
                </div>
                    <div class="form-group">
                     <label for="pincode">PINCODE</label>
                     <p class="form-control-static">{{$hotel->pincode}}</p>
                </div>
                    <div class="form-group">
                     <label for="cityid">CITYID</label>
                     <p class="form-control-static">{{$hotel->cityid}}</p>
                </div>
                    <div class="form-group">
                     <label for="latitude">LATITUDE</label>
                     <p class="form-control-static">{{$hotel->latitude}}</p>
                </div>
                    <div class="form-group">
                     <label for="longitude">LONGITUDE</label>
                     <p class="form-control-static">{{$hotel->longitude}}</p>
                </div>
                    <div class="form-group">
                     <label for="phonenumber">PHONENUMBER</label>
                     <p class="form-control-static">{{$hotel->phonenumber}}</p>
                </div>
                    <div class="form-group">
                     <label for="openingtime">OPENINGTIME</label>
                     <p class="form-control-static">{{$hotel->openingtime}}</p>
                </div>
                    <div class="form-group">
                     <label for="closingtime">CLOSINGTIME</label>
                     <p class="form-control-static">{{$hotel->closingtime}}</p>
                </div>
                    <div class="form-group">
                     <label for="workingdays">WORKINGDAYS</label>
                     <p class="form-control-static">{{$hotel->workingdays}}</p>
                </div>
                    <div class="form-group">
                     <label for="image">IMAGE</label>
                     <p class="form-control-static">{{$hotel->image}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('hotels.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection