<?php
/*connexion a la base de donnée*/
include("connection.php");

// Authentification
if (isset($_POST['VALIDER'])) {
    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);
    if ($login == "doudou" && $password == "diakhate") {
        header('location:bureaus.php');
    } else {
        header('location:index.php?echec=true');
    }
}
// Insertion de module
if (isset($_POST['module'])) {
    $module = htmlspecialchars($_POST['mod']);
    $qh = htmlspecialchars($_POST['qh']);

    $donnée2 = $connect->prepare('SELECT * FROM `modules`');
    $res2 = $donnée2->execute();
    while ($res2 = $donnée2->fetch()) {
        if ($module == $res2['nom_module'] && $qh == $res2['quantum_horaire']) {
            $verif = 1;
            break;
        } else {
            $verif = 0;
        }
    }
    if (@$verif == 1) {
        header('location:modules.php?verif=true');
    } else {
        $donnée3 = $connect->prepare('INSERT INTO `modules`(`nom_module`, `quantum_horaire`)  VALUES (?,?)');
        $res3 = $donnée3->execute(array(@$module, @$qh));
        if ($res3) {
            header('location:modules.php?echec=true');
        }
    }
}
// Insertion de classe
if (isset($_POST['classe'])) {
    $nom_classe = htmlspecialchars($_POST['nom_classe']);
    $intitule = htmlspecialchars($_POST['intitule']);

    $donnée3 = $connect->prepare('SELECT * FROM `modules`');
    $res3 = $donnée3->execute();
    while ($res3 = $donnée3->fetch()) {
        if ($module == $res2['nom_module'] && $qh == $res2['quantum_horaire']) {
            $verif = 1;
            break;
        } else {
            $verif = 0;
        }
    }
    if ($verif == 1) {
        header('location:modules.php?echec=true');
    } else {
        $donnée3 = $connect->prepare('INSERT INTO `modules`(`nom_module`, `quantum_horaire`)  VALUES (?,?)');
        $res3 = $donnée3->execute(array(@$module, @$qh));
        if ($res3) {
            // header('location:modules.php?echec=true');
        } else {
            echo " Bonjour doudou ";
            //   header('location:modules.php?echec=true');
        }
    }
}
// Insertion de professeur

if (isset($_POST['professeur'])) {
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $email = htmlspecialchars($_POST['email']);

    $donnée2 = $connect->prepare('SELECT * FROM `professeurs`');
    $res2 = $donnée2->execute();
    while ($res2 = $donnée2->fetch()) {
        if ($prenom == $res2['prenom_prof'] && $nom == $res2['nom_prof']) {
            $verif = 1;
            break;
        } elseif ($telephone == $res2['telephone_prof']) {
            header('location:professeurs.php?echec1=true');
        } elseif ($email == $res2['email_prof']) {
            header('location:professeurs.php?echec2=true');
        }
    }
    if (@$verif == 1) {
        header('location:professeurs.php?verif=true');
    } else {
        $donnée3 = $connect->prepare('INSERT INTO `professeurs`(`nom_prof`, `prenom_prof`, `telephone_prof`, `email_prof`)  VALUES (?,?,?,?)');
        $res3 = $donnée3->execute(array(@$nom, @$prenom, @$telephone, @$email));
        if ($res3) {

            header('location:professeurs.php?echec=true');
        }
    }
}
