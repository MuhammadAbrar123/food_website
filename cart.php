<?php


$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "food");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$stmt = $conn->prepare("SELECT  `user_name`, `user_phone`, `or_food`, `ad_food`, `address`, `message` FROM `cartt`");

// Execute the SELECT statement
$stmt->execute();

// Bind the results of the SELECT statement to variables
$stmt->bind_result($username, $phone, $ofood, $afood, $address, $message);
    
    // Fetch the results and store them in variables
    if ($stmt->fetch()) {
        $username = $username;
        $phone = $phone;
        $ofood = $ofood;
        $afood=$afood;
        $address=$address;
        

    
     
    }
    
    // Close the statement and the database connection
    $stmt->close();


if (isset($_POST['confirm'])) {

    echo '<script>alert("Your order is confirmed")</script>';
    
}
if(isset($_POST['cancel'])){

    header('location:index.php');

}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- <link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />


    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />



    <title>Cart</title>
</head>

<body>
    <form action="" method="post" class="w-100">
        <table border="1" class="W-100 m-4">
            <tr>
                <th colspan="2" style="text-align: center; justify-content: center; font-size: 2.2rem;">
                    Your Cart
                </th>
            </tr>

            <tr>
                <td>
                    Name:
                </td>
                <td>
                    <?php echo $username  ?>
                </td>
            </tr>
            <tr>
                <td>
                    Phone:
                </td>
                <td>
                    <?php echo $phone ?>
                </td>
            </tr>

            <tr>
                <td>
                    Your food:
                </td>
                <td>
                    <?php echo $ofood ?>
                </td>
            </tr>

            <tr>

                <td>
                    Additional food:
                </td>
                <td>
                    <?php echo $afood ?>
                </td>

            </tr>
            <tr>
                <td>
                    Address:
                </td>
                <td>
                    <?php echo $address ?>
                </td>
            </tr>

            <tr>

                <td>
                    <Button class="btn" name="cancel">Cancel</Button>
                </td>
                <td>
                    <Button class="btn" name="confirm">Confirm</Button>
                </td>
            </tr>
        </table>
    </form>





</body>

</html>