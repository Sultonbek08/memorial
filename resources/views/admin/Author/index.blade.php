@extends('layouts.adminlayouts')
@section('title')
    Author
@endsection
@section('content')
@include('admin.sidebar')
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-12">
            @if(session('success'))
              <div class="alert alert-success alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>×</span>
                        </button>
                        {{ session('success') }}
                      </div>
                    </div>
              @endif
              @if(session('danger'))
              <div class="alert alert-danger alert-dismissible show fade">
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>x</span>
                        </button>
                        {{ session('danger') }}
                      </div>
                    </div>
              @endif
              @if(session('primary'))
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
                  <h2>Author</h2>
                  </div>
                  <div class="col-6">
                  <a href="{{ route('admin.author.create') }}" class="btn btn-success">Author create</a>
                  </div>

                  <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">name_uz</th>
                          <th scope="col">bio_uz</th>
                          <th scope="col">email</th>
                          <th scope="col">facebook</th>
                          <th scope="col">telegram</th>
                          <th scope="col">instagram</th>
                          <th scope="col">image</th>
                          <th scope="col">Holat</th>
                        </tr>
                      </thead>
                      <tbody>
                       @foreach ($authors as $author)
                        <tr>
                          <th scope="row">{{ $author->id }}</th>
                          <td>{{ $author->name_uz }}</td>
                          <td>{!! $author->bio_uz !!}</td>
                          <td>{{ $author->email }}</td>
                          <td>{{ $author->facebook }}</td>
                          <td>{{ $author->telegram }}</td>
                          <td>{{ $author->instagram }}</td>
                          <td>
                            <img src="/front/Author/{{ $author->image }}" alt="image" width="50"> 
                          </td>
                          <td class="d-flex align-items-center">

                          <form action="{{ route('admin.author.destroy',$author->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Delate')" class="btn btn-danger">Delate</button>
                          </form>
                            <a href="{{ route('admin.author.edit', $author->id) }}" class="btn btn-primary">Update</a>
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
