<?php
try {
  $pdo = new PDO('mysql:host=localhost; dbname=homestead; charset=utf8' ,'homestead','secret',
  array(PDO::ATTR_EMULATE_PREPARES => false));
} catch (PDOException $e) {
  exit('データベース接続失敗。'.$e->getMessage());#
}
?>

@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Admin's page</div>

        <div class="panel-body">
          Setting
          <?php
#          $stmt = $pdo -> prepare("INSERT INTO homestead (id, name, prefecture) VALUES ('',:name, :prefecture)");
#          $stmt->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
#          $stmt->bindValue(':prefecture', $_POST['prefecture'], PDO::PARAM_STR);
#          $stmt->execute();
#          $stmt = $pdo->query("SELECT * FROM homestead ORDER BY id DESC");
#          while($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
#            print('<tr>');
#            print('<td class="id">'.$row['id'].'</td>');
#            print('<td class="name">'.$row['name'].'</td>');
#            print('<td class="prefecture">'.$row['prefecture'].'</td>');
#            print('</tr>');
#         }
#          ?>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
