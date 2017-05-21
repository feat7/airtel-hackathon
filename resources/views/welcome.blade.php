@extends('layouts.app')

@section('title', 'Welcome')

@section('container')
    @parent
    <style type="text/css">
    .airtel-hackathon{
        background-image: url("{{ asset('/img/hackathon.png') }}");
    }
    <script>
    function showResult(str) {
    if (str.length==0) { 
        document.getElementById("livesearch").innerHTML="";
        document.getElementById("livesearch").style.border="0px";
        return;
    }
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    } else {  // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
        document.getElementById("livesearch").innerHTML=this.responseText;
        document.getElementById("livesearch").style.border="1px solid #A5ACB2";
        }
    }
    xmlhttp.open("GET","livesearch.php?q="+str,true);
    xmlhttp.send();
    }
    </script>
    </style>
    <center>
        <div class="airtel-hackathon">
            <img src="{{ asset('img/logo.svg') }}">
            <h5 class="center-align">India's first open network</h5>
            <br><br>
            <div class="center-align">
                <a class="waves-effect waves-light btn red  white-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="User Login" href="userlogin.html">
                    <i class="material-icons right">perm_identity</i>
                    <strong>User</strong>
                </a>
            </div>
        </div>
    </center>

    <br><br><br>

    <div class="center-align">
        <h2 >Have a problem ?</h2>
        <h5>We have a solution for you</h5>
        <br>
        <div class="container">
            <div class="card hoverable z-depth-5" style="border-color: #ef5350;">
                <div class="card-content"> 
                    <span class="card-title">Popular Search</span>
                    <br><br>
                    <div class="container">
                        <nav style="color: #DB324D;">
                            <div class="nav-wrapper">
                                <div class="input-field ">
                                    <input id="search" type="search" placeholder="Search your query" required>
                                    <label class="label-icon" for="search">
                                        <i class="material-icons whote">search</i>
                                    </label>
                                    <i class="material-icons">close</i>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="livesearch">
                        
                    </div>
                    <br><br>
                </div>          
            </div>
        </div>  
    </div>
    <br><br>
    <div class="container"><hr></div>     
    <br><br>
    <div class="row">
        <div class="col s6">
            <div class="card hoverable waves-effect waves-block waves-light">
                <div class="card-content center-align">
                    <span class="card-title ">Get USSD codes</span>
                    <div class="container"><hr></div>
                    <br>
                        <p>Full list of USSD codes</p>
                        <br>
                        <a class="waves-effect waves-light btn red white-text tooltipped  " data-position="bottom" data-delay="50" data-tooltip="USSD Codes"><i class="material-icons right">code</i>USSD Codes</a>
                    <br>
                </div>        
            </div>
        </div>
        <div class="col s6">
            <div class="card hoverable red  white-text">
                <div class="card-content center-align">
                    <span class="card-title bold">
                        <strong>Recharge</strong>
                    </span>
                    <div class="container"><hr></div>
                    <br>
                    <p>We've got the best plans for you</p>
                    <br>
                    <a class="waves-effect waves-light btn white red-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="Recharge"><i class="material-icons right">label</i>Recharge</a>
                    <br>
                </div>        
            </div>
        </div>
    </div> 
    <br><br>
@endsection