@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Hotels / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('hotels.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('name')) has-error @endif">
                       <label for="name-field">Name</label>
                    <input type="text" id="name-field" name="name" class="form-control" value="{{ old("name") }}"/>
                       @if($errors->has("name"))
                        <span class="help-block">{{ $errors->first("name") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('address')) has-error @endif">
                       <label for="address-field">Address</label>
                    <textarea class="form-control" id="address-field" rows="3" name="address">{{ old("address") }}</textarea>
                       @if($errors->has("address"))
                        <span class="help-block">{{ $errors->first("address") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('pincode')) has-error @endif">
                       <label for="pincode-field">Pincode</label>
                    <input type="text" id="pincode-field" name="pincode" class="form-control" value="{{ old("pincode") }}"/>
                       @if($errors->has("pincode"))
                        <span class="help-block">{{ $errors->first("pincode") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cityid')) has-error @endif">
                       <label for="cityid-field">Cityid</label>
                    <input type="text" id="cityid-field" name="cityid" class="form-control" value="{{ old("cityid") }}"/>
                       @if($errors->has("cityid"))
                        <span class="help-block">{{ $errors->first("cityid") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('latitude')) has-error @endif">
                       <label for="latitude-field">Latitude</label>
                    <input type="text" id="latitude-field" name="latitude" class="form-control" value="{{ old("latitude") }}"/>
                       @if($errors->has("latitude"))
                        <span class="help-block">{{ $errors->first("latitude") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('longitude')) has-error @endif">
                       <label for="longitude-field">Longitude</label>
                    <input type="text" id="longitude-field" name="longitude" class="form-control" value="{{ old("longitude") }}"/>
                       @if($errors->has("longitude"))
                        <span class="help-block">{{ $errors->first("longitude") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('phonenumber')) has-error @endif">
                       <label for="phonenumber-field">Phonenumber</label>
                    <input type="text" id="phonenumber-field" name="phonenumber" class="form-control" value="{{ old("phonenumber") }}"/>
                       @if($errors->has("phonenumber"))
                        <span class="help-block">{{ $errors->first("phonenumber") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('openingtime')) has-error @endif">
                       <label for="openingtime-field">Openingtime</label>
                    <input type="text" id="openingtime-field" name="openingtime" class="form-control" value="{{ old("openingtime") }}"/>
                       @if($errors->has("openingtime"))
                        <span class="help-block">{{ $errors->first("openingtime") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('closingtime')) has-error @endif">
                       <label for="closingtime-field">Closingtime</label>
                    <input type="text" id="closingtime-field" name="closingtime" class="form-control" value="{{ old("closingtime") }}"/>
                       @if($errors->has("closingtime"))
                        <span class="help-block">{{ $errors->first("closingtime") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('workingdays')) has-error @endif">
                       <label for="workingdays-field">Workingdays</label>
                    <input type="text" id="workingdays-field" name="workingdays" class="form-control" value="{{ old("workingdays") }}"/>
                       @if($errors->has("workingdays"))
                        <span class="help-block">{{ $errors->first("workingdays") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('image')) has-error @endif">
                       <label for="image-field">Image</label>
                    <input type="text" id="image-field" name="image" class="form-control" value="{{ old("image") }}"/>
                       @if($errors->has("image"))
                        <span class="help-block">{{ $errors->first("image") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('hotels.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
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
