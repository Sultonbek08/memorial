@extends('layouts.adminlayouts')

@section('title')
    Create Magazine - Admin
@endsection
@include('admin.sidebar')

@section('content')
    <div class="main-content">
        <section class="section">
            <h2>Create Magazine</h2>
            <div class="row">
                <div class="col-8">
                    <form action="{{ route('admin.magazine.store') }}" method="POST" enctype="multipart/form-data">
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
                                <label>published_magazines</label>
                                <input name="published_magazines" type="text"
                                    class="form-control @error('published_magazines')  is-invalid @enderror">
                                @error('published_magazines')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label>short_name_uz</label>
                                <input name="short_name_uz" type="text"
                                    class="form-control @error('short_name_uz')  is-invalid @enderror">
                                @error('short_name_uz')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label>short_name_en</label>
                                <input name="short_name_en" type="text"
                                    class="form-control @error('short_name_en')  is-invalid @enderror">
                                @error('short_name_en')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label>short_name_ru</label>
                                <input name="short_name_ru" type="text"
                                    class="form-control @error('short_name_ru')  is-invalid @enderror">
                                @error('short_name_ru')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label>veb_sayt</label>
                                <input name="veb_sayt" type="url"
                                    class="form-control @error('veb_sayt')  is-invalid @enderror">
                                @error('veb_sayt')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label>issn_publish</label>
                                <input name="issn_publish" type="text"
                                    class="form-control @error('issn_publish')  is-invalid @enderror">
                                @error('issn_publish')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label>location</label>
                                <input name="location" type="text"
                                    class="form-control @error('location')  is-invalid @enderror">
                                @error('location')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label>email</label>
                                <input name="email" type="email"
                                    class="form-control @error('email')  is-invalid @enderror">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label>phone_number</label>
                                <input name="phone_number" type="text"
                                    class="form-control @error('phone_number')  is-invalid @enderror">
                                @error('phone_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label>description</label>
                                <input name="description" type="text"
                                    class="form-control @error('description')  is-invalid @enderror">
                                @error('description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

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
                                <label for="">file</label>
                                <input type="file" name="file"
                                    class="form-control @error('file')  is-invalid @enderror">
                                @error('file')
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
