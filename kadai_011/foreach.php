<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>課題011</title>
  </head>

  <body>
    <a>
      <?php
      $vegetables = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

      foreach ($vegetables as $key => $value) {
        echo "{$key} : {$value}<br>";
      }     
      ?>
    </a>
  </body>
</html>