{{-- Part of flower project. --}}
@extends('_global.html')

@section('content')
<div class="container">
    <h1>Locations</h1>

    <div class="location-items">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>DESC</th>
            </tr>
            </thead>
            <tbody>
            @foreach($locations as $location)
            <tr>
                <th>{{ $location->id }}</th>
                <th>{{ $location->title }}</th>
                <th>{{ $location->description }}</th>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop

