<?php

  date_default_timezone_set('Asia/Tokyo');

  require '../../common/auth.php';
  require '../../common/database.php';

  if (!isLogin()) {
      header('Location: ../login/');
      exit;
  }

  $user_id = getLoginUserId();
  $database_handler = getDatabaseConnection();

  try {
    $title = "新規メモ";
    $created_at = new DateTime();
    $created_at->format('Y-m-d H:i:s');
    $updated_at = new DateTime();
    $updated_at->format('Y-m-d H:i:s');

      if ($statement = $database_handler->prepare("INSERT INTO memos (user_id, title, content, created_at,updated_at) VALUES(:user_id, :title, null, :created_at, :updated_at)")) {
        $statement->bindParam(":user_id", $user_id);
        $statement->bindParam(":title", $title);
        $statement->bindParam(":created_at", $created_at->format('Y-m-d H:i:s'));
        $statement->bindParam(":updated_at", $updated_at->format('Y-m-d H:i:s'));
        $statement->execute();
      }

      $_SESSION['select_memo'] = [
        'id' => $database_handler->lastInsertId(),
        'title' => $title,
        'content' => '',
        'created_at' => $created_at,
        'updated_at' => $updated_at,
      ];

  } catch (Throwable $e) {
    echo $e->getMessage();
    exit;
  }
  header('Location: ../../memo');
  exit;

?>
