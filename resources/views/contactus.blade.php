@extends('layouts.frontlayouts')
@section('title')
    CONTACT US
@endsection

@section('content')
    <div class="about-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="abouttitle">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact -->
    <div class="Contact">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <form action="{{ route('admin.contact.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <input class="form-control" placeholder="Name" name="name" type="text">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <input class="form-control" placeholder="Email" name="email" type="Email">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <input class="form-control" placeholder="Phone Number" name="phone_number" type="text">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <input class="form-control" placeholder="Subject" name="subject" type="text">
                            </div>
                            <div class="col-sm-12">
                                <textarea class="textarea" name="message" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="send-btn">Send</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <!-- end Contact -->
@endsection
