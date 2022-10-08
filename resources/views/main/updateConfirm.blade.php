@extends('layouts.original')

@section('title', 'Todoリスト')

@section('title1')
	<h1>Todoリスト</h1>
@endsection

@section('msg1')
	<span class="msg1">＜Todo更新確認＞</span>
@endsection

@section('list')
<form name="form1">
@csrf
	<table class="table-sm w-75 center-block">
		<tr><th class="table-info">todoID</th><td><input type="text" name="id" value="{{$request->id}}" readonly></td></tr>
		<tr><th class="table-info">登録日時</th><td><input type="text" name="registryDate" value="{{$request->registryDate}}" readonly></td></tr>
		<tr><th class="table-info">完了日時</th><td><input type="text" name="completionDate" value="{{$request->completionDate}}" readonly></td></tr>
		<tr><th class="table-info">内容</th><td><input type="text" name="content" value="{{$request->content}}" readonly></td></tr>
		<tr><th class="table-info">優先順位</th><td><input type="text" name="priority" value="{{$request->priority}}" readonly></td></tr>
		<tr><th class="table-info">進捗率</th><td><input type="text" name="status" value="{{$request->status}}" readonly></td></tr>	
	</table>
	<button class="btn btn-info" type="submit" formaction="/update" formmethod="post">更新</button>
	<button class="btn btn-secondary" type="submit" formaction="/updateForm" formmethod="post">戻る</button>
</form>
@endsection
