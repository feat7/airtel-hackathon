@extends('layouts.app')
@section('container')
    @parent
    <h1 class="center-align animated pulse infinite" style="color: #ef5350;"><strong>AIRTEL</strong></h1>
    <h5 class="center-align">India's first open network</h5>
    <br><br>
    <div class="center-align">
        <a class="waves-effect waves-light btn red  white-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="User Login" href="userlogin.html">
            <i class="material-icons right">perm_identity</i>
            <strong>User</strong>
        </a>
    </div>

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
                    <form action="solution.html">
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
                        <br><br>
                    </form>
                    <ul>
                        <li>I want to know regarding all plans available</li><br>
                        <li>I want to change my plan</li> <br> 
                        <li>I want to know the ARC/airtel store address and contact details.</li><br>
                        <li>Recharge not reflecting on my account</li><br>
                        <li>Can I block my SIM if my phone is lost ?</li><br> 
                    </ul>
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