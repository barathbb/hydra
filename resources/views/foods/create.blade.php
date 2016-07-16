@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Foods / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('foods.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('“name')) has-error @endif">
                       <label for="“name-field">�name</label>
                    <input type="text" id="“name-field" name="“name" class="form-control" value="{{ old("“name") }}"/>
                       @if($errors->has("“name"))
                        <span class="help-block">{{ $errors->first("“name") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cuisine_id')) has-error @endif">
                       <label for="cuisine_id-field">Cuisine_id</label>
                    <input type="text" id="cuisine_id-field" name="cuisine_id" class="form-control" value="{{ old("cuisine_id") }}"/>
                       @if($errors->has("cuisine_id"))
                        <span class="help-block">{{ $errors->first("cuisine_id") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('foods.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
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
