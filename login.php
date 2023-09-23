<?php
if (isset($_POST['login'])) {

    $name = $_POST['name'];
    $phone = $_POST['number'];
    $password = $_POST['password'];

  
    $err_msg = " ";
    $error=" "; 

    if (empty($name) || empty($phone) || empty($password)) {

        $err_msg = "Please fill all fields";
    }

    $conn =  mysqli_connect("localhost", "root", "");

    mysqli_select_db($conn, "food");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT `user_id`, `user_name` FROM `user` WHERE `user_name`='" . $name . "' AND `user_password`='" . $password . "'";

    $food = mysqli_query($conn, $query);

    if (mysqli_num_rows($food) == 1) {
        // Login successful, redirect to the homepage
        header('Location: index.php');
        exit;
    } else {
        // Login failed, display error message
        $error = 'Invalid username or password';
    }
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

    <title>Login</title>
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
                <!-- <div class="input">

            <span>Confirm Password</span>

            <input type="password" name="password" id="password" placeholder="Confirm your password">


        </div> -->



            </div>

            <div class="inputbox">



                <!-- <div class="input">

            <span>your address</span>

            <textarea name="adddress" id="adddress" placeholder="Enter you address" cols="30" rows="10"></textarea>

        </div> -->




            </div>

            <span style="color: red; font-size: 1.5rem;"><?php echo $err_msg ?></span><br>
            <span style="color: red; font-size: 1.5rem;"><?php echo $error ?></span><br>
            <Button name="login" class="btn" id="login">Login</Button><br><br>
            <Button name="register" class="btn" id="register">Register</Button>



            <!-- <p style="font-size: 1.7rem;">Don't have account create one</p> -->
        </form>



    </section>
</body>

</html>