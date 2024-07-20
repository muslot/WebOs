<div class="container">
        <div class="drag-arena">
            @foreach ($notes as $note)
            <div>{{$note->title}}</div>
            @endforeach
        </div>
</div>