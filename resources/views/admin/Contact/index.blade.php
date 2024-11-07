@extends('layouts.adminlayouts')
@section('title')
    Contact
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
                            <h2>Aloqa</h2>
                        </div>
                        <div class="col-6">
                        </div>

                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">name</th>
                                        <th scope="col">email</th>
                                        <th scope="col">phone_number</th>
                                        <th scope="col">subject</th>
                                        <th scope="col">message</th>
                                        <th scope="col">Condition</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $contact)
                                        <tr>
                                            <th scope="row">{{ $contact->id }}</th>
                                            <td>{{ $contact->name }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ $contact->phone_number }}</td>
                                            <td>{{ $contact->subject }}</td>
                                            <td>{{ $contact->message }}</td>
                                            <td class="d-flex align-items-center">

                                                <form action="{{ route('admin.contact.destroy', $contact->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('O\'chirishni xohlaysizmi👌')"
                                                        class="btn btn-danger">O'chirish</button>
                                                </form>
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer text-right">
                            <nav class="d-inline-block">
                                <ul class="pagination mb-0">
                                    {{ $contacts->links() }}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
