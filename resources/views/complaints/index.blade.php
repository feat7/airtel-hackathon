@extends('layouts.app')

@section('title', 'Complaints')

@section('content')
	@parent
	<center>
		@foreach ($complaints as $complain)
			<ul>
				<li>
					{{ $complain>heading }}
				</li>
				<li>
					{{ $complain->description }}
				</li>
				<li>
					{{ $solution->answer }}
				</li>
			</ul>
		@endforeach

	</center>
@endsection