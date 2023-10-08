<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/main.css">
    <title>初期表示一覧画面</title>
    <script>
      //勤務表編集選択画面でラジオボタン選択中は変更削除ボタンを有効にする
      //ラジオボタンを選択していないときは無効にする
      function check(){
        var flag = true; // 選択されているか否かを判定するフラグ
      
      //ラジオボタンの数だけ判定を繰り返す（ボタンを表すインプットタグがあるので１引く）
        for(var i=0; i < document.form.ids.length-1;i++){
            // i番目のラジオボタンがチェックされているかを判定
            if(document.form.ids[i].checked){ 
                flag = true;
                document.getElementById("henko").disabled = false;
                document.getElementById("sakujyo").disabled = false;
            } 
        }
      }
    </script>
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
      .update {
        width: 80px;
      }
      .delete {
        width: 80px;
      }
    </style>
  </head>
  <body>
    <h1>TODOリスト</h1>

    <form name="form">
      <table border="1">
      @csrf
        <tr>
          <th>選択</th>
          <th>No.</th>
          <th>タスク</th>
          <th>優先度</th>
          <th>期日</th>
          <th>担当者</th>
          <th>備考</th>
        </tr>
        @foreach ($items as $item)
        <tr>
          <td><input type="radio" name="id" id="ids" value="{{$item->id}}" class="sel" onClick="return check()"></td>
          <td><input type="text" value="{{$item->id}}" class="number" readonly></td>
          <td><input type="text" value="{{$item->task}}" class="task" readonly></td>
          <td><input type="text" value="{{$item->priority}}" class="priority" readonly></td>
          <td><input type="text" value="{{$item->deadline}}" class="deadline" readonly></td>
          <td><input type="text" value="{{$item->manager}}" class="manager" readonly></td>
          <td><input type="text" value="{{$item->remarks}}" class="remarks" readonly></td>
        </tr>
        @endforeach
      </table><br>
    <button type="submit" formaction="addInput" class="add" formmethod="get">新規</button><button type="submit" formaction="changeInput" formmethod="post" name="henko" id="henko" class="update" disabled>更新</button><button type="submit" formaction="deleteConfirm" formmethod="post" name="sakujyo" id="sakujyo" class="delete" disabled>削除</button>
    </form>
  </body>
</html>