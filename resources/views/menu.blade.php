<!-- ***** Menu Area Starts ***** -->
@extends('templates.default')

@section('content')
    
<section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h6>{{$Menu['title']}}</h6>
                    <h2>{{$Menu['head']}}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item-carousel">
        <div class="col-lg-16">
            <div class="owl-menu-item owl-carousel">
                <div class="item">
                    <div class='card card1'>
                        <div class="price"><h6>$14</h6></div>
                        <div class='info'>
                          <h1 class='title'>{{$Menu['foodname']}}</h1>
                          <p class='description'>{{$Menu['desc']}}</p>
                          <div class="main-text-button">
                              <div class="scroll-to-section"><a href="/contact">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class='card card2'>
                        <div class="price"><h6>$22</h6></div>
                        <div class='info'>
                          <h1 class='title'>Klassy Pancake</h1>
                          <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                          <div class="main-text-button">
                              <div class="scroll-to-section"><a href="/contact">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class='card card3'>
                        <div class="price"><h6>$18</h6></div>
                        <div class='info'>
                          <h1 class='title'>Tall Klassy Bread</h1>
                          <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                          <div class="main-text-button">
                              <div class="scroll-to-section"><a href="/contact">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class='card card4'>
                        <div class="price"><h6>$10</h6></div>
                        <div class='info'>
                          <h1 class='title'>Blueberry CheeseCake</h1>
                          <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                          <div class="main-text-button">
                              <div class="scroll-to-section"><a href="/contact">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class='card card5'>
                        <div class="price"><h6>$8.50</h6></div>
                        <div class='info'>
                          <h1 class='title'>Klassy Cup Cake</h1>
                          <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                          <div class="main-text-button">
                              <div class="scroll-to-section"><a href="/contact">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class='card card3'>
                        <div class="price"><h6>$7.25</h6></div>
                        <div class='info'>
                          <h1 class='title'>Klassic Cake</h1>
                          <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                          <div class="main-text-button">
                              <div class="scroll-to-section"><a href="/contact">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Menu Area Ends ***** -->
@endsection