<x-layouts.base title="Tags">
    <a href="{{ route('tags.create') }}">Add tag</a>
    <hr>
    @foreach($tags as $tag)
        <h2>{{ $tag->title }}</h2>
        <em>{{ $tag->url }}</em><br>
        <a href="{{ route('tags.show', [ $tag->id ]) }}">more...</a>
        <hr>
    @endforeach
</x-layouts.base>