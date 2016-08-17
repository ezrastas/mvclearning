<!DOCTYPE html>
<html>
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
              <h3>Users CRUD: Create </h3>
          </div>
      <div class="row">
          <table class="table table-striped">
            <tr>
              <td><h4>Name</h4></td>
              <td><p><input required maxlength="20" size="40" name="name" value="<?php $name; ?>"></p></td>
            </tr>
            <tr>
              <td><h4>Email</h4></td>
              <td><p><input required maxlength="25" size="40" name="email" value="<? $email; ?>"></p></td>
            </tr>
            <tr>
              <td><h4>Password</h4></td>
              <td><p><input required maxlength="20" size="40" name="password" value="<?php $password; ?>"></p></td>
            </tr>
          </table>
          <button class="btnCreate" onClick="

          <?php
          use App\User;



          if ( empty($_POST)) {

                 $name = $_POST['name'];
                 $email = $_POST['email'];
                 $mobile = $_POST['password'];

              $user = array(
        "name" => $name,
        "email" => $email,
        "password"=> $password
        );
            /*$userss->insert($user);*/

                          echo $user;
}

              ?>" >Create a new profile</button>
            </div>
    </body>
</html>
