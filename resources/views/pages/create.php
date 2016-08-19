<!DOCTYPE html>
<html>
<?php
use App\User;
use App\Http\Requests;

print_r($_GET);
print_r($_SERVER['REQUEST_URI']); // данные, необходимые для тестирования страницы.
?>
    <head>
        <title>Users CRUD: Create</title>
            <meta charset="utf-8">
            <link href="css\style.css" rel="stylesheet" type="text/css">
            <link href="css\bootstrap.min.css" rel="stylesheet" type="text/css">
            <script src="js\bootstrap.min.js"></script>
    </head>
    <body>

      <div class="container">
                    <div class="row">
                        <h3>Create a Users profile</h3>
                          <hr>
                    <form class="form-horizontal" action="/create" formmethod="get">
                        <label class="control-label"><h4>Name</h4></label>
                          <div class="controls">
                            <input name="name" type="text"  placeholder="Name" value="<?php echo !empty($name)?$name:'';?>">
                          </div>
                        <label class="control-label" ><h4>Email Address</h4></label>
                          <div class="controls">
                            <input name="email" type="text" placeholder="Email Address" value="<?php echo !empty($email)?$email:'';?>">
                          </div>
                        <label class="control-label"><h4>Password</h4></label>
                          <div class="controls">
                            <input name="password" type="text"  placeholder="password" value="<?php echo !empty($password)?$password:'';?>">
                          </div>
                          <hr>
                        </br>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Create</button>
                          <a class="btn" href="index.php">Back</a>
                        </div>
                    </form>
                </div>

<?php
$Error = false;
if ( !empty($_GET)) {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $password = $_GET['password'];

        $valid = true;
        if (empty($name) || empty($email) || empty($password)) {
            $valid = false;
            $Error = true;
        }
      if ($valid) {
        $user = array(
              "name" => $name,
              "email" => $email,
              "password"=> $password
              );
        $userss = new User;
        $userss->create($user);

        header('Location:http://localhost:8888/');  //перенаправляет на индекс-страницу
      }
      else{
      header('Location:' . $_SERVER['HTTP_HOST'] . '/create');// если не заполнил поля, не перенаправляет, а заставляет заполнить
      }
}
?>
<?php if (!empty($Error)): ?>
    <span class="help-inline"><h4><?php echo "Add all data about u!";?></h4></span>
<?php endif; // ошибка, если не заполнил все поля ?>

        </div>
    </body>
</html>
