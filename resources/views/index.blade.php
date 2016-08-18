<!DOCTYPE html>
<html>
    <head>
        <title>Users CRUD</title>
        <meta charset="utf-8">
            <link href="css\style.css" rel="stylesheet" type="text/css">
            <link href="css\bootstrap.min.css" rel="stylesheet" type="text/css">
            <script src="js\bootstrap.min.js"></script>



    </head>
    <body>
      <div class="container">
          <div class="row">
              <h3>Users CRUD </h3>
          </div>
          <div class="row">
            <a href="create" class="btnCreate">Create a new profile</a>
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                      use App\User;
                    $userss=User::all();
                    foreach($userss as $row){
                        echo '<tr>';
                        echo '<td>'. $row->name . '</td>';
                        echo '<td>'. $row->email . '</td>';
                        echo '<td>'. '<a href="read?id='.$row['id'].'" class="btnRead">Read</a>' .
                         '<a href="#" class="btnUpdate">Update</a>' .
                         '<a href="#" class="btnDelete">Delete</a>' . '</td>';
                        echo '</tr>';
                    }
                  ?>
                </tbody>
          </table>
      </div>
  </div> <!-- /container -->

    </body>
</html>
