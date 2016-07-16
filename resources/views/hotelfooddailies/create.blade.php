@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Hotelfooddailies / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('hotelfooddailies.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('“hotelid')) has-error @endif">
                       <label for="“hotelid-field">�hotelid</label>
                    <input type="text" id="“hotelid-field" name="“hotelid" class="form-control" value="{{ old("“hotelid") }}"/>
                       @if($errors->has("“hotelid"))
                        <span class="help-block">{{ $errors->first("“hotelid") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('foodid')) has-error @endif">
                       <label for="foodid-field">Foodid</label>
                    <input type="text" id="foodid-field" name="foodid" class="form-control" value="{{ old("foodid") }}"/>
                       @if($errors->has("foodid"))
                        <span class="help-block">{{ $errors->first("foodid") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('price')) has-error @endif">
                       <label for="price-field">Price</label>
                    <input type="text" id="price-field" name="price" class="form-control" value="{{ old("price") }}"/>
                       @if($errors->has("price"))
                        <span class="help-block">{{ $errors->first("price") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('maximumquantity')) has-error @endif">
                       <label for="maximumquantity-field">Maximumquantity</label>
                    <input type="text" id="maximumquantity-field" name="maximumquantity" class="form-control" value="{{ old("maximumquantity") }}"/>
                       @if($errors->has("maximumquantity"))
                        <span class="help-block">{{ $errors->first("maximumquantity") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('hotelfooddailies.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
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
