@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Hotelfooddailies
            <a class="btn btn-success pull-right" href="{{ route('hotelfooddailies.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($hotelfooddailies->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>�HOTELID</th>
                        <th>FOODID</th>
                        <th>PRICE</th>
                        <th>MAXIMUMQUANTITY</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($hotelfooddailies as $hotelfooddaily)
                            <tr>
                                <td>{{$hotelfooddaily->id}}</td>
                                <td>{{$hotelfooddaily->“hotelid}}</td>
                    <td>{{$hotelfooddaily->foodid}}</td>
                    <td>{{$hotelfooddaily->price}}</td>
                    <td>{{$hotelfooddaily->maximumquantity}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('hotelfooddailies.show', $hotelfooddaily->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('hotelfooddailies.edit', $hotelfooddaily->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('hotelfooddailies.destroy', $hotelfooddaily->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $hotelfooddailies->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection