@extends('layouts.app')

@section('content')
<h2>{{ isset($task) ? 'タスク編集' : '新規タスク作成' }}</h2>

<form action="{{ isset($task) ? route('tasks.update', $task->id) : route('tasks.store') }}" method="POST">
    @csrf
    @if(isset($task))
        @method('PUT')
    @endif

    <div class="mb-3">
        <label class="form-label">タイトル</label>
        <input type="text" name="title" class="form-control" value="{{ $task->title ?? '' }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">詳細</label>
        <textarea name="description" class="form-control">{{ $task->description ?? '' }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">期限</label>
        <input type="date" name="due_date" class="form-control" value="{{ $task->due_date ?? '' }}">
    </div>

    <div class="form-check mb-3">
        <input type="checkbox" name="is_done" class="form-check-input" value="1" {{ isset($task) && $task->is_done ? 'checked' : '' }}>
        <label class="form-check-label">完了済み</label>
    </div>

    <button type="submit" class="btn btn-success">保存</button>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">戻る</a>
</form>

@endsection
