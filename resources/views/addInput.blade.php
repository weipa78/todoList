<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">
    <title>新規登録入力画面</title>
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
    <form name="form" action="addConfirm" method="post">
    @csrf
      <table border="1">
        <tr><th>タスク</th><td><input type="text" name="task" class="task" required></td></tr>
        <tr><th>優先度</th><td><input type="text" name="priority" class="priority" required></td></tr>
        <tr><th>期日</th><td><input type="date" name="deadline" class="deadline" required></td></tr>
        <tr><th>担当者</th><td><input type="text" name="manager" class="manager" required></td></tr>
        <tr><th>備考</th><td><input type="text" name="remarks" class="remarks" required></td></tr>
      </table><br>
    <button type="submit" name="add" id="add" class="add" >登録確認</button>
    </form>
  </body>
</html>