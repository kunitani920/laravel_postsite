@if(isset($posts))
    <ul>
        @foreach($posts as $post)
            <li>{{ $post->id }}</li>
        @endforeach
    </ul>
@endif