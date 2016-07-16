@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Orders / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('orders.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('“profileid')) has-error @endif">
                       <label for="“profileid-field">�profileid</label>
                    <input type="text" id="“profileid-field" name="“profileid" class="form-control" value="{{ old("“profileid") }}"/>
                       @if($errors->has("“profileid"))
                        <span class="help-block">{{ $errors->first("“profileid") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('hotels')) has-error @endif">
                       <label for="hotels-field">Hotels</label>
                    <input type="text" id="hotels-field" name="hotels" class="form-control" value="{{ old("hotels") }}"/>
                       @if($errors->has("hotels"))
                        <span class="help-block">{{ $errors->first("hotels") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('dineparcel')) has-error @endif">
                       <label for="dineparcel-field">Dineparcel</label>
                    <input type="text" id="dineparcel-field" name="dineparcel" class="form-control" value="{{ old("dineparcel") }}"/>
                       @if($errors->has("dineparcel"))
                        <span class="help-block">{{ $errors->first("dineparcel") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('dinecount')) has-error @endif">
                       <label for="dinecount-field">Dinecount</label>
                    <input type="text" id="dinecount-field" name="dinecount" class="form-control" value="{{ old("dinecount") }}"/>
                       @if($errors->has("dinecount"))
                        <span class="help-block">{{ $errors->first("dinecount") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('orders.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection
@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
  <script>
    $('.date-picker').datepicker({
    });
  </script>
@endsection
