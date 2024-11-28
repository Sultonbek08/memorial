@extends('layouts.adminlayouts')

@section('title')
    Create Article - Admin
@endsection
@include('admin.sidebar')

@section('content')
    <div class="main-content">
        <section class="section">
            <h2>Create Article</h2>
            <div class="row">
                <div class="col-8">
                    <form action="{{ route('admin.article.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>name_uz</label>
                                <input name="name_uz" type="text"
                                    class="form-control @error('name_uz')  is-invalid @enderror">
                                @error('name_uz')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label>name_en</label>
                                <input name="name_en" type="text"
                                    class="form-control @error('name_en')  is-invalid @enderror">
                                @error('name_en')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label>name_ru</label>
                                <input name="name_ru" type="text"
                                    class="form-control @error('name_ru')  is-invalid @enderror">
                                @error('name_ru')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label>content_uz</label>
                                <input name="content_uz" type="text"
                                    class="form-control @error('content_uz')  is-invalid @enderror">
                                @error('content_uz')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label>content_en</label>
                                <input name="content_en" type="text"
                                    class="form-control @error('content_en')  is-invalid @enderror">
                                @error('content_en')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label>content_ru</label>
                                <input name="content_ru" type="text"
                                    class="form-control @error('content_ru')  is-invalid @enderror">
                                @error('content_ru')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label>doi</label>
                                <input name="doi" type="text"
                                    class="form-control @error('doi')  is-invalid @enderror">
                                @error('doi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label for="author_id">author_id</label>
                                <select name="author_id" id="author_id" required>
                                    <option value="">Select an Author</option>
                                    @foreach ($authors as $author)
                                        <option value="{{ $author->id }}">{{ $author->name_uz }}</option>
                                    @endforeach
                                </select>
                                @error('author_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label for="magazine_id">magazine_id</label>
                                <select name="magazine_id" id="magazine_id" required>
                                    <option value="">Select an Magazine</option>
                                    @foreach ($magazines as $magazine)
                                        <option value="{{ $magazine->id }}">{{ $magazine->name_uz }}</option>
                                    @endforeach
                                </select>
                                @error('magazine_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </section>
    </div>
@endsection
