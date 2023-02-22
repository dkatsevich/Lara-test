<x-layouts.base title="Blog">
    <a href="{{ route('posts.create') }}">Add post</a>
    <hr>
    @foreach($posts as $post)
        <h2>{{ $post->title }}</h2>
        <em>{{ $post->created_at }}</em><br>
        <a href="{{ route('posts.show', [ $post->id ] ) }}">more...</a>
        <div>commets: {{ $post->comments_count }}</div>
        <hr>
    @endforeach
    <hr>
    {{ $posts->links() }}
</x-layouts.base>