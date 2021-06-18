<?php
include"db.php";
global $connection;
global $connection;
if(isset($_GET['m_id'])){
    $m_id = $_GET['m_id'];
    $result1=mysqli_query($connection,"SELECT * FROM gym WHERE m_id='$m_id'");
            while($row = mysqli_fetch_assoc($result1)){
                $m_id = $row['m_id'];
                $name = $row['name'];
                $plan = $row['plan'];
                $phone = $row['phone'];
                $weight = $row['weight'];
                $height = $row['height'];
                $last = $row['last'];
                
            
}}

if(isset($_POST['submit'])){
    
    global $connection;
    $m_id=$_POST['m_id'];
    $name=$_POST['name'];
    $plan=$_POST['plan'];
    $phone=$_POST['phone'];
    $weight=$_POST['weight'];
    $height=$_POST['height'];
    $last=$_POST['last'];
    $query="UPDATE gym SET m_id = '$m_id',name='$name',plan='$plan',phone='$phone',weight='$weight',height='$height',last='$last' WHERE m_id = '$m_id' ";
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
       <div class="heading" style="text-align:center; padding:50px"><h2>gym management</h2><br><h4>update members</h4><br><p><a href="index.php">back</a></p></div>
       <div class="row">
       <div class="col"></div>
       <div class="col-6">
    <form action="update.php" method="post">
       <div class="form-group">
        <label for="m_id">memeber id</label>
        <input type="text" name="m_id" value="<?php echo $m_id; ?>" class="form-control">
        </div>
        <div class="form-group">
         <label for="name">name</label>
        <input type="text" name="name" value="<?php echo $name; ?>" class="form-control">
        </div>
        <div class="form-group">
         <label for="plan">plan</label>
        <input type="text" name="plan" value="<?php echo $plan; ?>" class="form-control">
        </div>
        <div class="form-group">
         <label for="phone">phone</label>
        <input type="text" name="phone" value="<?php echo $phone; ?>" class="form-control">
        </div>
        <div class="form-group">
         <label for="weight">weight</label>
        <input type="text" name="weight" value="<?php echo $weight; ?>" class="form-control">
        </div>
        <div class="form-group">
         <label for="height">height</label>
        <input type="text" name="height" value="<?php echo $height; ?>" class="form-control">
        </div>
        <div class="form-group">
         <label for="last">last_updated</label>
        <input type="date" name="last" value="<?php echo $last; ?>" class="form-control"><br>
        </div>
        <input type="submit" name="submit" value="update" class="btn btn-primary">
    </form>
    </div>
    <div class="col"></div>
    </div>
    </div>
</body>
</html>


