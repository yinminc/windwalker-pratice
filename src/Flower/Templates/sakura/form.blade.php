{{-- Part of flower project. --}}
@extends('_global.html')


@section('content')
<div class="container mt-3">

    <h2>Sakura Edit</h2>

    <form action="{{ $router->route('sakura') }}" method="post">

        <div class="form-group">
            <label for="input-title">Title</label>
            <input type="text" id="input-title" class="form-control" name="title"
            placeholder="請輸入名稱" value="<?php echo $this->escape($sakura->title) ?>"/>
        </div>

        <div class="form-group">
            <select name="location_id" id="input-locations-id">
            @foreach($locations as $location)
                <option value="{{ $location->id }}"
                    @if ($sakura->location_id == $location->id)
                        selected = "selected"
                    @endif
                >
                    {{ $location->title }}
                </option>
            @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="input-desc">Description</label>
            <textarea id="input-desc" class="form-control" rows="7" name="desc"
                placeholder="請輸入描述"><?php echo $this->escape($sakura->desc) ?></textarea>
        </div>

        <input type="hidden" name="id" id="" value="{{ $sakura->id}}" />
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@stop
