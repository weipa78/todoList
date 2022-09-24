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
	<table border="1" style="border-collapse: collapse">
		<tr><th>todoID</th><td><input type="text" name="id" value="{{$request->id}}" readonly></td></tr>
		<tr><th>登録日時</th><td><input type="text" name="registryDate" value="{{$request->registryDate}}" readonly></td></tr>
		<tr><th>完了日時</th><td><input type="text" name="completionDate" value="{{$request->completionDate}}" readonly></td></tr>
		<tr><th>内容</th><td><input type="text" name="content" value="{{$request->content}}" readonly></td></tr>
		<tr><th>優先順位</th><td><input type="text" name="priority" value="{{$request->priority}}" readonly></td></tr>
		<tr><th>進捗率</th><td><input type="text" name="status" value="{{$request->status}}" readonly></td></tr>	
	</table>
	<button type="submit" formaction="/update" formmethod="post">更新</button>
	<button type="submit" formaction="/updateForm" formmethod="post">戻る</button>
</form>
@endsection
