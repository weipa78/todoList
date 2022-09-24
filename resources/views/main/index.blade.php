@extends('layouts.original')

@section('title', 'Todoリスト')

@section('title1')
	<h1>Todoリスト</h1>
@endsection

@section('msg1')
	<span class="msg1">＜Todo登録・一覧画面＞</span>
@endsection

@section('form')
	<form action="/indata" method="get">
	@csrf
    	<table class="input-table" border="1" style="border-collapse: collapse">
    		<tr><th>登録日時</th><td><input type="text" name="registryDate" value="{{old('registryDate')}}"></td></tr>
    		<tr><th>完了日時</th><td><input type="text" name="completionDate" value="{{old('completionDate')}}"></td></tr>
    		<tr><th>内容</th><td><input type="text" name="content" value="{{old('content')}}"></td></tr>
    		<tr><th>優先順位</th><td><input type="text" name="priority" value="{{old('priority')}}"></td></tr>
    		<tr><th>進捗率</th><td><input type="text" name="status" value="{{old('status')}}"></td></tr>	
    		<tr><th></th><td><button class="create"type="submit">登録</button></td></tr>
    	</table>
	</form>
@endsection

@section('list')
<form name="form1">
@csrf
	<table border="1" style="border-collapse: collapse">
		<tr>
			<th>選択</th>
			<th>TodoID</th>
			<th>登録日時</th>
			<th>完了日時</th>
			<th>内容</th>
			<th>優先順位</th>
			<th>進捗率</th>
		</tr>
		@foreach($items as $item)
    		<tr>
    			<td><input type="radio" name="id" value="{{$item->id}}" checked></td>
    			<td>{{$item->id}}</td>
    			<td>{{$item->registryDate}}</td>
    			<td>{{$item->completionDate}}</td>
    			<td>{{$item->content}}</td>
    			<td>{{$item->priority}}</td>
    			<td>{{$item->status}}</td>
    		</tr>
		@endforeach
	</table>
	<button type="submit" formaction="/updateForm" formmethod="post">更新</button>
	<button type="submit" formaction="/deleteConfirm" formmethod="post">削除</button>
</form>
@endsection