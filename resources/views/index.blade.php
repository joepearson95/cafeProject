@extends('layouts.app')

@section('title', 'Index')

@section('content')
    <!--about-->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center marb-35">
                    <h1 class="header-h">The Poppy Seed</h1>
                    <p class="header-p">A cafe in the Vale of Belovir<br>Amongst the hustle and bustle of Bottesford</p>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="col-md-6 col-sm-6">
                        <div class="about-info">
                            <h2 class="heading">We offer a wide variety of things, such as the following:</h2>
                            <div class="details-list">
                                <ul>
                                    <li><i class="fa fa-check"></i>Homemade cakes and other tasty treats</li>
                                    <li><i class="fa fa-check"></i>Coffes (hot and cold)</li>
                                    <li><i class="fa fa-check"></i>Free wifi!</li>
                                    <li><i class="fa fa-check"></i>And more!</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=217692eafea198d67733b9ee9c3f99d7&auto=format&fit=crop&w=1050&q=80" alt="" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
    <!-- event -->
    <section id="event">
        <div class="bg-color" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center" style="padding:60px;">
                        <h1 class="header-h">Up Coming events</h1>
                        <p class="header-p">Coming soon...</p>
                    </div>
                    <!--<div class="col-md-12" style="padding-bottom:60px;">
                        <div class="item active left">
                            <div class="col-md-6 col-sm-6 left-images">
                                <img src="img/res02.jpg" class="img-responsive">
                            </div>
                            <div class="col-md-6 col-sm-6 details-text">
                                <div class="content-holder">
                                    <h2>Joyful party</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore eos suscipit earum voluptas aliquam recusandae, quae iure adipisci, inventore quia, quos delectus quaerat praesentium id expedita nihil illo accusantium, tempora.</p>
                                    <address>
                              <strong>Place: </strong>
                              1612 Collins Str, Victoria 8007
                              <br>
                              <strong>Time: </strong>
                              07:30pm
                            </address>
                                    <a class="btn btn-imfo btn-read-more" href="events-details.html">Read more</a>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- menu -->
    <section id="menu-list" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center marb-35">
                    <h1 class="header-h">Menu List</h1>
                    <p class="header-p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                        <br>nibh euismod tincidunt ut laoreet dolore magna aliquam. </p>
                </div>

                <div class="col-md-12  text-center" id="menu-flters">
                    <ul>
                        <li><a class="filter active" data-filter=".menu-restaurant">Show All</a></li>
                        <li><a class="filter" data-filter=".breakfast">Breakfast</a></li>
                        <li><a class="filter" data-filter=".lunch">Lunch</a></li>
                        <li><a class="filter" data-filter=".dinner">Dinner</a></li>
                    </ul>
                </div>

                <div id="menu-wrapper">
                    @foreach($products as $product)
                        <div class="{{ $product->product_type }} menu-restaurant">
                            <span class="clearfix">
                            <a class="menu-title product_name" href="{{route('productInfo', $product->id)}}" data-meal-img="assets/img/restaurant/rib.jpg">{{ $product->product_name}}</a>
                                <span style="left: 166px; right: 44px;" class="menu-line"></span>
                            <span class="menu-price">
                                <span class="price">${{ $product->price }}</span>
                            </span>
                            </span>
                            <span class="menu-subtitle">{{ $product->product_description }}</span>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>
    <!-- contact -->
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="header-h">Book Your table</h1>
                    <p class="header-p">This feature and more, all coming soon...</p>
                </div>
            </div>
            <div class="row msg-row">
                <div class="col-md-4 col-sm-4 mr-15">
                    <div class="media-2">
                        <div class="media-left">
                            <div class="contact-phone bg-1 text-center"><span class="phone-in-talk fa fa-phone"></span></div>
                        </div>
                        <div class="media-body">
                            <h4 class="dark-blue regular">Phone Number</h4>
                            <p class="light-blue regular alt-p">01949 843336 - <span class="contacts-sp">Main Phone Number</span></p>
                        </div>
                    </div>
                    <div class="media-2">
                        <div class="media-left">
                            <div class="contact-email bg-14 text-center"><span class="hour-icon fas fa-clock"></span></div>
                        </div>
                        <div class="media-body">
                            <h4 class="dark-blue regular">Opening Hours</h4>
                            <p class="light-blue regular alt-p"> Monday to Friday 09.00 - 15:00</p>
                            <p class="light-blue regular alt-p">
                                Saturday 09:00 - 14.00
                            </p>
                            <p class="light-blue regular alt-p"> Sunday - Closed</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8">
                    <form action="#" method="post" role="form" class="contactForm">
                        <div id="sendmessage">Your booking request has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <div class="col-md-6 col-sm-6 contact-form pad-form">
                            <div class="form-group label-floating is-empty">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>

                        </div>
                        <div class="col-md-6 col-sm-6 contact-form">
                            <div class="form-group">
                                <input type="date" class="form-control label-floating is-empty" name="date" id="date" placeholder="Date" data-rule="required" data-msg="This field is required" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 contact-form pad-form">
                            <div class="form-group">
                                <input type="email" class="form-control label-floating is-empty" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 contact-form">
                            <div class="form-group">
                                <input type="time" class="form-control label-floating is-empty" name="time" id="time" placeholder="Time" data-rule="required" data-msg="This field is required" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 contact-form">
                            <div class="form-group">
                                <input type="text" class="form-control label-floating is-empty" name="phone" id="phone" placeholder="Phone" data-rule="required" data-msg="This field is required" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 contact-form">
                            <div class="form-group">
                                <input type="text" class="form-control label-floating is-empty" name="people" id="people" placeholder="People" data-rule="required" data-msg="This field is required" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-12 contact-form">
                            <div class="form-group label-floating is-empty">
                                <textarea class="form-control" name="message" rows="5" rows="3" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </div>

                        </div>
                        <div class="col-md-12 btnpad">
                            <div class="contacts-btn-pad">
                                <button class="contacts-btn">Book Table</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection