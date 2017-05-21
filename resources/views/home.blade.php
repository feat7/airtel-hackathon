@extends('layouts.app')

@section('container')


<div class="center">
    <div class="row">
      <div class="col s12">
        <ul class="tabs">
            <li class="tab col s3"><a href="#home" class="black-text">Home</a></li>
            <li class="tab col s3"><a href="#active_services" class="black-text">Active Services</a></li>
            <li class="tab col s3"><a href="#transactions" class="black-text">Transactions</a></li>
            <li class="tab col s3"><a href="#history" class="black-text">History</a></li>
        </ul>
      </div>
      <div>

        <div id="home" class="col s12 black-text">
        <br><br>
        <div class="row">
          <div class="col s4">
          <div class="card z-depth-3 hoverable">
            <div class="card-content">
              <span class="card-title">Current Balance</span>
              <h5>200 Rs</h5>
            </div>
          </div>
          </div>
          <div class="col s4">
          <div class="card z-depth-3 hoverable">
            <div class="card-content">
              <span class="card-title">Available Services</span>
              <h5>Details</h5>
            </div>
          </div>
          </div>
          <div class="col s4">
          <div class="card z-depth-3 hoverable">
            <div class="card-content">
              <span class="card-title">Previous Transactions</span>
              <h5>Details</h5>
            </div>
          </div>
          </div>
        </div>

        <div class="row">
            <div class="col s6">
              <div class="card z-depth-3 hoverable">
            <div class="card-content">
              <span class="card-title">Activated Data Packs</span>
              <h5>Details</h5>
            </div>
          </div>
            </div>
            <div class="col s6">
              <div class="card z-depth-3 hoverable">
            <div class="card-content">
              <span class="card-title">Last Event</span>
              <h5>Details</h5>
            </div>
          </div>
            </div>
        </div>



        </div>
        <div id="active_services" class="col s12 black-text">
        <br><br>
            <div class="row">
              <div class="col s6  ">
              <div class="card hoverable">
                <div class="card-content">
                  <span class="card-title">Available Balance</span>
                  <p>Details</p>
                </div>
                </div>
              </div>
              <div class="col s6">
              <div class="card">
                <div class="card-content hoverable">
                  <span class="card-title">Activated Data Pack</span>
                  <p>Details</p>
                </div>
                </div>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col s6">
                  <div class="card hoverable">
                    <div class="card-content">
                      <span class="card-title">SMS Activation</span>
                      <p>Details</p>
                    </div>
                  </div>
                </div>
                <div class="col s6">
                  <div class="card hoverable">
                    <div class="card-content">
                      <span class="card-title">DND Service</span>
                      <p>Details</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>



        </div>
        <div id="transactions" class="col s12 black-text">
           <br><br>
           <div class="container">
           <div class="row">
              <div class="col s12">
              <div class="card hoverable">
                <div class="card-content">
                  <span class="card-title">Transaction History</span>
                  <p>List Details</p>
                  <br><br>
                  <ul>
                    <li></li>
                  </ul>
                </div>
              </div>
              </div>
            </div>
        </div>
        </div>
       
        <div id="history" class="col s12 black-text">
           <br><br>
           <div class="row">
              <div class="col s4">
              <div class="card hoverable">
                <div class="card-content">
                  <span class="card-title">Service History</span>
                  <p>List Details</p>
                  <br><br>
                  <ul>
                    <li></li>
                  </ul>
                </div>
              </div>
              </div>
              <div class="col s4">
              <div class="card hoverable">
                <div class="card-content">
                  <span class="card-title">Transaction History</span>
                  <p>List Details</p>
                  <br><br>
                  <ul>
                    <li></li>
                  </ul>
                </div>
              </div>
              </div>
              <div class="col s4">
              <div class="card hoverable">
                <div class="card-content">
                  <span class="card-title">Balance History</span>
                  <p>List Details</p>
                  <br><br>
                  <ul>
                    <li></li>
                  </ul>
                </div>
              </div>
              </div>
            </div>
        </div>

      </div>
    </div>

</div>

@endsection