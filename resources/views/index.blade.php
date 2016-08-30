<!DOCTYPE html>
<html>
    <head>
        <title>Users CRUD</title>
        <meta charset="utf-8">
            <link href="css\style.css" rel="stylesheet" type="text/css">
            <link href="css\bootstrap.min.css" rel="stylesheet" type="text/css">
            <script src="js\bootstrap.min.js"></script>
<?php $urlCreate=action('PageController@create');
    //  $urlRead=action('PageController@read');
    //  $urlUpdate=action('PageController@update');
    //  $urlDelete=action('PageController@delete');
?>


    </head>
    <body>
          <div class="container">
              <div class="row">
                  <h3>Users CRUD </h3>
              </div>
              <div class="row">
                <a href="<?php echo $urlCreate;?>" class="btnCreate">Create a new profile</a>
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
                           $RouteRead = route('user.show', 'read?id='.$row->id);
                           $RouteUpdate = route('user.update','update?id='.$row->id);
                          //$RouteDelete = action('PageController@destroy', 'delete?id='. $row->id .'&del=0');
                          $RouteDelete = route('user.destroy','delete?id='. $row->id .'&del=0');
                            echo '<tr>';
                            echo '<td>'. $row->name . '</td>';
                            echo '<td>'. $row->email . '</td>';
                            echo '<td>'. '<a href="'. $RouteRead .'" class="btnRead">Read</a>' .
                             '<a href="'. $RouteUpdate .'" class="btnUpdate">Update</a>' .
                             '<a href="'. $RouteDelete .'" class="btnDelete">Delete</a>' . '</td>';

                            echo '</tr>';
                        }

              





                      ?>
                    </tbody>
              </table>
          </div>
      </div> <!-- /container -->
    </body>
</html>
