<?php require_once('../bd/conbd.php'); ?>
<?php
ob_start();
session_start();

if (isset($_POST['connexion'])) {
    $error = '';    
    if (empty($_POST['email']) || empty($_POST['password'])) {
        $error = 'Adresse email et mot de passe requis';
    } else {
        $email = strip_tags($_POST['email']);
        $password = strip_tags($_POST['password']); // Mot de passe en clair

        try {
            // Préparation de la requête pour récupérer l'utilisateur par email
            $sql = $pdo->prepare("SELECT * FROM user WHERE email = ?");
            $sql->execute(array($email));
            $total = $sql->rowCount();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);

            if ($total == 0) {
                $error = 'Valeurs de connexion incorrectes<br/>';
            } else {
                foreach ($result as $data) {
                    $password_bd = $data['pwd']; // Mot de passe stocké en clair dans la base de données
                }

                // Comparaison des mots de passe en clair
                if ($password == $password_bd) {
                    // Connexion réussie, on stocke l'utilisateur dans la session
                    $_SESSION['user'] = $data;

                    // Redirection vers la page admin.php dans le dossier admin
                    header("Location: admin/index.php");
                    exit;
                } else { 
                    $error = 'Mot de passe incorrect<br/>';
                }
            }
        } catch (PDOException $e) {
            echo "Erreur SQL : " . $e->getMessage();
        }
    }
}
?>


<head>
  <meta charset="UTF-8">
  <title>Page Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
<style>

body {
  background: black;
  font-family: 'Inter UI', sans-serif;
  margin: 0;
  padding: 20px;
}
.page {
  display: flex;
  flex-direction: column;
  height: calc(100% - 40px);
  position: absolute;
  place-content: center;
  width: calc(100% - 40px);
}
@media (max-width: 767px) {
  .page {
    height: auto;
    margin-bottom: 20px;
    padding-bottom: 20px;
  }
}
.container {
  display: flex;
  height: 320px;
  margin: 0 auto;
  width: 640px;
}
@media (max-width: 767px) {
  .container {
    flex-direction: column;
    height: 630px;
    width: 320px;
  }
}
.left {
  background: white;
  height: calc(100% - 40px);
  top: 20px;
  position: relative;
  width: 50%;
}
@media (max-width: 767px) {
  .left {
    height: 100%;
    left: 20px;
    width: calc(100% - 40px);
    max-height: 270px;
  }
}
.login {
  font-size: 50px;
  font-weight: 900;
  margin: 50px 40px 40px;
}
.eula {
  color: #999;
  font-size: 14px;
  line-height: 1.5;
  margin: 40px;
}
.right {
  background: #474A59;
  box-shadow: 0px 0px 40px 16px rgba(0,0,0,0.22);
  color: #F1F1F2;
  position: relative;
  width: 50%;
}
@media (max-width: 767px) {
  .right {
    flex-shrink: 0;
    height: 100%;
    width: 100%;
    max-height: 350px;
  }
}
svg {
  position: absolute;
  width: 320px;
}
path {
  fill: none;
  stroke: url(#linearGradient);;
  stroke-width: 4;
  stroke-dasharray: 240 1386;
}
.form {
  margin: 40px;
  position: absolute;
}
label {
  color:  #c2c2c5;
  display: block;
  font-size: 14px;
  height: 16px;
  margin-top: 20px;
  margin-bottom: 5px;
}
input {
  background: transparent;
  border: 0;
  color: #f2f2f2;
  font-size: 20px;
  height: 30px;
  line-height: 30px;
  outline: none !important;
  width: 100%;
}
input::-moz-focus-inner { 
  border: 0; 
}
#submit {
  color: #707075;
  margin-top: 40px;
  transition: color 300ms;
}
#submit:focus {
  color: #f2f2f2;
}
#submit:active {
  color: #d0d0d2;
}
</style>

  
  
  
</head>

<body>


<form method="POST" class="max-w-sm mx-auto">
  <div class="mb-5">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
    <input type="email" id="email" name="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="isc@info.com" required />
  </div>
  <div class="mb-5">
    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
    <input type="password" id="password" name="password"class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
  </div>
  <div class="flex items-start mb-5">
    <div class="flex items-center h-5">
  <button type="submit" id="connexion" name="connexion" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Se connecter</button>
</form>


</body>