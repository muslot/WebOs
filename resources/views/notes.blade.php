@extends('layouts.main')
@section('app')
<div class="app-window">
    <div class="app-pnl">
        <nav>
            <h1>Notes</h1>
            <ul>
                <li>
                    <a href="{{route('desktop.index')}}">
                    <img src="https://win98icons.alexmeub.com/images/close-icon.png" alt="" srcset="">
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="container">
        <div class="drag-arena">
            @foreach ($notes as $note)
            <div>{{$note->title}}</div>
            @endforeach
        </div>
</div>
</div>
@endsection
