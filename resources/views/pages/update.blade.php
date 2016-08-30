<!DOCTYPE html>
<html>
<?php
use App\User;
use App\Http\Requests;

$urlIndex=action('PageController@index');

//print_r($_GET);
print_r($_SERVER['REQUEST_URI']); // данные, необходимые для тестирования страницы.
?>
<?php $id = null;
    if ( !empty($_GET['id'])) {
        $id = Request('id');
    }
    else { return redirect($urlIndex)->send();
    }
  $userss=User::find($id);
  $name=$email=$password=0;
    ?>
    <head>
        <title>Users CRUD: Update</title>
            <meta charset="utf-8">
            <link href="css\style.css" rel="stylesheet" type="text/css">
            <link href="css\bootstrap.min.css" rel="stylesheet" type="text/css">
            <script src="js\bootstrap.min.js"></script>
    </head>
    <body>
      <div class="container">
                    <div class="row">
                        <h3>Update a Users profile</h3>
                          <hr>
                    <form class="form-horizontal" formmethod="get">
                        <label class="control-label"><h4>Name</h4></label>
                          <div class="controls">
                            <input name="name" type="text"  placeholder="<?php echo $userss->name;?>" value="<?php echo !empty($name)?$name:'';?>">
                          </div>
                        <label class="control-label" ><h4>Email Address</h4></label>
                          <div class="controls">
                            <input name="email" type="text" placeholder="<?php echo $userss->email;?>" value="<?php echo !empty($email)?$email:'';?>">
                          </div>
                        <label class="control-label"><h4>Password</h4></label>
                          <div class="controls">
                            <input name="password" type="text"  placeholder="<?php echo $userss->password;?>" value="<?php echo !empty($password)?$password:'';?>">
                              <input name="id" value="<?php echo $id?>" style="width:0px;border:0px;">
                          </div>
                          <hr>
                        </br>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Update</button>
                          <a class="btn" href="<?php echo $urlIndex;?>">Back</a>
                        </div>
                    </form>
                </div>

      <?php
      if ( !empty($_GET['name']) || !empty($_GET['email']) || !empty($_GET['password'])) {
      if ( !empty($_GET['name'])) {
      $name = $_GET['name'];
      $userss->name = $name;
    }
      if ( !empty($_GET['email'])) {
      $email = $_GET['email'];
      $userss->email = $email;
    }
      if ( !empty($_GET['password'])) {
      $password = $_GET['password'];
      $userss->password = $password;
    }
                    $userss->save();
                    return redirect($urlIndex)->send();
}
      ?>
        </div>
    </body>
</html>
