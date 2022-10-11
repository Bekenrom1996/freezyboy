<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freezytech.com</title>
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="freezytech.css">
   <link rel="stylesheet" href="bootstrap.min.css"> 
  <script src="jquery-3.5.1.min.js"></script>
 <script src="popper.min.js"></script>
 <script src="bootstrap.min.js"></script>

</head>
<body>
    




    <div id="progress">

        <span id="progress-value"></span>
    </div>
    
    














<div class="notify-alert-box">

    <img src="contact-us-box-homepage.png" alt="">
    <p>we'd like to send you anotification of the latest posts and updates</p>
    <div class="buttons">
        <button id="notify-cancel-button">Cancel</button> 
        <button id="notify-button">Allow</button> 

    </div>
</div>













    <header class="header">
        <a href="#" class="logo"><i class="fa-solid fa-business-time"></i>BusinessArchive</a>
        
        
        <nav class="navbar">
        <a href="freezytech.html">Home</a>
        <a href="#services">Services</a>
        <a href="#Registration">Registration</a>
        <a href="freezytech5.php">contact us</a>
        <a href="#News">About us</a>
        
        
        
        
        
        
        </nav>
        
        <div class="icons">
        
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        
        
        </div>
        <form action="" class="search-form">
        
            <input type="search" id="search-box" placeholder="search...here">
            <label for="search-box" class="fas fa-search"></label>
        
        </form>
        
        
       <ul class="navbar-right">
           <a href="#"><span class="fas fa-user"></span>Sign up</a>
           <a href="#"><span class="fa-sign-in"></span>Sign in</a>

       </ul>
          
     

        </header>





        <div class="heading" style="background: url(maxi2.jpg) no-repeat">
            <h1>about us</h1>
        </div>
        
        
        <section class="about">
        
        <div class="comfirm">
          <h3>why choose us?</h3>
          <p>
            Businessarchive is Nigeria No 1 Enterprise Service<br> 
            and we pride ourselves in the deliberate use of proven <br>
            expertise and result oriented approach to help your company run smoother<br> 
          </p>
          <p>
            whether you are starting a new business or taking your existing <br>
            business to the next level frezzytech is positioed to power your ambitions <br>
            our clients trust us to take care of their business and create a competitive edge <br>
            that lets them always perform our best.
            please kindly fill in the form below and tell us how you feel about our company
          </p>
        </section>



        <?php

        include 'fig.php';
        
        error_reporting(0);
        
        
        if(isset($_POST['submit'])) {
        
        
            $name = $_POST['name'];
            $email =$_POST['email'];
            $comment = $_POST['comment'];
        
        
            $sql = "INSERT INTO comments (name, email, comment) 
            VALUES ('$name', '$email', '$comment')";
        
            $result = mysqli_query($conn, $sql);
            if($result) {
                echo "<script>alert('comment added successfully.')</script>";
            }else{
                echo "<script>alert('comment does not add.')</script>";
        
            }
        
        }
        
        
        ?>
        
        
        
        
        
        
      
            
        <div class="wrapper">
        <form action=""  method="POST" class="form">
        
        
            <div class="input-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="enter your name"  value="<?php echo $name;?>" required>
                
            </div>
            <div class="input-group">
                <label for="email"> Email</label>
                <input type="email" name="email" id="email" placeholder="enter your email" value="<?php echo $email;?>" required>
                
            </div>
        
        
        
        
          
            <div class="input-group textarea">
                <label for="Comment">Comment</label>
                <textarea  name="comment" id="email" placeholder="comment" value="<?php echo $comment; ?>" ></textarea>
                
            </div>
            <div class="input-group"> 
                <button name="submit" class="btn">Post comment</button>
            </div>
        </form>
        <div class="prev-comments">
        
        <?php
        
        $sql = "SELECT * FROM comments";
        $result = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($result) > 3) {
        
            while($row = mysqli_fetch_assoc($result)) {
        ?>
        
        
        <div class="single-item">
                <h4><?php echo $row['name'];?></h4>
                <a href="kayode:<?php echo $row['email'];?>"><?php echo $row['email'];?></a>
                <p><?php echo $row['comment'];?></p>
            </div>
        <?php
        
        
            }
        
        }
        
        ?>
            
        </div>
        
        </div>
        
      

















        <section class="footer">

            <div class="box-container">
            <div class="box">
              <h3>Company</h3>
              <a href="home.php"><i class="fas fa-angle-right"></i>About us</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>Careers</a>
            <a href="package.php"><i class="fas fa-angle-right"></i> package</a>
            
            </div>
            
            <div class="box">
              <h3>Businessarchive start</h3>
              <a href="#"><i class="fas fa-angle-right"></i>freezytech loop</a>
              <a href="#"><i class="fas fa-angle-right"></i>freezytech Mailroom</a>
              <a href="#"><i class="fas fa-angle-right"></i>freezytech Agent</a>
              <a href="#"><i class="fas fa-angle-right"></i>Incorporation API</a>
               
            
            
            
            </div>
            <div class="box">
              <h3>Resources</h3>
              <a href="#"><i class="fas fa-angle-right"></i>Blog</a>
              <a href="#"><i class="fas fa-angle-right"></i>Founder's Guide</a>
              <a href="#"><i class="fas fa-angle-right"></i>Free Business name check</a>
              <a href="#"><i class="fas fa-angle-right"></i>Name Check Widget</a>
              
               
            
            
            
            </div>
            
            <div class="box">
            <h3>follow us</h3>
             <a href="#"> <i class="fab fa-facebook"></i>facebook</a>
             <a href="#"> <i class="fab fa-twitter"></i>twitter</a>
             <a href="#"> <i class="fab fa-instagram"></i>instagram</a>
             <a href="#"> <i class="fab fa-linkedin"></i>linkedin</a>
            
            
            </div>
            </div>
            
            <div class="credit">Copyright &copy; <span>Businessarchive corporate commission afffairs</span>  | All rights reserverd!</div>
            
            </section>



            <script>



                let navBar = document.querySelector('.navbar');
                document.querySelector('#menu-btn').onclick = () =>{
                    navBar.classList.toggle('active');
                    searchForm.classList.remove('active');
                    loginForm.classList.remove('active');
                }
                Window.onscroll = () =>{
                    searchForm.classList.remove('active');
                    loginForm.classList.remove('active');
                    navBar.classList.remove('active');
                }
                </script>


