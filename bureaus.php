    <?php
          include('connection.php');
          /*recuperation des infos des promotions*/
    $donnee=$connect->prepare('SELECT count(*) FROM `modules`');
      $res= $donnee->execute();
      $res=$donnee->fetch();
      @$nbr= $res[0];
            /*recuperation des infos des filieres*/
    $donnee1=$connect->prepare('SELECT count(*) FROM `classes`');
      $res1= $donnee1->execute();
      $res1=$donnee1->fetch();
      @$nbr1= $res1[0];
      
            /*recuperation des infos des classes*/
    $donnee2=$connect->prepare('SELECT count(*) FROM `professeurs`');
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

    

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface Admin
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
       <li class="nav-item">
        <a class="nav-link" href="modules.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Modules</span></a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
       <li class="nav-item">
        <a class="nav-link" href="classes.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Classes</span></a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
       <li class="nav-item">
        <a class="nav-link" href="professeurs.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Professeurs</span></a>
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
        <div class="  col-lg-4 ">

                            <div class="card mb-4  py-3 border-left-success ">

                                  <div class="card-body">

                                 <span style="font-size:20px;">  <?php echo $nbr;  ?> Module(s)</span>

                                 <a href="modules.php"> <button class="btn btn-success" style="position:relative;left:40px;"> <span style="font-weight:bold;"> Plus de  Détail </span></button></a>

                             </div>

                         </div>

                      </div>

                     <div class=" col-lg-4 ">

                               <div class="card mb-4 py-3 border-left-success shadow">

                                  <div class="card-body">

                                   <span style="font-size:20px;">   <?php echo $nbr1; ?> Classe(s)</span> 

                                <a href="classes.php"><button class="btn btn-success" style="position:relative;left:30px;"> <span style="font-weight:bold;"> Plus de  Détail </span></button> </a> 

                                  </div>

                              </div>

                            </div>

                        <div class="   col-lg-4 ">

                               <div class="card mb-4 py-3 border-left-success shadow">

                                  <div class="card-body">

                                  <span style="font-size:20px;">  <?php echo $nbr2;  ?> Professeur(s) </span>

                                 <a href="professeurs.php">  <button class="btn btn-success" style="position:relative;left:10px;"> <span style="font-weight:bold;"> Plus de  Détail </span></button></a>

                                  </div>

                              </div>

                            </div>




     </div>

  </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <br><br><br><br><br><br>
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; IPD-GCS 2020</span>
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



  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
