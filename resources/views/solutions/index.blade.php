@extends('layouts.app')

@section('title', 'Index')

@section('container')
	@parent
	<body style="font-family: 'Raleway', sans-serif;" class="animated fadeInUp">
      <!--Import jQuery before materialize.js-->
      <h2 class="center-align ">Need Help ?</h2>
      <br>
      <div class="container">
      <nav style="color: #DB324D;">
        <div class="nav-wrapper">
        <div class="input-field ">
          <input id="search" type="search" placeholder="Search your query" required>
          <label class="label-icon" for="search"><i class="material-icons whote">search</i></label>
          <i class="material-icons">close</i>
        </div>
        </div>
        </nav>
        </div>
<br><br><br>

        <div class="row">

        	<div class="col s7">
          		<div class="container">
            		
            		@foreach ($solutions as $solution)
            		<div class="card  hoverable" >
              			<div class="card-content center">
                			<span class="card-title">
                				<a href="{{ url('/solutions/'.$solution->id) }}">
                					{{ $solution->heading }}
                				</a>
                			</span> 
                			<div class="container"><hr></div>
                			<p>{{ $solution->description }}</p>
              			</div>
	                </div>
            		@endforeach
                </div> 
          	</div>
          	<div class="col s5">
	            <h3 class="center-align">Frequently Asked Questions</h3>
            
	            <ul class="collapsible popout" data-collapsible="accordion">
              		<li>
                		<div class="collapsible-header center">FAQ-1</div>
                		<div class="collapsible-body center"  style="padding: 10px;">Details</div>
              		</li>
              		<li>
                		<div class="collapsible-header center">FAQ-2 </div>
                		<div class="collapsible-body center"  style="padding: 10px;">Details</div>
              		</li>
              		<li>
                		<div class="collapsible-header center"> FAQ-3</div>
                		<div class="collapsible-body center"  style="padding: 10px;"> Details</div>
              		</li>
               		<li>
                		<div class="collapsible-header center"> FAQ-4</div>
                		<div class="collapsible-body center"  style="padding: 10px;"> Details</div>
              		</li>
            	</ul>
          	</div>
        </div>

    </body>
@endsection