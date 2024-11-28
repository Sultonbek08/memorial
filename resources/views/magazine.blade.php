@extends('layouts.frontlayouts')
@section('title')
    Magazine
@endsection

@section('content')
    <div class="about-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="abouttitle">
                        <h2>Magazines</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Books -->
    <div class="Books">
        <div class="container">

            <div class="row box">
                @foreach ($magazines as $magazine)
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 " style="margin-top: 30px ; margin-bottom: 30px ;">
                        <div class="book-box">
                            <figure><img style="width: 250px; height: 200px;" src="front/Magazine/{{ $magazine->image }}"
                                    alt="img" />
                            </figure>
                            <a href="{{ route("magazine__detail", ['id' => $magazine->id]) }}"
                                style="font-size: 20px; color: black">{{ $magazine->name_en }}</a>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
    </div>
    <!-- end Books -->
@endsection
