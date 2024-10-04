@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h3 class="my-3">Tabella</h3>
                <a href="{{ route('admin.posts.create')}}" class="btn btn-sm btn-primary">Aggiungi nuovo elemento</a>
                <hr>
            </div>
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Strumenti</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->slug }}</td>
                                <td>
                                    <a href="{{ route('admin.posts.show', ['post' => $post->id])}}" class="btn btn-sm btn-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection