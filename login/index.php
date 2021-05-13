<?php
    session_start();
?>

<!DOCTYPE html>

<html lang="ja">
  <?php
    include_once "../common/header.php";
    echo getHeader("ログイン");
  ?>
  <body>
    <div class="d-flex align-items-center justify-content-center h-100">

      <form method="post" action="./action/login.php">
        <div class="card rounded login-card-width shadow">
          <div class="card-body">

            <?php
            if (isset($_SESSION['errors'])) {
                echo '<div class="alert alert-danger" role="alert">';
                foreach ($_SESSION['errors'] as $error) {
                    echo "<div>{$error}</div>";
                }
                echo '</div>';
                unset($_SESSION['errors']);
              }
            ?>

            <div class="mx-auto d-flex mt-3">
                <img src="../public/images/mainImg.png" class="w-75 mx-auto p-2" alt="icon"/>
            </div>
            <div class="d-flex justify-content-center">
                <div class="mt-3 h4">情報を整理・保存しよう</div>
            </div>
            <div class="row mt-3">
              <div class="offset-2 col-8 offset-2">

                <label class="input-group w-100">
                  <span class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-envelope"></i></span>
                  </span>
                    <input type="text" name="user_email" class="form-control" placeholder="メールアドレス" autocomplete="off" value="test@test.co.jp" />
                </label>

                <label class="input-group w-100">
                  <span class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                  </span>
                  <input type="password" name="user_password" class="form-control" placeholder="パスワード" autocomplete="off" value="password" />
                </label>

                <button type="submit" class="form-control btn btn-success mt-5">
                   ログイン
                </button>
              </div>
            </div>
            <div class="mt-5">
              <div class="d-flex justify-content-center">
                  アカウントをお持ちではありませんか？
              </div>
              <div class="d-flex justify-content-center">
                  <a href="../user/" class="text-success">アカウントを作成</a>
              </div>
            </div>
          </div>
        </div>
      </form>

    </div>
  </body>
</html>
