@extends('layouts.frontlayouts')
@section('title')
    OUR BOOKS
@endsection

@section('content')
    <div class="about-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="abouttitle">
                        <h2>Search</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Books -->
    <div class="Books">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <br>
                    <div class="search-container">
                        <form action="{{ route('search') }}" method="GET" class="search-form">
                            <input type="text" name="query" placeholder="Search..." class="search-input" required>
                            <button type="submit" class="search-button">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="icon">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg>
                            </button>
                        </form>
                    </div>

                    <div class="search-results">
                        <h1>Search Results for </h1>
                        @if ($totalResults > 0)
                            <p>Total results found: {{ $totalResults }}</p>

                            <!-- Authorlar -->
                            <div class="results-section">
                                <h2>Authors</h2>
                                <ul class="results-list">
                                    @forelse ($authors as $author)
                                        <li class="result-item">
                                            <strong>{{ $author->name_uz }}</strong>
                                            @if (!empty($author->name_ru))
                                                <span class="translation">({{ $author->name_ru }})</span>
                                            @endif
                                        </li>
                                    @empty
                                        <p class="no-results">No authors found.</p>
                                    @endforelse
                                </ul>
                            </div>

                            <!-- Article'lar -->
                            <div class="results-section">
                                <h2>Articles</h2>
                                <ul class="results-list">
                                    @forelse ($articles as $article)
                                        <li class="result-item">
                                            <strong>{{ $article->title_uz }}</strong>
                                            @if (!empty($article->title_ru))
                                                <span class="translation">({{ $article->title_ru }})</span>
                                            @endif
                                            <p class="result-snippet">{{ Str::limit($article->content_uz, 100) }}</p>
                                        </li>
                                    @empty
                                        <p class="no-results">No articles found.</p>
                                    @endforelse
                                </ul>
                            </div>

                            <!-- Magazine'lar -->
                            <div class="results-section">
                                <h2>Magazines</h2>
                                <ul class="results-list">
                                    @forelse ($magazines as $magazine)
                                        <li class="result-item">
                                            <strong>{{ $magazine->name_uz }}</strong>
                                            @if (!empty($magazine->name_ru))
                                                <span class="translation">({{ $magazine->name_ru }})</span>
                                            @endif
                                        </li>
                                    @empty
                                        <p class="no-results">No magazines found.</p>
                                    @endforelse
                                </ul>
                            </div>
                        @else
                            <p>No results found.</p>
                        @endif
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- end Books -->
@endsection
<style>
    ul {
        list-style-type: none;
        padding: 0;
    }

    li {
        margin-bottom: 10px;
    }

    h2 {
        margin-top: 20px;
    }

    p {
        font-size: 14px;
        color: gray;
    }

    /* Search Container */
    .search-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 50px;
        padding: 20px;
    }

    /* Search Form */
    .search-form {
        display: flex;
        align-items: center;
        border: 2px solid #ccc;
        border-radius: 30px;
        overflow: hidden;
        background-color: #fff;
        transition: all 0.3s ease-in-out;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    /* Input Field */
    .search-input {
        border: none;
        padding: 10px 15px;
        font-size: 16px;
        outline: none;
        width: 250px;
        transition: width 0.3s ease-in-out;
    }

    .search-input:focus {
        width: 300px;
    }

    /* Search Button */
    .search-button {
        border: none;
        background: #007bff;
        color: #fff;
        padding: 10px 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
    }

    .search-button:hover {
        background-color: #0056b3;
    }

    /* Icon inside button */
    .icon {
        width: 20px;
        height: 20px;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .search-input {
            width: 200px;
        }

        .search-input:focus {
            width: 250px;
        }
    }

    /* Search Results Container */
    .search-results {
        max-width: 800px;
        margin: 50px auto;
        padding: 20px;
        font-family: Arial, sans-serif;
        background: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    /* Main Heading */
    .search-results h1 {
        font-size: 24px;
        margin-bottom: 20px;
        text-align: center;
        color: #333;
    }

    /* Section Styling */
    .results-section {
        margin-bottom: 30px;
    }

    .results-section h2 {
        font-size: 20px;
        margin-bottom: 10px;
        color: #007bff;
        border-bottom: 2px solid #007bff;
        display: inline-block;
        padding-bottom: 5px;
    }

    /* Results List */
    .results-list {
        list-style: none;
        padding: 0;
    }

    .result-item {
        margin-bottom: 15px;
        padding: 10px;
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 6px;
        transition: box-shadow 0.3s ease-in-out;
    }

    .result-item:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Translation */
    .translation {
        font-size: 14px;
        color: #555;
        margin-left: 5px;
        font-style: italic;
    }

    /* Snippet (for articles) */
    .result-snippet {
        margin-top: 5px;
        font-size: 14px;
        color: #666;
        line-height: 1.4;
    }

    /* No Results */
    .no-results {
        color: #999;
        font-style: italic;
        margin-top: 10px;
        text-align: center;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .search-results {
            padding: 15px;
        }

        .search-results h1 {
            font-size: 20px;
        }

        .results-section h2 {
            font-size: 18px;
        }

        .result-snippet {
            font-size: 13px;
        }
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const inputField = document.querySelector('.search-input');
        inputField.addEventListener('input', function() {
            console.log("Current Search Query: ", this.value);
        });
    });
    // document.addEventListener('DOMContentLoaded', function() {
    //     const noResults = document.querySelectorAll('.no-results');
    //     if (noResults.length) {
    //         alert("No results found. Try searching for something else!");
    //     }
    // });
</script>
