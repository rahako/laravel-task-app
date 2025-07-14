<h1>新規投稿</h1>
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="タイトル"><br>
    <textarea name="body" placeholder="本文"></textarea><br>
    <button type="submit">投稿</button>
</form>

