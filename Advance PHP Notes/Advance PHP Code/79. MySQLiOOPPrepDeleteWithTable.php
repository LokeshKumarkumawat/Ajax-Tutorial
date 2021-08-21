<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "test_db";

// Create Connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check Connection
if($conn->connect_error){
  die("Connection Failed");
}
echo "Connected Successfully <hr>";

if(isset($_REQUEST['delete'])){
      // DELETE SQL statement
      $sql = "DELETE FROM student WHERE id= ?";

      // Prepared Statement
      $result = $conn->prepare($sql);

      if($result) {

          // Bind Variables to Prepared Statement as Parameters
          $result->bind_param('i', $id);

          // Variables and values
          $id = $_REQUEST['id'];

          // Execute Prepared statement
          $result->execute();

          // Number of row affected
          echo $result->affected_rows . " Row Deleted <br>" ;
      }

      // close prepared statement
      $result->close();
  }

?>

<!doctype html>
<html lang="en">

<head>
  <title>GeekyShows</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
</head>

<body>

  <div class="container">
    <?php
        // SELECT All Data
        $sql = "SELECT * FROM student";

        // Prepared Statement
        $result = $conn->prepare($sql);

        // Bind Result set in variables
        $result->bind_result($id, $name, $roll, $address);

        // Execute Prepared statement
        $result->execute();

        // Store Result 
        $result->store_result();

        if($result->num_rows > 0){
            echo '<table class="table">';
              echo "<thead>";
                echo "<tr>";
                  echo "<th>ID</th>";
                  echo "<th>Name</th>";
                  echo "<th>Roll</th>";
                  echo "<th>Address</th>";
                  echo "<th>Action</th>";
                echo "</tr>";
              echo "</thead>";
              echo "<tbody>";
                // Fetch all table data
                while($result->fetch()){
                    echo "<tr>";
                    echo "<td>" . $id . "</td>";
                    echo "<td>" . $name . "</td>";
                    echo "<td>" . $roll . "</td>";
                    echo "<td>" . $address . "</td>";
                    echo '<td><form action="" method="POST"><input type="hidden" name="id" value='.$id.'  ><input type="submit" class="btn btn-sm btn-danger" name="delete" value="Delete"></form></td>';
                    echo "</tr>";
                  
                }
            echo "</tbody>";
            echo "</table>";
          } else {
              echo "0 Results";
          }
          ?>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>
<?php 
  // close prepared statement
  $result->close();
  // Close Connection
  $conn->close();
?>

</html>