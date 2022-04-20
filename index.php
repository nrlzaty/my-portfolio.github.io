<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Portfolio</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!-- header section starts  -->

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Portfolio</a>

   <nav class="navbar">
      <a href="#home" class="active">home</a>
      <a href="#about">about</a>
      <a href="#services">services</a>
      <a href="#project">Self-Project</a>
      <a href="#contact">contact</a>
   </nav>

   <div class="follow">
      <a href="#" class="fas fa-moon"></a>
      <a href="#" class="fas fa-music"></a>
      <a href="https://www.instagram.com/nrl_zaty/" target="_blank" class="fab fa-instagram"></a>
      <a href="https://www.linkedin.com/in/nurul-izzati-binti-razalli-61201b236/" target="_blank" class="fab fa-linkedin"></a>
      <a href="https://github.com/nrlzaty" target="_blank" class="fab fa-github"></a>
   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/img.jpeg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">hi, i am nurul izzati </h3>
      <span data-aos="fade-up">web designer & developer</span>
      <p data-aos="fade-up">Welcome to my page! I want to became a professional "Front-end Developer/ Web developer" in the future.
         I might not have experience in this field "yet" but I'm hardworking person and can do critical thinking. Also i open to work! Contact me if you interested. </p>
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">Let's know about myself more!</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> Nurul Izzati Syazleen </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> nurulizzati1377@gmail.com </h3>
         <h3 data-aos="zoom-in"> <span>address : </span> Negeri Sembilan, Malaysia </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> +60-18 784 5903 </h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 22 years </h3>
         <!--<h3 data-aos="zoom-in"> <span>experience : </span> 5 month  </h3>-->
      </div>

      <a href="RESUME_NURU IZZATI SYAZALEEN.pdf" target="_blank" class="btn" data-aos="fade-up">download CV</a>

   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>skills</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>95%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span>65%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>PHP</span> <span>65%</span></h3> </div>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>education & experience</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">education</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2013 - 2017 )</span>
               <h3>SMK Taman Tuanku Jaafar</h3>
               <p>studied in technology science stream classes</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2018 - 2021 )</span>
               <h3>University Technology MARA (UiTM)</h3>
               <p>continued to study in diploma computer science it's located at UiTM Segamat, Johor. </p>
            </div>

         </div>

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">experience</h3>

            <div class="box" data-aos="fade-left">
               <span>( 2021 - 2022 )</span>
               <h3>Rental Assistant</h3>
               <p>Work at POPULAR Bookstore </p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2022 - Current )</span>
               <h3>Self-Learning until I got my dream job</h3>
               <p>Challenge myself to create trending, creative, and aesthetic of various different website!

                   
               </p>
            </div>

         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading" data-aos="fade-up"> <span>services</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-code"></i>
         <h3>web development</h3>
         <p>After graduated from University, i continue to self-study to improve my HTML, CSS, JavaScript and etc.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-paint-brush"></i>
         <h3>graphic design</h3>
         <p>Stay abreast of new trends in content and technology, moving graphics and design production.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-photo-video"></i>
         <h3>Vlog</h3>
         <p>from time to time I like to edit videos when I have time.
            <br>link: <a href="#"></a>
         </p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- project section starts  -->

<section class="project" id="project">

   <h1 class="heading" data-aos="fade-up"> <span>self-project</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <img src="images/book.jpg" alt="" class="image">
         <div class="overlay">
            <div class="text">
               coming soon <br>E-Commerce Website [Bookstore]
            </div>
         </div>
         <!-- <h3>web development</h3>
         <span>( 2020 - 2022 )</span> -->
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-1.jpg" alt="" class="image">
         <div class="overlay">
            <div class="text">
               coming soon
               <br>[Future project]
            </div>
         </div>
          <!-- <h3>web development</h3>
         <span>( 2020 - 2022 )</span> -->
      </div>

   </div>

</section>

<!-- project section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>+60-18 784 5903</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>nurulizzati1377@gmail.com</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>Negeri Sembilan, Malaysia</p>
      </div>

   </div>

</section>

<!-- contact section ends -->

<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>mr. web designer</span> </div>












<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>