<?php
  try {
    $bdd = new PDO("mysql:host=localhost;dbname=salon;charset=utf8","root","password");
  }
  catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
  }

  if(isset($_GET['coiffeur'])){
      $var = htmlspecialchars($_GET['coiffeur']);

      if (strcmp($var,'fatah') == 0) {
        $req = $bdd->prepare('SELECT * FROM fatah ORDER BY ID ASC LIMIT 1');
        $req->execute();
        $fatahID = $req->fetch();
        $reqDelete = $bdd->prepare('DELETE FROM fatah WHERE ID = ?');
        $reqDelete->execute(array($fatahID['id']));
        $fatah = $fatahID['nom'];
      }
      else if (strcmp($var,'mohamed') == 0) {
        $req = $bdd->prepare('SELECT * FROM mohamed ORDER BY ID ASC LIMIT 1');
        $req->execute();
        $mohamedID = $req->fetch();
        $reqDelete = $bdd->prepare('DELETE FROM mohamed WHERE id = ?');
        $reqDelete->execute(array($mohamedID['id']));
        $mohamed = $mohamedID['nom'];
      }
      else if (strcmp($var,'faouzi') == 0) {
        $req = $bdd->prepare('SELECT * FROM faouzi ORDER BY ID ASC LIMIT 1');
        $req->execute();
        $faouziID = $req->fetch();
        $reqDelete = $bdd->prepare('DELETE FROM faouzi WHERE ID = ?');
        $reqDelete->execute(array($faouziID['id']));
        $faouzi = $faouziID['nom'];
      }
  }
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Barbe-Shop</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style media="screen">
      body{
        background: url("img/gris.jpg") no-repeat center fixed;
        background-size: cover;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <center><h1>Welcome To Barbe-Shop Courbevoie</h1></center>
      <center><img src="img/barbe-shop.jpg"></center>
	  <br>
	  <center><strong><div id="div_horloge"></div></strong></center>
      <div class="container">
          <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
			<center>
            <h3><strong>Fatah</strong></h3>
            <strong style='color:red'>
			<?php
              if (isset($fatah)) {
                echo $fatah;
              }
             ?>
			 </strong>
			 </center>
          </div>
          <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
            <center>
			<h3><strong>Mohamed</strong></h3>
            <strong style='color:red'>
			<?php
              if (isset($mohamed)) {
                echo $mohamed;
              }
             ?>
 			 </strong>
			 </center>
          </div>
          <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
            <center>
			<h3><strong>Faouzi</strong></h3>
            <strong style='color:red'>
			<?php
              if (isset($faouzi)) {
                echo $faouzi;
              }
             ?>
 			 </strong>
			 </center>
          </div>
        </div>
      </div>

<script type="text/javascript">
window.onload=function() {
  horloge('div_horloge');
};

function horloge(el) {
  if(typeof el=="string") { el = document.getElementById(el); }
  function actualiser() {
    var date = new Date();
    var str = date.getHours();
    str += ':'+(date.getMinutes()<10?'0':'')+date.getMinutes();
    str += ':'+(date.getSeconds()<10?'0':'')+date.getSeconds();
	str += ' '+ date.getDate();
	str += '/'+ date.getMonth();
	str += '/'+ date.getFullYear();
    el.innerHTML = str;
  }
  actualiser();
  setInterval(actualiser,1000);
}
</script>
      </div>
  </body>
</html>
