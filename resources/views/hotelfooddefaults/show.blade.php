@extends('layout')
@section('header')
<div class="page-header">
        <h1>Hotelfooddefaults / Show #{{$hotelfooddefault->id}}</h1>
        <form action="{{ route('hotelfooddefaults.destroy', $hotelfooddefault->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('hotelfooddefaults.edit', $hotelfooddefault->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
                     <label for="hotel_id">HOTEL_ID</label>
                     <p class="form-control-static">{{$hotelfooddefault->hotel_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="food_id">FOOD_ID</label>
                     <p class="form-control-static">{{$hotelfooddefault->food_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="price">PRICE</label>
                     <p class="form-control-static">{{$hotelfooddefault->price}}</p>
                </div>
                    <div class="form-group">
                     <label for="recurringtype">RECURRINGTYPE</label>
                     <p class="form-control-static">{{$hotelfooddefault->recurringtype}}</p>
                </div>
                    <div class="form-group">
                     <label for="recurringcount">RECURRINGCOUNT</label>
                     <p class="form-control-static">{{$hotelfooddefault->recurringcount}}</p>
                </div>
                    <div class="form-group">
                     <label for="maximum quality">MAXIMUM QUALITY</label>
                     <p class="form-control-static">{{$hotelfooddefault->maximum quality}}</p>
                </div>
                    <div class="form-group">
                     <label for="photos">PHOTOS</label>
                     <p class="form-control-static">{{$hotelfooddefault->photos}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('hotelfooddefaults.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection