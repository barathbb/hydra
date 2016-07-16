@extends('layout')
@section('header')
<div class="page-header">
        <h1>Hotelfooddailies / Show #{{$hotelfooddaily->id}}</h1>
        <form action="{{ route('hotelfooddailies.destroy', $hotelfooddaily->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('hotelfooddailies.edit', $hotelfooddaily->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
                     <label for="“hotelid">�HOTELID</label>
                     <p class="form-control-static">{{$hotelfooddaily->“hotelid}}</p>
                </div>
                    <div class="form-group">
                     <label for="foodid">FOODID</label>
                     <p class="form-control-static">{{$hotelfooddaily->foodid}}</p>
                </div>
                    <div class="form-group">
                     <label for="price">PRICE</label>
                     <p class="form-control-static">{{$hotelfooddaily->price}}</p>
                </div>
                    <div class="form-group">
                     <label for="maximumquantity">MAXIMUMQUANTITY</label>
                     <p class="form-control-static">{{$hotelfooddaily->maximumquantity}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('hotelfooddailies.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection