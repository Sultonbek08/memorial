@extends('layouts.adminlayouts')

@section('title')
    Create Author - Admin
@endsection
@include('admin.sidebar')

@section('content')
    <div class="main-content">
        <section class="section">
            <h2>Create Author</h2>
            <div class="row">
                <div class="col-8">
                    <form action="{{ route('admin.author.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>name_uz</label>
                                <input name="name_uz" type="text"
                                    class="form-control @error('name_uz')  is-invalid @enderror"
                                    >
                                @error('name_uz')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label>name_en</label>
                                <input name="name_en" type="text"
                                    class="form-control @error('name_en')  is-invalid @enderror"
                                    >
                                @error('name_en')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label>name_ru</label>
                                <input name="name_ru" type="text"
                                    class="form-control @error('name_ru')  is-invalid @enderror"
                                    >
                                @error('name_ru')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label>bio_uz</label>
                                <textarea name="bio_uz" type="text"
                                    class="ckeditor form-control @error('bio_uz')  is-invalid @enderror">
                                @error('bio_uz')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </textarea>

                            </div>

                            <div class="form-group">
                                <label>bio_en</label>
                                <textarea name="bio_en" type="text"
                                    class="ckeditor form-control @error('bio_en')  is-invalid @enderror">
                                @error('bio_en')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </textarea>

                            </div>

                            <div class="form-group">
                                <label>bio_ru</label>
                                <textarea name="bio_ru" type="text"
                                    class="ckeditor form-control @error('bio_ru')  is-invalid @enderror">
                                @error('bio_ru')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </textarea>

                            </div>

                            <div class="form-group">
                                <label for="">image</label>
                                <input type="file" name="image"
                                    class="form-control @error('image')  is-invalid @enderror">
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>email</label>
                                <input name="email" type="email"
                                    class="form-control @error('email')  is-invalid @enderror"
                                    >
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label>facebook</label>
                                <input name="facebook" type="url"
                                    class="form-control @error('facebook')  is-invalid @enderror"
                                    >
                                @error('facebook')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label>telegram</label>
                                <input name="telegram" type="url"
                                    class="form-control @error('telegram')  is-invalid @enderror"
                                    >
                                @error('telegram')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label>instagram</label>
                                <input name="instagram" type="url"
                                    class="form-control @error('instagram')  is-invalid @enderror"
                                    >
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
@endsection

@section('js')

<script src="{{ asset('admin/assets/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
    <script type="text/javascript">
    CKEDITOR.replace('body_uz', {
        filebrowserUploadUrl: "{{route('admin.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    CKEDITOR.replace('body_ru', {
        filebrowserUploadUrl: "{{route('admin.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    CKEDITOR.replace('body_en', {
        filebrowserUploadUrl: "{{route('admin.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    CKEDITOR.replace('body_kr', {
        filebrowserUploadUrl: "{{route('admin.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });

</script>
