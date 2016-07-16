@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Hotels
            <a class="btn btn-success pull-right" href="{{ route('hotels.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($hotels->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                        <th>ADDRESS</th>
                        <th>PINCODE</th>
                        <th>CITYID</th>
                        <th>LATITUDE</th>
                        <th>LONGITUDE</th>
                        <th>PHONENUMBER</th>
                        <th>OPENINGTIME</th>
                        <th>CLOSINGTIME</th>
                        <th>WORKINGDAYS</th>
                        <th>IMAGE</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($hotels as $hotel)
                            <tr>
                                <td>{{$hotel->id}}</td>
                                <td>{{$hotel->name}}</td>
                    <td>{{$hotel->address}}</td>
                    <td>{{$hotel->pincode}}</td>
                    <td>{{$hotel->cityid}}</td>
                    <td>{{$hotel->latitude}}</td>
                    <td>{{$hotel->longitude}}</td>
                    <td>{{$hotel->phonenumber}}</td>
                    <td>{{$hotel->openingtime}}</td>
                    <td>{{$hotel->closingtime}}</td>
                    <td>{{$hotel->workingdays}}</td>
                    <td>{{$hotel->image}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('hotels.show', $hotel->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('hotels.edit', $hotel->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('hotels.destroy', $hotel->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $hotels->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection