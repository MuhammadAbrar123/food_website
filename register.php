<?php

if (isset($_POST['register'])) {

    $name = $_POST['name'];
    $phone = $_POST['number'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $address = $_POST['adddress'];
    $err_msg ="";

    if (empty($name) || empty($phone) || empty($password) || empty($cpassword) || empty($address)) {

        $err_msg = "Please fill all fields";
    }
else{

    $conn =  mysqli_connect("localhost", "root", "");

    mysqli_select_db($conn, "food");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if($password==$cpassword){
        $query = "INSERT INTO `user`( `user_name`, `user_phone`, `user_password`, `user_address`) VALUES ('$name','$phone','$password','$address')";

        $food = mysqli_query($conn, $query);
    
        header('location:index.php');

    }
else{
    echo '<script>alert("Passwords are not matching")</script>';
}
   

}


   
}







if (isset($_POST['login'])) {

    header('location:login.php');
}


?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />

    <!-- <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" /> -->

    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <title>Register</title>
</head>

<body>

    <section class="order" id="account">

        <h3 class="sub-heading">Login Here /</h3>
        <h1 class="heading">Create account</h1>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="inputbox">

                <div class="input">

                    <span>your name</span>

                    <input type="text" name="name" id="name" placeholder="Enter your name">


                </div>


                <div class="input">

                    <span>your number</span>

                    <input type="number" name="number" id="number" placeholder="Enter your number">


                </div>

                <div class="input">

                    <span>your Password</span>

                    <input type="password" name="password" id="password" placeholder="Enter your password">


                </div>
                <div class="input">

                    <span>Confirm Password</span>

                    <input type="password" name="cpassword" id="cpassword" placeholder="Confirm your password">


                </div>



            </div>

            <div class="inputbox">



                <div class="input">

                    <span>your address</span>

                    <textarea name="adddress" id="adddress" placeholder="Enter you address" cols="30" rows="10"></textarea>

                </div>




            </div>
            <span style="color: red; font-size: 1.5rem;"><?php echo $err_msg ?></span>
            <br>

            <Button name="register" class="btn" id="register">Register</Button>


            <Button name="login" class="btn" id="login"> Login</Button><br>
            <!-- <p style="font-size: 1.7rem;">Don't have account create one</p> -->
        </form>



    </section>



</body>

</html>