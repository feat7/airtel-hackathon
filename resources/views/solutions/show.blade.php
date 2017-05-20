@extends('layouts.app')

@section('title', 'Create')

@section('content')
	@parent
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            <center>
                <div class="panel-heading">
                	<h1><strong> Solution : {{ $solution->heading}}</strong></h1>
                	<h4>{{ $solution->description}}</h4>
                </div>
                <div class="panel-body">                    
                    <div class="col-md-12">
                        <strong>Answer: </strong>{{ $solution->answer}}
                    </div>

                </div>
            </center>
            </div>
        </div>
    </div>
</div>

@endsection
