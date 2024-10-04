@extends('layouts.app')

@section('content')
    <div class="container-fluid p-3">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.posts.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title" class="control-label"><strong>Titolo :</strong></label>
                        <input type="text" name="title" id="title" class="form-control form-control-sm" placeholder="Inserisci il titolo">
                    </div>
                    <div class="form-group my-3">
                        <label for="content" class="control-label"><strong>Contenuto :</strong></label>
                        <textarea class="form-control form-control-sm w-100 textarea-sm" name="content" id="content" placeholder="Inserisci il contenuto"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-success">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection