@extends('layouts.adminlayouts')

@section('title')
    Update Author - Admin
@endsection
@include('admin.sidebar')

@section('content')
    <div class="main-content">
        <section class="section">
            <h2>Update Author</h2>
            <div class="row">
                <div class="col-8">
                    <form action="{{ route('admin.author.update', $author->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label>name_uz</label>
                                <input name="name_uz" type="text" value="{{ $author->name_uz }}"
                                    class="form-control @error('name_uz')  is-invalid @enderror">
                                @error('name_uz')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label>name_en</label>
                                <input name="name_en" type="text" value="{{ $author->name_en }}"
                                    class="form-control @error('name_en')  is-invalid @enderror">
                                @error('name_en')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label>name_ru</label>
                                <input name="name_ru" type="text" value="{{ $author->name_ru }}"
                                    class="form-control @error('name_ru')  is-invalid @enderror">
                                @error('name_ru')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            

                            <div class="form-group">
                                <label>bio_uz</label>
                                <textarea name="bio_uz" type="text" value="{!! $author->bio_uz !!}"
                                    class="ckeditor form-control @error('bio_uz')  is-invalid @enderror">
                                @error('bio_uz')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                {!! $author->bio_uz !!}
                                </textarea>

                            </div>

                            <div class="form-group">
                                <label>bio_en</label>
                                <textarea name="bio_en" type="text" value="{{ $author->bio_en }}"
                                    class="ckeditor form-control @error('bio_en')  is-invalid @enderror">
                                @error('bio_en')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                {!! $author->bio_en !!}
                                </textarea>

                            </div>

                            <div class="form-group">
                                <label>bio_ru</label>
                                <textarea name="bio_ru" type="text" value="{{ $author->bio_ru }}"
                                    class="ckeditor form-control @error('bio_ru')  is-invalid @enderror">
                                @error('bio_ru')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                {!! $author->bio_ru !!}
                                </textarea>

                            </div>

                            <div class="form-group">
                                <label for="">image</label>
                                <input type="file" name="image"
                                    class="form-control @error('image')  is-invalid @enderror">
                                <img src="/front/Author/{{ $author->image }}" alt="">
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>  

                            <div class="form-group">
                                <label>email</label>
                                <input name="email" type="email" value="{{ $author->email }}"
                                    class="form-control @error('email')  is-invalid @enderror">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label>facebook</label>
                                <input name="facebook" type="url" value="{{ $author->facebook }}"
                                    class="form-control @error('facebook')  is-invalid @enderror">
                                @error('facebook')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label>telegram</label>
                                <input name="telegram" type="url" value="{{ $author->telegram }}"
                                    class="form-control @error('telegram')  is-invalid @enderror">
                                @error('telegram')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label>instagram</label>
                                <input name="instagram" type="url" value="{{ $author->instagram }}"
                                    class="form-control @error('instagram')  is-invalid @enderror">
                                @error('instagram')
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
