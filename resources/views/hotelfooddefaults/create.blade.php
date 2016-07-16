@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Hotelfooddefaults / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('hotelfooddefaults.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('hotel_id')) has-error @endif">
                       <label for="hotel_id-field">Hotel_id</label>
                    <input type="text" id="hotel_id-field" name="hotel_id" class="form-control" value="{{ old("hotel_id") }}"/>
                       @if($errors->has("hotel_id"))
                        <span class="help-block">{{ $errors->first("hotel_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('food_id')) has-error @endif">
                       <label for="food_id-field">Food_id</label>
                    <input type="text" id="food_id-field" name="food_id" class="form-control" value="{{ old("food_id") }}"/>
                       @if($errors->has("food_id"))
                        <span class="help-block">{{ $errors->first("food_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('price')) has-error @endif">
                       <label for="price-field">Price</label>
                    <input type="text" id="price-field" name="price" class="form-control" value="{{ old("price") }}"/>
                       @if($errors->has("price"))
                        <span class="help-block">{{ $errors->first("price") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('recurringtype')) has-error @endif">
                       <label for="recurringtype-field">Recurringtype</label>
                    <input type="text" id="recurringtype-field" name="recurringtype" class="form-control" value="{{ old("recurringtype") }}"/>
                       @if($errors->has("recurringtype"))
                        <span class="help-block">{{ $errors->first("recurringtype") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('recurringcount')) has-error @endif">
                       <label for="recurringcount-field">Recurringcount</label>
                    <input type="text" id="recurringcount-field" name="recurringcount" class="form-control" value="{{ old("recurringcount") }}"/>
                       @if($errors->has("recurringcount"))
                        <span class="help-block">{{ $errors->first("recurringcount") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('maximum quality')) has-error @endif">
                       <label for="maximum quality-field">Maximum quality</label>
                    <input type="text" id="maximum quality-field" name="maximum quality" class="form-control" value="{{ old("maximum quality") }}"/>
                       @if($errors->has("maximum quality"))
                        <span class="help-block">{{ $errors->first("maximum quality") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('photos')) has-error @endif">
                       <label for="photos-field">Photos</label>
                    <input type="text" id="photos-field" name="photos" class="form-control" value="{{ old("photos") }}"/>
                       @if($errors->has("photos"))
                        <span class="help-block">{{ $errors->first("photos") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('hotelfooddefaults.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
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
