{{-- Part of flower project. --}}
@extends('_global.html')


@section('content')
    <div class="container mt-5">
        <div class="toolbar d-flex mt-5 mb-3">
            <h1>
                Hello Sakura Template in Sakuras
            </h1>
            <div class="action-buttons ml-auto">
                <a href="{{ $router->to('sakura') }}" class="btn btn-primary">
                    新增
                </a>
            </div>
        </div>

        <div class="search-bar mb-4">
            <form action="{{ $router->to('sakuras') }}">
                <input type="text" name="q" value="{{ $q ?? '' }}" placeholder="Search"
                    class="form-horizontal w-25"/>
            </form>
        </div>

        <div class="sakura-table">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Desc</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($sakuras as $sakura)
                    <tr>
                        <td>{{ $sakura->id }}</td>
                        <td>
                            <a href="{{ $router->to('sakura', ['id' => $sakura->id]) }}">
                                {{ $sakura->title }}
                            </a>
                        </td>
                        <td>{{ $sakura->desc }}</td>
                    </tr>

                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@stop
