<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nature.css" type="text/css">
    <title>nature</title>
    <div class="Container">
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
        
      </div> 
</head>
<body>
    <section class="all" style="display: grid;grid-template-columns: 1fr 1fr;display: flex;justify-content: space-between;gap: 50px;    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
        <section class="left">
            <h1>Dons en nature</h1>
            <p>Nous souhaitons vous inspirer à agir et à faire un don de nature pour soutenir notre mission. Les dons en nature sont une manière tangible de faire une différence et de répondre aux besoins concrets de ceux qui sont dans le besoin. Voici pourquoi votre don de nature compte :<br>

                Imaginez les visages illuminés de familles recevant des vêtements chauds et des couvertures pendant les mois d'hiver rigoureux. Imaginez le soulagement et le réconfort qu'un repas chaud et nutritif peut apporter à un enfant affamé. Votre don de nature peut offrir ces moments de chaleur et d'espoir à ceux qui en ont besoin.<br>
                
                Qu'il s'agisse de vêtements, de denrées alimentaires non périssables, de fournitures scolaires, de produits d'hygiène ou d'autres articles essentiels, votre don de nature a un impact direct sur la vie des personnes vulnérables. Vous pouvez apporter un soutien concret en offrant ce que vous pouvez partager.<br>
                
                Nous comprenons que chaque personne a des possibilités différentes, mais chaque contribution compte. Votre don de nature, qu'il soit petit ou grand, est une étincelle qui allume la flamme de l'espoir et de la solidarité. Ensemble, nous pouvons faire une réelle différence dans la vie de ceux qui en ont besoin.<br>
                
                Rejoignez-nous dans notre mission de compassion en faisant un don de nature dès maintenant. Cliquez sur le bouton de don et laissez votre cœur guider votre geste. Votre générosité transformera des vies et apportera une lueur d'espoir là où elle est nécessaire.<br>
                
                Nous vous remercions sincèrement pour votre soutien. Ensemble, nous pouvons créer un impact positif et faire du monde un endroit meilleur.<br>
                
                Faites un don de nature aujourd'hui et devenez le moteur du changement !<br>
                <br>
                <br>
                Avec gratitude,
                <br>
                <br>
                Rotary club Hammamet</p>
        </section>
    <section class="section right">
    <img src="dons.png" alt="" >
    <div class="payment"> 
    <form class="form" method="post" action="nature.php">
    <div class="credit-card-info--form">
          <div class="input_container">
            <label for="password_field" class="input_label">Nom et Prénom</label>
            <input id="password_field" class="nom" type="text" name="nom" title="Inpit title" placeholder="Entrer votre nom">
          </div>
          <div class="input_container">
            <label for="password_field" class="input_label">Téléphone</label>
            <input id="password_field" class="input_field" type="tel" name="telephone" title="Inpit title" placeholder="+216 ">
          </div>
          <div class="input_container">
            <label for="password_field" class="input_label">Mail</label>
            <input id="password_field" class="input_field" type="text" name="email" title="Inpit title" placeholder="@gmail.com ">
          </div>
          <div class="input_container">
            <label for="password_field" class="input_label">Type</label>
            <select name="type" id="dons">
                <option value="Votre Choix">Votre Choix</option>
                <option value="Vêtements et articles de première nécessité">Vêtements et articles de première nécessité</option>
                <option value="Denrées alimentaires non périssables">Denrées alimentaires non périssables</option>
                <option value="Fournitures scolaires">Fournitures scolaires</option>
                <option value="Produits d'hygiène">Produits d'hygiène</option>
                <option value="Matériel médical ">Matériel médical </option>
              </select>
          </div>
          <div class="input_container">
            <label for="password_field" class="input_label">Condition</label>
            <select name="conditionn" id="dons">
                <option value="Votre Choix">Votre Choix</option>
                <option value="Neuf">Neuf</option>
                <option value="Légèrement utilisé">Légèrement utilisé</option>
                <option value="Utilisé/Besoin de réparation">Utilisé / Besoin de réparation</option>
              </select>
          </div>
          <div class="input_container">
            <label for="password_field" class="input_label">Poids en KG</label>
                <input id="password_field" class="input_field" type="text" name="poids" title="Inpit title" placeholder="50">
          <div class="input_container">
            <label for="password_field" class="input_label">Adresse</label>
            <input id="password_field" class="input_field" type="text" name="adresse" title="Inpit title" placeholder="slimen kehya manouba">
          </div>
          <div class="input_container">
            <label for="password_field" class="input_label">Code Postal</label>
            <input id="password_field" class="input_field" type="number" name="codepostal" title="Inpit title" placeholder="8050">
          </div>
          <div class="input_container">
           <label for="password_field" class="input_label">Besoin d'un Livreure ?</label>
           <select name="livreur" id="dons">
            <option value="None">None</option>
            <option value="Oui">Oui</option>
            <option value="Non">Non</option>
          </select>
          </div>
          <div class="input_container">
            <label for="password_field" class="input_label">Afficher mon Don</label>
            <select name="afficher" id="dons">
              <option value="None">None</option>
             <option value="Oui">Oui</option>
             <option value="Non">Non</option>
           </select>
           </div>
          </div>
        </div>
          <button class="purchase--btn">Checkout</button>
      </form>
    </div>
    </section>
