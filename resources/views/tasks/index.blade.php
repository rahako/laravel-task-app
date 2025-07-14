@extends('layouts.app')

@section('content')

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>タスク一覧</h2>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">+ 新規作成</a>
</div>

<table class="table table-bordered table-hover">
    <thead class="table-light">
        <tr>
            <th>タイトル</th>
            <th>期限</th>
            <th>状態</th>
            <th>操作</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tasks as $task)
        <tr class="{{ $task->is_done ? 'table-success' : '' }}">
            <td class="{{ $task->is_done ? 'text-decoration-line-through text-muted' : '' }}">
                {{ $task->title }}
            </td>
            <td>{{ $task->due_date }}</td>
            <td>
                {{ $task->is_done ? '✅ 完了' : '❌ 未完了' }}
            </td>
            <td>
                <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-warning">編集</a>
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('削除しますか？')">削除</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection
