<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Membership.css" type="text/css">
    <title>Membership</title>
</head> 
<body >
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
    <div style="display: grid; grid-template-columns: 1fr 1fr;display: flex;transform: scale(0.9); justify-content:center;clear:both;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;" class="container">
        
    <div style="background-color:#f4cb08; padding: 20px;height: 94.5vh;padding-left: 50px;border-top-left-radius: 20px;border-bottom-left-radius: 20px;">
        <h1>Get in Touch</h1>
        <p>Please feel free to get in touch with us if you have any <br> questions or concerns.</p>
        
        <div style="display: flex;align-items: center;">
        <img style="width: 20px;height: 20px;" src="email.png" alt="">
        <h3 style="padding-left:10px ;">CHART TO US</h3>
        </div>
        <p style="color: white;padding-left:40px ;">Our friendly team is here to help</p>
        <p style="padding-left:40px ;">nadhirmazl@yahoo.com</p>
        <br>
        
        <div style="display: flex;align-items: center;">
        <img style="width: 20px;height: 20px;" src="pin.png" alt="">
        <h3  style="padding-left:10px ;">OFFICE</h3>
        </div>
        <p style="color: white;padding-left:40px ;">Hammamet, Tunisia 8050</p>
        
        <div style="display: flex;align-items: center;">
        <img style="width: 20px;height: 20px;" src="telephone.png" alt="">
        <h3 style="padding-left:10px ;">PHONE</h3>
        </div>
        <p style="color: white;padding-left:40px ;">Mon-Fri from 8am to 6pm</p>
        <p style="padding-left:40px ;">+216 97 648 078</p>
        <div style="display: flex;margin-top: 50px;margin-right:100px;">
            <img style="width: 20px;height: 20px;margin-right: 9px;"  src="facebook.svg" alt="">
            <img style="width: 20px;height: 20px;margin-right: 9px;"  src="instagram.svg" alt="">
        </div>
    </div>
    <div style="background-color: white; padding: 20px;height: 94.5vh;padding-left: 50px;border-top-right-radius: 20px;border-bottom-right-radius: 20px;">
        <h1>Join Us</h1>
        <p>You can join us anytime via <span style="color:#f4cb08; text-decoration: underline;">nadhirmazl@yahoo.com</span></p>
        <form method="post" action="Membership1.php">
            <label  for="Name">Name</label><br>
            <input type="text" id="nom" name="nom" placeholder="Enter your Name" style="width: 90%; height: 30px; padding: 5px;margin-top: 10px;background-color: rgb(239, 235, 235);border-radius: 6px;border: 0px;">
            <br><br>
            <label for="Email">Email</label><br>
            <input type="text" name="Email" id="Email" placeholder="Enter a valid email address" style="width: 90%; height: 30px; padding: 5px;margin-top: 10px;background-color: rgb(239, 235, 235);border-radius: 6px;border: 0px;">
            <br><br>
            <label for="Phone">Phone</label><br>
            <input type="text" id="Phone" name="Phone" placeholder="Enter your phone (e.g., +216 20202020)" style="width: 90%; height: 30px; padding: 5px;margin-top: 10px;background-color: rgb(239, 235, 235);border-radius: 6px;border: 0px;">
            <br><br>
            <label for="Phone">Password</label><br>
            <input type="password" id="Phone" name="password" placeholder="Enter your Password" style="width: 90%; height: 30px; padding: 5px;margin-top: 10px;background-color: rgb(239, 235, 235);border-radius: 6px;border: 0px;">
            <br><br>
            <label for="Message">How can we help?</label><br>
            <textarea name="Message" id="Message" style="width: 90%; height: 100px; padding: 5px;margin-top: 10px;background-color: rgb(239, 235, 235);border-radius: 6px;border: 0px;"></textarea>
            <br><br>
            <button class="Btn">
                Submit
              </button>
        </form>
        
        
    </div>

</div>
    
</body>
</html>
<?php
/*echo "hello world";
echo "<a href='WebProject.html'>back</a>";*/

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
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Message = $_POST['Message'];
    $password = $_POST['password'];

    try {
        $sql = "INSERT INTO members (user_name, email, phone, password, message_sent) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$nom, $Email, $Phone, $password, $Message]);
        echo "New record inserted successfully";
    } catch (PDOException $e) {
        echo "Insertion error: " . $e->getMessage();
    }
}

$conn = null;
?>

