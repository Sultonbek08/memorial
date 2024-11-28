@extends('layouts.adminlayouts')

@section('title')
    Update Magazine - Admin
@endsection
@include('admin.sidebar')

@section('content')
    <div class="main-content">
        <section class="section">
            <h2>Update Magazine</h2>
            <div class="row">
                <div class="col-8">
                    <form action="{{ route('admin.magazine.update', $magazine->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label>name_uz</label>
                                <input name="name_uz" type="text" value="{{ $magazine->name_uz }}"
                                    class="form-control @error('name_uz')  is-invalid @enderror">
                                @error('name_uz')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label>name_en</label>
                                <input name="name_en" type="text" value="{{ $magazine->name_en }}"
                                    class="form-control @error('name_en')  is-invalid @enderror">
                                @error('name_en')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label>name_ru</label>
                                <input name="name_ru" type="text" value="{{ $magazine->name_ru }}"
                                    class="form-control @error('name_ru')  is-invalid @enderror">
                                @error('name_ru')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label>content_uz</label>
                                <input name="content_uz" type="text" value="{{ $magazine->content_uz }}"
                                    class="form-control @error('content_uz')  is-invalid @enderror">
                                @error('content_uz')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label>content_ru</label>
                                <input name="content_ru" type="text" value="{{ $magazine->content_ru }}"
                                    class="form-control @error('content_ru')  is-invalid @enderror">
                                @error('content_ru')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label>content_en</label>
                                <input name="content_en" type="text" value="{{ $magazine->content_en }}"
                                    class="form-control @error('content_en')  is-invalid @enderror">
                                @error('content_en')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label>doi</label>
                                <input name="doi" type="text" value="{{ $magazine->doi }}"
                                    class="form-control @error('doi')  is-invalid @enderror">
                                @error('doi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label>author_id</label>
                                <select name="author_id" id="author_id" required>
                                    @foreach ($authors as $author)
                                        <option value="{{ $author->id }}"
                                            {{ $article->author_id == $author->id ? 'selected' : '' }}>
                                            {{ $author->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>magazine_id</label>
                                <select name="magazine_id" id="magazine_id" required>
                                    @foreach ($magazines as $magazine)
                                        <option value="{{ $magazine->id }}"
                                            {{ $article->magazine_id == $magazine->id ? 'selected' : '' }}>
                                            {{ $magazine->name }}
                                        </option>
                                    @endforeach
                                </select>
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

    <script>
        < script type = "text/javascript" >
            CKEDITOR.replace('body_uz', {
                filebrowserUploadUrl: "{{ route('admin.upload', ['_token' => csrf_token()]) }}",
                filebrowserUploadMethod: 'form'
            });
        CKEDITOR.replace('body_ru', {
            filebrowserUploadUrl: "{{ route('admin.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        });
    </script>
    </script>
@endsection

@section('js')

    <script src="{{ asset('admin/assets/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
    <script type="text/javascript">
        CKEDITOR.replace('body_uz', {
            filebrowserUploadUrl: "{{ route('admin.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        });
        CKEDITOR.replace('body_ru', {
            filebrowserUploadUrl: "{{ route('admin.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        });
        CKEDITOR.replace('body_en', {
            filebrowserUploadUrl: "{{ route('admin.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        });
        CKEDITOR.replace('body_kr', {
            filebrowserUploadUrl: "{{ route('admin.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        });
    </script>
