<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css"> 
    <script src="jquery-3.5.1.min.js"></script>
   <script src="popper.min.js"></script>
   <script src="bootstrap.min.js"></script>
</head>
<body>
    <?php require_once 'fire.php';?>


    <?php

if (isset($_SESSION['message'])); ?>
 
<div class="alert alert-<?=$_SESSION['msg_type']?>">


<?php
echo ($_SESSION['message']);

unset($_SESSION['message']);


?>
</div>
<?php ; ?>








    <div class="container"> 


    <?php

$mysqli = new mysqli('localhost', 'root', '', 'compel') or die(mysqli_error($mysqli));

$result = $mysqli->query("SELECT * FROM com") or die($mysqli->error);
//pre_r($result);

?>

<div class="row justify-content-center">

<table class="table">
    <thead>
        <tr>
            <th>Business name</th>
            <th>business type</th>
            <th>registration date</th>
            <th>address</th>
            <th>phone</th>
            <th>email</th>
           <th>services</th>
       <th colspan="2">Action</th>

        </tr>
    </thead>

<?php

while ($row = $result->fetch_assoc()): ?>

   <tr>
  <td> <?php echo $row['busname']; ?></td>
  <td> <?php echo $row['bustype']; ?></td>
  <td> <?php echo $row['reg_dt']; ?></td>
  <td> <?php echo $row['addr']; ?></td>
  <td> <?php echo $row['phone']; ?></td>
  <td> <?php echo $row['email']; ?></td>
  <td> <?php echo $row['services']; ?></td>


<td>
    <a href="bus.php?edit=<?php echo $row['id']; ?>"
        class=" btn btn-info">Edit</a>
    <a href="fire.php?delete=<?php echo $row['id']; ?>"
        class=" btn btn-danger">delete</a>

</td>
</tr>


<?php endwhile; ?>





    
</table>

</div>


<?php
function pre_r($array) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';




}

?>
    
<div class="row justify-content-center">

    <form action="fire.php" method="POST">
  <input type="hidden" name="id" value="<?php echo $id; ?>">


    <div class="form-group">
        <label>Business name</label>
        <input type="text" name="name" class="form-control"  
        value="<?php echo $busname; ?>" placeholder="Enter your  business name">
    </div>
    <div class="form-group">
        <label>Business type</label>
        <input type="text" name="name" class="form-control" 
        value="<?php echo $bustype; ?>"  placeholder="Enter your business type">
    </div>

    <div class="form-group">
        <label>Registration date</label>
        <input type="text" name="name" class="form-control"  
        value="<?php echo $reg_dt; ?>" placeholder="Enter your registration date">
    </div>

    <div class="form-group">
        <label>Address</label>
        <input type="text" name="name" class="form-control"  
        value="<?php echo $addr; ?>" placeholder="Enter your address">
    </div>

    <div class="form-group">
        <label>Phone</label>
        <input type="text" name="name" class="form-control"  
        value="<?php echo $phone; ?>" placeholder="Enter your phone">
    </div>


    <div class="form-group">
        <label>Email</label>
        <input type="text" name="name" class="form-control"  
        value="<?php echo $email; ?>" placeholder="Enter your email">
    </div>

    <div class="form-group">
        <label>services</label>
        <input type="text" name="name" class="form-control"  
        value="<?php echo $services; ?>" placeholder="Enter your services">
    </div>













    <div class="form-group">
    <?php    
  if ($update == true);
  ?>

        <button class="btn btn-info" type="submit" name="update">update</button>
        <button class="btn btn-primary" type="submit" name="save">save</button>
    </div>

    </form>
</div>

</div>




<button style="width: 10em;color: white;margin-bottom: 10px;" type="btn"><a style="color: black;" href="user_page.php">Back</a></button>



</body>
</html>