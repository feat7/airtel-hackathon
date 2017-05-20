@extends('layouts.app')

@section('title', 'Index')

@section('container')
	@parent
	<center>
		@foreach ($solutions as $solution)
			<ul>
				<li>
					<a href="{{ url('/solutions/'.$solution->id) }}" > {{ $solution->heading }} </a>
				</li>
			</ul>
		@endforeach

	</center>
@endsection