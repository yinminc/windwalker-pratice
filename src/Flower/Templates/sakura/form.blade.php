{{-- Part of flower project. --}}
@extends('_global.html')


@section('content')
<div class="container mt-3">
    <form action="{{ $router->route('sakura') }}" method="post">
        {{--<input type="text" name="layout" value="{{ $layout }}" />--}}
        <input type="text" name="title" value="" />
        <input type="text" name="_method" value="PUT" />

        <button>Submit</button>
    </form>
</div>
@stop
