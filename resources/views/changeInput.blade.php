<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">
    <title>更新入力画面</title>
    <style media="screen">
      table {
        border-collapse:collapse;
      }
      .sel, .number, .priority {
        width: 50px;
      }
      .task, .deadline, .manager {
        width: 100px;
      }
      .remarks {
        width: 200px;
      }
      th {
        background-color: #87ceeb; 
      }
      .update {
        width: 80px;
      }
    </style>
  </head>
  <body>
    <h1>TODOリスト</h1>
    <form name="form">
    @csrf
      <table border="1">
        <tr><th>No.</th><td><input type="text" name="id" value="{{$item->id}}" class="number" readonly></td></tr>
        <tr><th>タスク</th><td><input type="text" name="task" value="{{$item->task}}" class="task" required></td></tr>
        <tr><th>優先度</th><td><input type="text" name="priority" value="{{$item->priority}}" class="priority" required></td></tr>
        <tr><th>期日</th><td><input type="date" name="deadline" value="{{$item->deadline}}" class="deadline" required></td></tr>
        <tr><th>担当者</th><td><input type="text" name="manager" value="{{$item->manager}}" class="manager" required></td></tr>
        <tr><th>備考</th><td><input type="text" name="remarks" value="{{$item->remarks}}" class="remarks"></td></tr>
      </table><br>
    <button type="submit" formaction="changeConfirm" formmethod="post" class="update" >更新確認</button>
    </form>
  </body>
</html>