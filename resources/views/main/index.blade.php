@extends('layouts.original')

@section('title', 'Todoリスト')

@section('title1')
	<h2 class="text-light">Todoリスト</h2>
@endsection

@section('msg1')
	<span class="msg1">＜Todo登録・一覧画面＞</span>
@endsection

@section('form')
	<form action="/indata" method="get">
	@csrf
    	<div class="ml-sm-5">
    		<div class="row g-2">
    			<div class="mb-3 col-md-2">
        			<label class="form-label" for="registryDate">登録日時</label>
        			<input type="text" class="form-control" name="registryDate" id="registryDate">    			
    			</div>
				<div class="mb-3 col-md-2">
        			<label class="form-label" for="completionDate">完了日時</label>
        			<input type="text" class="form-control" name="completionDate" id="completionDate">
        		</div>
    			<div class="mb-3 col-md-2">
            		<label class="form-label" for="priority">優先順位</label>
            		<input type="text" class="form-control" name="priority" id="priority">
            	</div>
    			<div class="mb-3 col-md-2">
            		<label class="form-label" for="status">進捗率</label>
            		<input type="text" class="form-control" name="status" id="status">
    			</div>               		
    		</div>
    	</div>
    	<div class="ml-sm-5">
    		<div class="row g-2">
    			<div class="mb-3 col-md-8">
            		<label class="form-label" for="content">内容</label>
            		<input type="text" class="form-control" name="content" id="content">
    			</div>
            </div>
    	</div>
    	<button class="btn btn-success ml-5" type="submit">登録</button>
	</form>
@endsection

@section('list')
<form name="form1">
@csrf
	<table class="table table-striped table-sm w-75 center-block">
		<thead class="table-info">
    		<tr>
    			<th>選択</th>
    			<th>TodoID</th>
    			<th>登録日時</th>
    			<th>完了日時</th>
    			<th>内容</th>
    			<th>優先順位</th>
    			<th>進捗率</th>
    		</tr>
		</thead>
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
	<button class="btn btn-info" type="submit" formaction="/updateForm" formmethod="post">更新</button>
	<button class="btn btn-danger" type="submit" formaction="/deleteConfirm" formmethod="post">削除</button>
</form>
@endsection