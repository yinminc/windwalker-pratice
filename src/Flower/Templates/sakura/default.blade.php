<?php
/**
 * Part of flower project.
 *
 * @copyright  Copyright (C) 2018 ${ORGANIZATION}.
 * @license    __LICENSE__
 */

?>


@extends('_global.html')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="card bg-{{ $color }} text-light mt-5">
                <div class="card-body">
                    <h1>
                        Hello Sakura Template in {{ $location }} .
                        Foo = {{ $foo }}
                    </h1>

                    <br />

                    ID: {{ $id }} Date- {{ $date }}
                </div>
            </div>
        </div>
    </div>
</div>
@stop
