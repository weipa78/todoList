@extends('layouts.original')

@section('title', 'Todoリスト')

@section('title1')
	<h1>Todoリスト</h1>
@endsection

@section('msg1')
	<span class="msg1">＜Todo更新入力＞</span>
@endsection

@section('list')
<form name="form1">
@csrf
	<table border="1" style="border-collapse: collapse">
		<tr><th>todoID</th><td><input type="text" name="id" value="{{$item->id}}"></td></tr>
		<tr><th>登録日時</th><td><input type="text" name="registryDate" value="{{$item->registryDate}}"></td></tr>
		<tr><th>完了日時</th><td><input type="text" name="completionDate" value="{{$item->completionDate}}"></td></tr>
		<tr><th>内容</th><td><input type="text" name="content" value="{{$item->content}}"></td></tr>
		<tr><th>優先順位</th><td><input type="text" name="priority" value="{{$item->priority}}"></td></tr>
		<tr><th>進捗率</th><td><input type="text" name="status" value="{{$item->status}}"></td></tr>	
	</table>
	<button type="submit" formaction="/updateConfirm" formmethod="post">確認</button>
	<button type="submit" formaction="/" formmethod="get">戻る</button>
</form>
@endsection