@extends('layout')
@section('header')
<div class="page-header">
        <h1>Orders / Show #{{$order->id}}</h1>
        <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('orders.edit', $order->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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
                     <label for="“profileid">�PROFILEID</label>
                     <p class="form-control-static">{{$order->“profileid}}</p>
                </div>
                    <div class="form-group">
                     <label for="hotels">HOTELS</label>
                     <p class="form-control-static">{{$order->hotels}}</p>
                </div>
                    <div class="form-group">
                     <label for="dineparcel">DINEPARCEL</label>
                     <p class="form-control-static">{{$order->dineparcel}}</p>
                </div>
                    <div class="form-group">
                     <label for="dinecount">DINECOUNT</label>
                     <p class="form-control-static">{{$order->dinecount}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('orders.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection