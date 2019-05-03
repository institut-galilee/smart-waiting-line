<?php
  try {
    $bdd = new PDO("mysql:host=localhost;dbname=salon;charset=utf8","root","password");
  }
  catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
  }
  
  if(isset($_POST['submit_file'])){
	$dossier = 'file/';
	if($_FILES['csv']['error'] != UPLOAD_ERR_NO_FILE){
		$fichier_csv = 'fichier.csv';
		if(move_uploaded_file($_FILES['csv']['tmp_name'],$dossier.$fichier_csv)){
			$file = fopen($dossier.$fichier_csv,"r");
			$row = 0;
			while(($data = fgetcsv($file, 1000, ",")) != FALSE) {
				if($row != 0) {
					$req = $bdd->prepare("UPDATE CLIENT SET NUM_TEL=?,COIFFEUR=? WHERE NOM=? AND MAIL=?");
					$var = $data[1] . $data[2];
					$req->execute(array($data[4],$data[5], $data[1].$data[2], $data[3]));
					echo $var;
				}
				$row++;
			}
			fclose($file);
		}
		else { 
			$error = "error";
		}
	}
	else {
		$error = "";
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
		<link rel="stylesheet" href="styleCSS.css">

   <style media="screen">
      body{
        background: url("img/gris.jpg") no-repeat center fixed;
        background-size: cover;
      }
    </style>
  </head>
  <body>
		<form class="form " method="post" enctype="multipart/form-data">
			<center><h3> Importer votre fichier CSV</h3></center></br>
			<input type="file" class="form-control" id="exampleFormControlFile1" name="csv"></br>
			<center><button type="submit" class="btn  btn-success btn-lg "name="submit_file"> Valider </button><center>
		</form>
  </body>
</html>
