@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Hotelfooddefaults
            <a class="btn btn-success pull-right" href="{{ route('hotelfooddefaults.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($hotelfooddefaults->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>HOTEL_ID</th>
                        <th>FOOD_ID</th>
                        <th>PRICE</th>
                        <th>RECURRINGTYPE</th>
                        <th>RECURRINGCOUNT</th>
                        <th>MAXIMUM QUALITY</th>
                        <th>PHOTOS</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($hotelfooddefaults as $hotelfooddefault)
                            <tr>
                                <td>{{$hotelfooddefault->id}}</td>
                                <td>{{$hotelfooddefault->hotel_id}}</td>
                    <td>{{$hotelfooddefault->food_id}}</td>
                    <td>{{$hotelfooddefault->price}}</td>
                    <td>{{$hotelfooddefault->recurringtype}}</td>
                    <td>{{$hotelfooddefault->recurringcount}}</td>
                    <td>{{$hotelfooddefault->maximum quality}}</td>
                    <td>{{$hotelfooddefault->photos}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('hotelfooddefaults.show', $hotelfooddefault->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('hotelfooddefaults.edit', $hotelfooddefault->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('hotelfooddefaults.destroy', $hotelfooddefault->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $hotelfooddefaults->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection