@extends('layouts.main')
@section('app')

<head>
    <link rel="stylesheet" href="{{URL::asset('/css/Notes/notes.css')}}">
</head>
<div class="app-window">
    <div class="app-pnl">
        <nav>
            <h1>Notes</h1>
            <a href="{{route('desktop.index')}}">
                <img src="https://win98icons.alexmeub.com/images/close-icon.png" alt="">
            </a>
        </nav>
    </div>
    <div class="container">
        <div class="note-list">
            @foreach ($notes as $note)
                <div class="note-folder">
                    <div class="folder-ico">
                        <img src="https://win98icons.alexmeub.com/icons/png/directory_closed-5.png" alt="" width="55"
                            height="55">
                        <!-- <form action="App\Models\Notes\NotesController" method="post">
                                <input class="folder-inp" type="hidden" placeholder="Folder Name">
                                <button type="submit">123</button>
                            </form> -->

                        <div class="folder-name" ondblclick="fff()">{{$note->title}}</div>

                    </div>
                </div>

            @endforeach
        </div>
    </div>
</div>
<script src="{{URL::asset('/js/Notes/notes.js')}}"></script>
@endsection