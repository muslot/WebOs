@extends('layouts.main')
@section('app')

<head>
    <link rel="stylesheet" href="{{URL::asset('/css/Notes/notes.css')}}">
</head>
<div>
    <div class="container">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <h3>Update Post</h3>
                <form action="" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $notes->title }}"
                            required>
                    </div>
                    <button type="submit" class="btn mt-3 btn-primary">Update Post</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection