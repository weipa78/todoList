<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">
    <title>新規登録確認画面</title>
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
      .add {
        width: 80px;
      }
    </style>
  </head>
  <body>
    <h1>TODOリスト</h1>
    <form name="form">
    @csrf
      <table border="1">
        <tr><th>タスク</th><td><input type="text" name="task" value="{{$item['task']}}" class="task" readonly></td></tr>
        <tr><th>優先度</th><td><input type="text" name="priority" value="{{$item['priority']}}" class="priority" readonly></td></tr>
        <tr><th>期日</th><td><input type="text" name="deadline" value="{{$item['deadline']}}" class="deadline" readonly></td></tr>
        <tr><th>担当者</th><td><input type="text" name="manager" value="{{$item['manager']}}" class="manager" readonly></td></tr>
        <tr><th>備考</th><td><input type="text" name="remarks" value="{{$item['remarks']}}" class="remarks" readonly></td></tr>
      </table><br>
    <button type="submit" formaction="add" formmethod="post" name="add" id="add" class="add" >新規登録</button>
    </form>
  </body>
</html>