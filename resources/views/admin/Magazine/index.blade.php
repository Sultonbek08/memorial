@extends('layouts.adminlayouts')
@section('title')
    Magazine
@endsection
@section('content')
    @include('admin.sidebar')
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                </button>
                                {{ session('success') }}
                            </div>
                        </div>
                    @endif
                    @if (session('danger'))
                        <div class="alert alert-danger alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>x</span>
                                </button>
                                {{ session('danger') }}
                            </div>
                        </div>
                    @endif
                    @if (session('primary'))
                        <div class="alert alert-primary alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>x</span>
                                </button>
                                {{ session('primary') }}
                            </div>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h2>Magazine</h2>
                        </div>
                        <div class="col-6">
                            <a href="{{ route('admin.magazine.create') }}" class="btn btn-success">Magazine create</a>
                        </div>

                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">name_uz</th>
                                        <th scope="col">published_magazines</th>
                                        <th scope="col">short_name_uz</th>
                                        <th scope="col">veb_sayt</th>
                                        <th scope="col">issn_publish</th>
                                        <th scope="col">location</th>
                                        <th scope="col">email</th>
                                        <th scope="col">phone_number</th>
                                        <th scope="col">description</th>
                                        <th scope="col">image</th>
                                        <th scope="col">file</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($magazines as $magazine)
                                        <tr>
                                            <th scope="row">{{ $magazine->id }}</th>
                                            <td>{{ $magazine->name_uz }}</td>
                                            <td>{{ $magazine->published_magazines }}</td>
                                            <td>{{ $magazine->short_name_uz }}</td>
                                            <td>
                                                <a href="{{ $magazine->veb_sayt }}">{{ $magazine->veb_sayt }}</a>
                                            </td>
                                            <td>{{ $magazine->issn_publish }}</td>
                                            <td>{{ $magazine->location }}</td>
                                            <td>{{ $magazine->email }}</td>
                                            <td>{{ $magazine->phone_number }}</td>
                                            <td>{{ $magazine->description }}</td>
                                            <td>
                                                <img src="/front/Magazine/{{ $magazine->image }}" alt="image"
                                                    width="50">
                                            </td>
                                            <td>
                                                <img src="/front/Magazine/{{ $magazine->file }}" alt="file"
                                                    width="50">
                                            </td>
                                            <td class="d-flex align-items-center">

                                                <form action="{{ route('admin.magazine.destroy', $magazine->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('Delate')"
                                                        class="btn btn-danger">Delate</button>
                                                </form>
                                                <a href="{{ route('admin.magazine.edit', $magazine->id) }}"
                                                    class="btn btn-primary">Update</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer text-right">
                            <nav class="d-inline-block">
                                <ul class="pagination mb-0">

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
