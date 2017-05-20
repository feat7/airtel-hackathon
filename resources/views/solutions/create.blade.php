@extends('layouts.app')

@section('title', 'Create')

@section('content')
	@parent

<form method="POST" action="{{ route('solutions.store') }}">
{{csrf_field()}}
    <input type="text" name="heading" placeholder="Heading">
    <br><br><br>
    <textarea placeholder="description" name="description"></textarea>
    <br><br><br>
    <textarea placeholder="answer" name="answer" placeholder="answer"></textarea>
    <br><br><br>
    <button type="submit">Submit</button>
</form>

@endsection
