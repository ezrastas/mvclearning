<!DOCTYPE html>
<html>
<?php
use App\User;
use App\Http\Requests;

print_r($_GET);
print_r($_SERVER['REQUEST_URI']); // данные, необходимые для тестирования страницы.
?>
    <head>
        <title>Users CRUD: Delete</title>
            <meta charset="utf-8">
            <link href="css\style.css" rel="stylesheet" type="text/css">
            <link href="css\bootstrap.min.css" rel="stylesheet" type="text/css">
            <script src="js\bootstrap.min.js"></script>
    </head>
    <body>
      <form class="form-horizontal" action="delete.php" method="post">
                      <p class="alert alert-error">Are you sure to delete ?</p>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-danger">Yes</button>
                          <a class="btn" href="/">No</a>
                        </div>
                    </form>

        <?php $id = null;
            if ( !empty($_GET['id'])) {
                $id = $_REQUEST['id'];
            }
            if ( null==$id ) {
                header("Location: index.php");
            } else {
                 $userss=User::destroy($id);
                 header("Location: /");
            }?>
    </body>
  </html>