<script>


    setTimeout(function(){
        document.querySelector('.notify-alert-box').style.top ='0'
    
    },1000);
    
    document.querySelector('#notify-button').onclick =async()=>{
        localStorage.setItem('notify','true');
       notifyTrue();
       notifyOption();
    }
    
    function notifyTrue(){
    
    if(localStorage.getItem('notify','true')){
        document.querySelector('.notify-alert-box').style.display ='none'
    
    
    }
    
    }
    notifyTrue();
    
    document.querySelector('#notify-cancel-button').onclick =async()=>{
        localStorage.setItem('notify','false');
       notifyFalse();
    }
    
    function notifyFalse(){
    
    if(localStorage.getItem('notify','false')){
        document.querySelector('.notify-alert-box').style.display ='none'
    
    
    }
    
    }
    notifyFalse();
    
    function showNotification(){
        var notificationBody = new Notification('New message from Freezytech', {
            body:'Freezytech World',
            icon:'contact-us-box-homepage.png'
    })
    notificationBody.onclick = (e) =>{
        window.location.href ='https://goggle.com'
    }
    
    }
    function showNotification2(){
        var notificationBody = new Notification('New message from Youtube ', {
            body:'Youtube World'
    })
    
    }
    function showNotification3(){
        var notificationBody = new Notification('New message from Freezytech', {
            body:'Freezytech World'
    })
    
    }
    
    function notifyOption(){
    
        if(localStorage.notify == 'true'){
            if(Notification.permission == 'granted'){
                showNotification();
                if(localStorage.notifyMessage === undefined){
                    localStorage.setItem('notifyMessage','true');
                    showNotification();
                }
              /*  if(localStorage.notifyMessage2 === undefined){
                    localStorage.setItem('notifyMessage2','true');
                    showNotification2();
                }
                if(localStorage.notifyMessage3 === undefined){
                    localStorage.setItem('notifyMessage3','true');
                    showNotification3();
                }*/
    
    
            }else if(Notification.permission !=='denied'){
        Notification.requestPermission().then(permission =>{ 
            if(permission == 'granted'){
                if(localStorage.notifyMessage === undefined){
                    localStorage.setItem('notifyMessage','true');
                    showNotification();
                }
    
    
                showNotification();
            }
        
            });
        }
    }
    
    }
    
    notifyOption();
    
    
    
    </script>
    
    
    
    <script>
        let searchForm = document.querySelector('.search-form');
        document.querySelector('#search-btn').onclick = () =>{
            searchForm.classList.toggle('active');
            loginForm.classList.remove('active');
            navBar.classList.remove('active');
        }
        
</script>







</body>
</html>