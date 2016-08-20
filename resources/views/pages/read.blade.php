<!DOCTYPE html>
<html>
<?php
use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;

$urlIndex = action('PageController@index');

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
<?php $id = null;
    if ( !empty($_GET['id'])) {
        $id = Request('id');
    }
    if ( null==$id ) {
      return redirect($urlIndex)->send();
    } else {
         $userss=User::find($id);
    }?>
      <div class="container">
          <h3>Create a Users profile</h3>
                <hr>
              <table>
                  <tr>
                      <th> <h4>Name:</h4></th>
                      <th> <h4><?php echo $userss->name;?></h4></th>
                  </tr>
                  <tr>
                      <td> <h4>Email Address: &nbsp &nbsp</h4></td>
                      <td> <h4><?php echo $userss->email;?></h4></td>
                  </tr>
                  <tr>
                      <td> <h4>Password:</h4></td>
                      <td> <h4><?php echo $userss->password;?></h4></td>
                  </tr>
              </table>
                  <hr>
                      <a class="btn" href="<?php echo $urlIndex;?>">Back</a>
      </div>
    </body>
</html>
