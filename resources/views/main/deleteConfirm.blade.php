@extends('layouts.original')

@section('title', 'Todoリスト')

@section('title1')
	<h1>Todoリスト</h1>
@endsection

@section('msg1')
	<span class="msg1">＜Todo削除確認＞</span>
@endsection

@section('list')
<form name="form1">
@csrf
	<table class="table-sm w-75 center-block">
		<tr><th class="table-info">todoID</th><td><input type="text" name="id" value="{{$item->id}}" readonly></td></tr>
		<tr><th class="table-info">登録日時</th><td><input type="text" name="registryDate" value="{{$item->registryDate}}" readonly></td></tr>
		<tr><th class="table-info">完了日時</th><td><input type="text" name="completionDate" value="{{$item->completionDate}}" readonly></td></tr>
		<tr><th class="table-info">内容</th><td><input type="text" name="content" value="{{$item->content}}" readonly></td></tr>
		<tr><th class="table-info">優先順位</th><td><input type="text" name="priority" value="{{$item->priority}}" readonly></td></tr>
		<tr><th class="table-info">進捗率</th><td><input type="text" name="status" value="{{$item->status}}" readonly></td></tr>	
	</table>
	<button class="btn btn-danger" type="submit" formaction="/delete" formmethod="get">削除</button>
	<button class="btn btn-secondary" type="submit" formaction="/" formmethod="get">戻る</button>
</form>
@endsection

