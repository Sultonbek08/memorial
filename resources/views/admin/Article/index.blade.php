@extends('layouts.adminlayouts')
@section('title')
    Article
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
                            <h2>Article</h2>
                        </div>
                        <div class="col-6">
                            <a href="{{ route('admin.article.create') }}" class="btn btn-success">Article create</a>
                        </div>

                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">name_uz</th>
                                        <th scope="col">content_uz</th>
                                        <th scope="col">doi</th>
                                        <th scope="col">author_id</th>
                                        <th scope="col">magazine_id</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($articles as $article)
                                        <tr>
                                            <th scope="row">{{ $article->id }}</th>
                                            <td>{{ $article->name_uz }}</td>
                                            <td>{{ $article->content_uz }}</td>
                                            <td>{{ $article->doi }}</td>
                                            <td>{{ $article->author->name_uz }}</td>
                                            <td>{{ $article->magazine->name_uz }}</td>
                                            
                                            <td class="d-flex align-items-center">

                                                <form action="{{ route('admin.article.destroy', $article->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('Delate')"
                                                        class="btn btn-danger">Delate</button>
                                                </form>
                                                <a href="{{ route('admin.article.edit', $article->id) }}"
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
