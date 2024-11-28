@extends('layouts.frontlayouts')
@section('title')
    Magazine Detail
@endsection

@section('content')
    <div class="about-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="abouttitle">
                        <h2>Magazine Detail</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Books -->
    <div class="Books">
        <div class="container">
            <div class="magazine-card m-5">
                <div class="row">
                    <!-- Magazine Image Section -->
                    <div class="col-md-4">
                        @if ($magazine->image)
                            <img src="{{ asset('front/magazine/' . $magazine->image) }}" alt="{{ $magazine->name_uz }}"
                                class="img-fluid magazine-image">
                        @else
                            <img src="front/magazine/" alt="No image" class="img-fluid magazine-image">
                        @endif
                    </div>

                    <!-- Magazine Information Section -->
                    <div class="col-md-8">
                        <h2>{{ $magazine->name_uz }}</h2>
                        <p><strong>Email:</strong> <a href="mailto:{{ $magazine->email }}">{{ $magazine->email }}</a></p>
                        <p><strong>Biography:</strong> {{ $magazine->bio_uz }}</p>

                        <!-- Social Media Links -->
                        <div class="social-icons mt-3">
                            <a href="{{ $magazine->facebook }}" target="_blank" class="btn btn-primary"><i
                                    class="bi bi-facebook"></i> Facebook</a>
                            <a href="{{ $magazine->instagram }}" target="_blank" class="btn btn-danger"><i
                                    class="bi bi-instagram"></i> Instagram</a>
                            <a href="{{ $magazine->telegram }}" target="_blank" class="btn btn-info"><i
                                    class="bi bi-telegram"></i> Telegram</a>
                        </div>

                        <!-- Back Button -->
                        <a href="{{ route('magazine') }}" class="btn btn-secondary mt-3">Back to Magazines List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Books -->
@endsection

<style>
    @media (max-width: 768px) {
        .magazine-card {
            padding: 15px;
        }

        .magazine-card img {
            width: 100%;
            height: auto;
        }
    }

    /* Basic body styling */
    body {
        background-color: #f0f4f8;
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
    }

    /* Magazine Card Styling */
    .magazine-card {
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        padding: 30px;
        margin-top: 50px;
    }

    /* Styling for magazine image */
    .magazine-image {
        border-radius: 8px;
    }

    /* Styling for headers and paragraphs */
    h2 {
        font-size: 2.5rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
    }

    p {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #555;
    }

    /* Social Media Buttons */
    .social-icons .btn {
        font-size: 1.1rem;
        padding: 10px 20px;
        margin-right: 10px;
        border-radius: 5px;
        text-align: center;
    }

    .social-icons .btn i {
        margin-right: 8px;
    }

    /* Responsive Design for Mobile */
    @media (max-width: 768px) {
        .magazine-card {
            padding: 15px;
        }

        .magazine-image {
            width: 100%;
            height: auto;
        }

        h2 {
            font-size: 1.8rem;
        }
    }
</style>
<script>
    // custom.js - You can add any custom JS functionality here

    // Example of adding some dynamic effects when hovering over the social media buttons
    document.querySelectorAll('.social-icons .btn').forEach(button => {
        button.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.1)';
        });
        button.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });
</script>
