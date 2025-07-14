<h1>投稿編集</h1>
<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $post->title }}"><br>
    <textarea name="body">{{ $post->body }}</textarea><br>
    <button type="submit">更新</button>
</form>

