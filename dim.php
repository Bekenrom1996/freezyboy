<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dim.css">
    <link rel="stylesheet" href="bootstrap.min.css"> 
    <script src="jquery-3.5.1.min.js"></script>
   <script src="popper.min.js"></script>
   <script src="bootstrap.min.js"></script>
</head>
<body>
    

















<div class="container">

    <div class="row">

        <div class="col-md-8 col-md-offset-2 styl" style="margin-top:5%">
            <div class="row">
         <?php

         $connection = mysqli_connect('localhost','root','','compel');
         if(isset($_POST['search'])) {
          $searchkey = $_POST['search'];
          $sql = "SELECT * FROM com WHERE busname LIKE '%$searchkey%'";
        

         }else{

            $sql = "SELECT * FROM com";
            $searchkey = "";
         }

         $result = mysqli_query($connection,$sql);

         ?>

                <form action="" method="POST">
<div class="col-md-6">
    <button style="width: 10em;color: white;margin-bottom: 10px;" type="btn"><a style="color: black;" href="freezytech.html">Back</a></button>
    <input style="width: 30em;" type="text" name="search" class="form-control" placeholder="search by name" value="">
</div>
<div class="col-md-6 text-left">
    <button class="btn">search</button>
</div>

                </form>

                <br>
                <br>
            </div>
            <table class="table table-bordered">
           <tr>
         <th style="color:white" >business name</th>
         <th style="color: white;">business type</th>
         <th style="color:white">address</th>
         <th style="color:white">registration date</th>
         <th style="color: white;">phone</th>
         <th style="color: white;">email</th>
         <th style="color: white;">services</th>
         
         
         
         

           </tr>
          <?php while($row = mysqli_fetch_object($result)) { ?>


           <tr>

            <td style="color: white;"><?php echo $row->busname ?></td>
            <td style="color: white;"><?php echo $row->bustype ?></td>
            <td style="color: white;"><?php echo $row->addr ?></td>
            <td style="color: white;"><?php echo $row->reg_dt?></th>
            <td style="color: white;"><?php echo $row->phone ?></th>
            <td style="color: white;"><?php echo $row->email ?></th>
            <td style="color: white;"><?php echo $row->services ?></th>
            
            
            
            
           </tr>
         <?php } ?>
            </table>
            
        </div>
    </div>
</div>



</body>
</html>