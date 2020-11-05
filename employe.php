<?php
          include('connection.php');
          /*recuperation des infos des promotions*/
    $donnee=$connect->prepare('SELECT count(*) FROM `promotion`');
      $res= $donnee->execute();
      $res=$donnee->fetch();
      @$nbr= $res[0];
            /*recuperation des infos des filieres*/
    $donnee1=$connect->prepare('SELECT count(*) FROM `filiere`');
      $res1= $donnee1->execute();
      $res1=$donnee1->fetch();
      @$nbr1= $res1[0];
      
            /*recuperation des infos des classes*/
    $donnee2=$connect->prepare('SELECT count(*) FROM `classe`');
      $res2= $donnee2->execute();
      $res2=$donnee2->fetch();
      @$nbr2= $res2[0];
      
            /*recuperation des infos des u - e */
    $donnee3=$connect->prepare('SELECT count(*) FROM `u_e`');
      $res3= $donnee3->execute();
      $res3=$donnee3->fetch();
      @$nbr3= $res3[0];
            /*recuperation des infos des professeurs*/
    $donnee4=$connect->prepare('SELECT count(*) FROM `professeur`');
      $res4= $donnee4->execute();
      $res4=$donnee4->fetch();
      @$nbr4= $res4[0];
            /*recuperation des infos des utilisateurs*/
    $donnee5=$connect->prepare('SELECT count(*) FROM `utilisateurs`');
      $res5= $donnee5->execute();
      $res5=$donnee5->fetch();
      @$nbr5= $res5[0];
    ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Page de l'administrateur</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="bureaus.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin <sup>1</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="bureaus.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Bureau Admin</span></a>
      </li> -->

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface Admin
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
       <li class="nav-item">
        <a class="nav-link" href="service.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Services</span></a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
       <li class="nav-item">
        <a class="nav-link" href="fonction.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Fonctions</span></a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
       <li class="nav-item">
        <a class="nav-link" href="employe.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Employés</span></a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="recrutement.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Recrutement</span></a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
       <li class="nav-item">
       <a class="nav-link" href="conge.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Congés</span></a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
       <li class="nav-item">
        <a class="nav-link" href="absence.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Absence</span></a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="sanction.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Sanctions</span></a>
      </li>
       <!-- Nav Item - Pages Collapse Menu -->
       <li class="nav-item">
        <a class="nav-link"  href="deconnect.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Deconnexion</span></a>
      </li>

     
    

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
         
            <div class="input-group">
             <marquee behavior="" direction=""><h1> Bienvenue sur la plateforme de gestion du personnel d'IPD </h1></marquee>
              <!-- <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2"> -->
              
            </div>
        

          <!-- Topbar Navbar -->
  

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
<div class="container "   class="sidebar-toggle-box" >

  <div class="row">
      <!--  -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
   Ajouter un Employé
  </button>

      <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ajouter un Employé</h4>
        
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
         <!-- Modal body -->
         <div class="modal-body">
             <form action="valid-ajout.php" method="POST">
          <div class="form-group row">
            <label for="recipient-name" class="col-sm-2 col-form-label">Prénom</label>
              <div class="col-sm-10">
            <input type="text" class="form-control"  name ="pren_etud" id="prenom">
            </div>
         </div>
         <div class="form-group row">
            <label for="recipient-name" class="col-sm-2 col-form-label">Nom</label>
             <div class="col-sm-10">
            <input type="text" class="form-control"  name ="nom_etud" id="nom">
            </div>
          </div>
         <div class="form-group row">
            <label for="recipient-name" class="col-sm-2 col-form-label">Naissance</label>
            <div class="col-sm-10">
            <input type="date" class="form-control"  name ="date_etud" id="date">
            </div>
          </div>
          <div class="form-group row">
            <label for="recipient-name" class="col-sm-2 col-form-label">Lieu</label>
            <div class="col-sm-10">
            <input type="text" class="form-control"  name ="lieu_etud" id="lieu">
            </div>
            </div>
         <div class="form-group row">
            <label for="recipient-name" class="col-sm-2 col-form-label">Sexe</label>
            <div class="col-sm-10">
            <input type="text" class="form-control"  name ="adresse_etud" id="adresse">
            </div>
            </div>
            <div class="form-group row">
              <label for="recipient-name" class="col-sm-2 col-form-label">Nbr Enfant</label>
            <div class="col-sm-10">
            <input type="text" class="form-control"  name ="tel_etud" id="telephone">
            </div>
           </div>
           <div class="form-group row">
              <label for="recipient-name" class="col-sm-2 col-form-label">GRP Sanguin</label>
            <div class="col-sm-10">
            <input type="text" class="form-control"  name ="tel_etud" id="telephone">
            </div>
           </div>
         <div class="form-group row">
              <label for="recipient-name" class="col-sm-2 col-form-label">Téléphone</label>
            <div class="col-sm-10">
            <input type="text" class="form-control"  name ="tel_etud" id="telephone">
            </div>
           </div>
         <div class="form-group row">
              <label for="recipient-name" class="col-sm-2 col-form-label">E - mail</label>
             <div class="col-sm-10">
            <input type="email" class="form-control"  name ="email_etud" id="email">
            </div>
            </div>
            <div class="form-group row">
              <label for="recipient-name" class="col-sm-2 col-form-label">CNI</label>
             <div class="col-sm-10">
            <input type="text" class="form-control"  name ="email_etud" id="email">
            </div>
            </div>
            <div class="form-group row">
              <label for="recipient-name" class="col-sm-2 col-form-label">Diplome</label>
             <div class="col-sm-10">
            <input type="text" class="form-control"  name ="email_etud" id="email">
            </div>
            </div>
            <div class="form-group row">
            <label for="recipient-name" class="col-sm-2 col-form-label">Date Diplome</label>
            <div class="col-sm-10">
            <input type="date" class="form-control"  name ="date_etud" id="date">
            </div>
          </div>
          <div class="form-group row">
            <label for="recipient-name" class="col-sm-2 col-form-label">Date Entrée</label>
            <div class="col-sm-10">
            <input type="date" class="form-control"  name ="date_etud" id="date">
            </div>
          </div>
          <div class="form-group row">
               <label for="recipient-name" class="col-sm-2 col-form-label">Fonction </label>
                <div class="col-sm-10">

             <select name="classe" id="" class="custom-select" >
              
                      <?php foreach ($re as $re):?>
                  <option value="<?= $re['nom_classe'] ?>"> <?= $re['nom_classe'] ?></option> 
                      <?php endforeach;?> <br>
                      </select>
                      </div>
          </div>
          <div class="form-group row">
               <label for="recipient-name" class="col-sm-2 col-form-label">Service</label>
                <div class="col-sm-10">

             <select name="classe" id="" class="custom-select" >
              
                      <?php foreach ($re as $re):?>
                  <option value="<?= $re['nom_classe'] ?>"> <?= $re['nom_classe'] ?></option> 
                      <?php endforeach;?> <br>
                      </select>
                      </div>
          </div>
         <div class="form-group row">
               <label for="recipient-name" class="col-sm-2 col-form-label">Statut</label>
                <div class="col-sm-10">

             <select name="classe" id="" class="custom-select" >
                    <option value="0">Public</option>
                    <option value="1">Privée</option>
             </select>
                      </div>
          </div>
          <div class="modal-footer">
          <button type="submit" class="btn btn-primary"  name="etd" >VALIDER</button>
           <button type="button" class="btn btn-danger" data-dismiss="modal">FERMER</button>
        </div>
        </form>
        </div>

      </div>
    </div>
  </div>

       <!--  -->
 </div>
</div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <br><br><br><br><br><br>
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; IPD-GP 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