</section>
<h2 id="Donateur">Donateurs :</h2>
<div class="sec21">
<section class="sec2">
  <article class="wrapper">
    <div class="marquee">
      <div class="marquee__group">
        <div class="bilel">
            <h3>Bilel Belhadjrhouma</h3>
            <p>bilelxbhr@gmail.com</p>
            <p></p>
        </div>
        <div class="bilel">
            <h3>Bilel Belhadjrhouma</h3>
            <p>bilelxbhr@gmail.com</p>
            <p></p>
        </div>
        <div class="bilel">
            <h3>Bilel Belhadjrhouma</h3>
            <p>bilelxbhr@gmail.com</p>
            <p></p>
        </div>
        <div class="bilel">
            <h3>Bilel Belhadjrhouma</h3>
            <p>bilelxbhr@gmail.com</p>
            <p></p>
        </div>
        <div class="bilel">
            <h3>Bilel Belhadjrhouma</h3>
            <p>bilelxbhr@gmail.com</p>
            <p></p>
        </div>
        <div class="bilel">
            <h3>Bilel Belhadjrhouma</h3>
            <p>bilelxbhr@gmail.com</p>
            <p></p>
        </div>
        <div class="bilel">
            <h3>Bilel Belhadjrhouma</h3>
            <p>bilelxbhr@gmail.com</p>
            <p></p>
        </div>
        <div class="bilel">
            <h3>Bilel Belhadjrhouma</h3>
            <p>bilelxbhr@gmail.com</p>
            <p></p>
        </div>
      </div>
  
      <div aria-hidden="true" class="marquee__group">
        <div class="bilel">
            <h3>Bilel Belhadjrhouma</h3>
            <p>bilelxbhr@gmail.com</p>
            <p></p>
        </div>
        <div class="bilel">
            <h3>Bilel Belhadjrhouma</h3>
            <p>bilelxbhr@gmail.com</p>
            <p></p>
        </div>
        <div class="bilel">
            <h3>Bilel Belhadjrhouma</h3>
            <p>bilelxbhr@gmail.com</p>
            <p></p>
        </div>
        <div class="bilel">
            <h3>Bilel Belhadjrhouma</h3>
            <p>bilelxbhr@gmail.com</p>
            <p></p>
        </div>
        <div class="bilel">
            <h3>Bilel Belhadjrhouma</h3>
            <p>bilelxbhr@gmail.com</p>
            <p></p>
        </div>
        <div class="bilel">
            <h3>Bilel Belhadjrhouma</h3>
            <p>bilelxbhr@gmail.com</p>
            <p></p>
        </div>
        <div class="bilel">
            <h3>Bilel Belhadjrhouma</h3>
            <p>bilelxbhr@gmail.com</p>
            <p></p>
        </div>
        <div class="bilel">
            <h3>Bilel Belhadjrhouma</h3>
            <p>bilelxbhr@gmail.com</p>
            <p></p>
        </div>
      </div>
    </div>
     
  </article>
</section>
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
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $type = $_POST['type'];
    $conditionn = $_POST['conditionn'];
    $poids = $_POST['poids'];
    $adresse = $_POST['adresse'];
    $codepostal = $_POST['codepostal'];
    $livreur = $_POST['livreur'];
    $afficher = $_POST['afficher'];

    try {
        $sql = "INSERT INTO donsnature (fullname, telephone, email, type, conditionn, poids, adresse, codepostal, livreur, afficher) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$nom, $telephone, $email, $type, $conditionn, $poids, $adresse, $codepostal, $livreur, $afficher]);
        echo '<script>window.location.href = "http://localhost/projet/vert1.php";</script>';
        echo "New record inserted successfully";
    } catch (PDOException $e) {
        echo "Insertion error: " . $e->getMessage();
    }
}

$conn = null;
?>
