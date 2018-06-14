@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Hello Shrirang3
                    <br>
                    <a href="{{ url('test1') }}">shrirang4</a>
                    <br>
                    <a href="{{ url('test2') }}">shrirang5</a>
                    <br>
                    <a href="{{ url('test3') }}">shrirang6</a>
                    <br>
                    <a href="{{ url('test4') }}">shrirang7</a>
                    <br>
                    <a href="{{ url('test5') }}">shrirang8</a>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
