@extends('layouts.app')

@section('title', 'Create')

@section('container')
	@parent

<div class="container">
    <div class="card hoverable z-depth-5 animated slideInUp" style="margin-top: 70px;">
        <div class="card-content center-align">
            <span class="card-title"><h4><i class="material-icons md-36">&#xE8AF;</i> {{ $solution->heading}}</h4></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        {{ $solution->description}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-panel teal">
                            <span class="white-text">
                                <strong>Answer:</strong> {{ $solution->answer}}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        Was this helpful?                         
                        <i class="material-icons">&#xE8DC;</i> <i class="material-icons">&#xE8DB;</i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
