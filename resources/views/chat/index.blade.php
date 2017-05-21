@extends('layouts.app')


@section('container')

<style type="text/css">
	.answer {
		 background-color: #4CAF50; /* Green */
		    border: none;
		    color: white;
		    padding: 15px 32px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
		    margin: 4px 2px;
		    cursor: pointer;
	}
</style>

<!-- <div class="panel">
	<div class="question"><h3>How can I help you?</h3></div>
	<div class="answers">
		<div class="answer">I need to register a complaint.</div>
		<div class="answer">I need to talk to customer care.</div>
		<div class="answer">I need to some information about ussd codes.</div>
		<div class="answer">I need to some solutions.</div>
		<div class="answer">I need some general information.</div>
	</div>
</div> -->


<div class="panel container">
	<div class="start">
		<div class="question">
			<h3>How may I help you?</h3>
		</div>

			<button class="answer" data-val="1">I need to register a complaint.</button>
			<button class="answer" data-val="2">I want to talk to customer care.</button>
			<button class="answer" data-val="3">I want information about current ussd codes availble.</button>
			<button class="answer" data-val="4">I need some general information about airtel.</button>

	</div>
	<div id="chat-section">
		
	</div>
</div>


<script type="text/javascript">

$(function() {

	$('body').on('click', '.answer' ,function() {
		var answerId = $(this).data('val');

		$.ajax({
			method: 'GET',
			url: '/api/question/' +answerId,
			success: function(data) {
				loadNewQuestion(data);
			},
		});
		
	});

	function loadNewQuestion(data) {

		$.ajax({
			method: 'GET',
			url: '/api/answers/'+ data.id,
			success: function(answers) {
				//show question

				console.log(data);

				$('#chat-section').append('<div class="question"><h3>'+ data.question +'</h3></div>');

				//show answers
				loadAnswers(answers);
			}
		});
	}

	function loadAnswers(data) {

		var answers = $.map(data, function(answer, i) {
			return '<button class="answer" data-val="'+answer.next_question_id+'">'+answer.answer+'</button>';
		});
		$('#chat-section').append('<div class="answers">'+answers+'</div>');


	}
});


	
</script>

@endsection