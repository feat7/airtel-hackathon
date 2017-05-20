@extends('layouts.app')

@section('title', 'Create')

@section('content')
	@parent
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                	<center>Book a complaint</center>	
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('complaints.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('heading') ? ' has-error' : '' }}">
                            <label for="heading" class="col-md-4 control-label">Heading</label>

                            <div class="col-md-6">
                                <input id="heading" type="text" class="form-control" name="heading" value="{{ old('heading') }}" required autofocus>
                                @if ($errors->has('heading'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('heading') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" value="{{ old('description') }}" required>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
