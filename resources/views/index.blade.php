<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ToDoList</title>
</head>
  <body>
    <h1><?php echo $txt; ?></h1>
    <form action="/" method="GET" >
      @csrf
      <input type="text">
      <table>
        <tr>
          <th>作成日</th><th>タスク名</th><th>更新</th><th>削除</th>
        </tr>
        
      </table>
    
    </form>
  </body>
  </html>