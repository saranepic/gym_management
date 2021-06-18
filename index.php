<?php include"db.php";?>
<?php
global $connection;
if(isset($_GET['delete'])){
    $m_id=$_GET['delete'];
    $query="DELETE FROM gym WHERE m_id={$m_id}";
    $result=mysqli_query($connection,$query);
    if($result){
        header("Location:index.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gym</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
     <div class="container">
       <div class="heading" style="text-align:center; padding:50px"><h2>gym management</h2><br><h4>member list</h4><br><p><a href="create.php">create member</a></p></div>
       
       <div class="row">
       <div class="col"></div>
       <div class="col-12">
  <div class="table table-bordered table-hover">
    <table>
        <thead class="thead-dark">
            <tr>
                <th>m_id</th>&nbsp;&nbsp;
                <th>name</th>&nbsp;&nbsp;
                <th>plan</th>&nbsp;&nbsp;
                <th>phone</th>&nbsp;&nbsp;
                <th>weight</th>&nbsp;&nbsp;
                <th>height</th>&nbsp;&nbsp;
                <th>last updated</th>
            </tr>
        </thead>
        <tbody>
               
               <?php
            global $connection;
            $query="SELECT * FROM gym ORDER BY m_id ASC";
            $result=mysqli_query($connection,$query);
            while($row=mysqli_fetch_assoc($result)){
                $m_id=$row['m_id'];
                $name=$row['name'];
                $plan=$row['plan'];
                $phone=$row['phone'];
                $weight=$row['weight'];
                $height=$row['height'];
                $last=$row['last'];
                echo "<tr>";
                echo "<td>$m_id</td>&nbsp;&nbsp;";
                echo "<td>$name</td>&nbsp;&nbsp;";
                echo "<td>$plan</td>&nbsp;&nbsp;";
                echo "<td>$phone</td>&nbsp;&nbsp;";
                echo "<td>$weight</td>&nbsp;&nbsp;";
                echo "<td>$height</td>&nbsp;&nbsp;";
                echo "<td>$last</td>&nbsp;&nbsp;";
                echo "<th><a href='update.php?source=update&m_id={$m_id}'>Update</a></th>";
                echo "<th><a href='index.php?delete={$m_id}'>Delete</a></th>";
                echo "</tr>";
            }
            ?>
               
                
        </tbody>
    </table>
    </div>
    </div>
    <div class="col"></div>
         </div>
    </div>
</body>
</html>