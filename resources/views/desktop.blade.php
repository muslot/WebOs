@extends('layouts.main')
@section('app')
<div class="display">
    <div class="desktop">
        <li>
            <a href="{{route('note.index')}}">
            <img width="50" height="50" src="https://win98icons.alexmeub.com/icons/png/template_empty-5.png" alt="" srcset="">
            </a>
            <h1>Notes</h1>
        </li>
    </div>
    <div class="taskbar"></div>
</div>
@endsection