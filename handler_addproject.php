<?php

//cleaning and storing data in variables
$project_title = strip_tags($_POST["data_title"]);
$project_description = strip_tags($_POST["data_description"]);
echo $_POST['data_description'];

// insert data in databases

require_once("db_connexion.php");
$sql = 'INSERT INTO `table_projects` (`projet_title`, `projet_description`) VALUES (:projet_title, :projet_description);';
$query = $db->prepare($sql);
$query->bindValue(':projet_title', $project_title, PDO::PARAM_STR);
$query->bindValue(':projet_description', $project_description, PDO::PARAM_STR);
$query->execute();
echo '<div>Project added.</div>';
echo '<div><a href="index.php"><button>Back</button></a></div>'; //Créationd de btn pour revenir au Form//