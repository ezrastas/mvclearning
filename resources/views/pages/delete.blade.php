<!DOCTYPE html>
<html>
<?php
use App\User;
use App\Http\Requests;

$urlIndex=action('PageController@index');
$urlDelete=route('user.destroy','delete');

print_r($_GET);
print_r($_SERVER['REQUEST_URI']); // данные, необходимые для тестирования страницы.
?>
<?php

    if ( !empty($_GET['id'])) {
        $id = Request('id');
    }
    if (!empty($_GET['del'])){
      $userss=User::destroy($id);
      return redirect($urlIndex)->send();
 }?>



    <head>
        <title>Users CRUD: Delete</title>
            <meta charset="utf-8">
            <link href="css\style.css" rel="stylesheet" type="text/css">
            <link href="css\bootstrap.min.css" rel="stylesheet" type="text/css">
            <script src="js\bootstrap.min.js"></script>
    </head>
    <body>
      <div class="container">

                <div class="span10 offset1">
                    <div class="row">
                        <h3>Delete a Customer</h3>
                    </div>
                      <h3 class="deleteAlert">Are you sure to delete ?</h3>
                    </br>
                          <a class="btnYes" href="<?php echo $urlDelete;?>?id=<?php echo $id;?>&del=1">yeap</a>
                          <a class="btn" href="<?php echo $urlIndex;?>">No</a>
                        </div>
                </div>
    </div> <!-- /container -->
  </body>
</html>
