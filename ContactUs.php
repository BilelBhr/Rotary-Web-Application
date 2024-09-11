<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ContactUs.css" type="text/css">
    <title>contact-us</title>
    <nav class="navbar">
        <div class="logo-container">
          <img src="logo.png" alt="Logo" class="logo" />
          <div class="vertical-line"></div>
          <div class="club-name">
            <span>Rotary</span>
            <span>Club</span>
            <span>Hammamet</span>
          </div>
        </div>
        <div class="nav-links">
          <a href="WebProject.html" class="nav-link">Home</a>
          <a href="about.html" class="nav-link">About Us</a>
          <a href="ContactUs.php" class="nav-link">Contact Us</a>
          <a href="Membership1.php" class="nav-link">Join Us</a>
          <a href="pay.html"class="nav-link">Donation</a>
          <a href="login.php"class="nav-link">Sign In</a>
        </div>
      </nav>
</head>

<body>
    <div class="container1">
        <div class="container2">
            <div style="display: flex;align-items: center;">
            <img style="width: 30px;height: 30px;" src="telephone.png" alt="">
            <h3 style="padding-left:10px ;">Call Us</h3>
            </div>
            <p style="color: white;padding-left:40px ;">+216 97 648 078</p>
            <div style="display: flex;align-items: center;">
                <img style="width: 30px;height: 30px;" src="pin.png" alt="">
                <h3  style="padding-left:10px ;">Location</h3>
            </div>
                <p style="color: white;padding-left:40px ;">Hammamet, Tunisia 8050</p>
            
            <div style="display: flex;align-items: center;">
                <img style="width: 30px;height: 30px;" src="businessman.png" alt="">
                <h3 style="padding-left:10px ;">Business Hours</h3>
                </div>
            <p style="color: white;padding-left:40px ;">Mon-Fri from 8am to 6pm</p>
        </div>
    </div>
    <div class="box">
        
        <div class="box1">
        <form method="post" action="ContactUs.php">
            <p class="a">Contact Us</p><br>
            <input name="nom" class="b" type="text" placeholder="Enter you Name" ><br>
            <br><br>
            <input name="email" class="b" type="text" placeholder="Enter a valid email adress">
            <br><br>
            <textarea name="Message" class="c" placeholder="Enter your message here" name="Message" id="Message" style="width: 90%; height: 100px; padding: 5px;margin-top: 10px;background-color: rgb(250, 249, 249);border-radius: 6px;border: 0px;"></textarea>
            <hr class="custom-hr">
            <br><br>
            <input  href="" class="submit" type="submit" name="" id=""value="Submit">
        </form>    
         </div>
    </div>
</body>
</html> 
<?php
$dsn = 'mysql:host=localhost;dbname=membership';
$username = 'souheil';
$password = 'test1234';

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection error: ' . $e->getMessage();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $Email = $_POST['email'];
    $Message = $_POST['Message'];

    try {
        $sql = "INSERT INTO message (user_name, email, messagee) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$nom, $Email, $Message]);
        echo "New record inserted successfully";
    } catch (PDOException $e) {
        echo "Insertion error: " . $e->getMessage();
    }
}

$conn = null;
?>
