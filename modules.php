<?php
include('connection.php');

/*recuperation des infos des classes*/
$donnee2 = $connect->prepare('SELECT count(*) FROM `modules`');
$res2 = $donnee2->execute();
$res2 = $donnee2->fetch();
@$nbr2 = $res2[0];


/*requete de selection des donnée*/
$donnee = $connect->prepare('SELECT * FROM `modules`');
$res1 = $donnee->execute();
$res1 = $donnee->fetchAll();
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
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="deconnect.php">
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
            <marquee behavior="" direction="">
              <h1> Bienvenue sur la plateforme de gestion du personnel d'IPD </h1>
            </marquee>
            <!-- <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2"> -->

          </div>


          <!-- Topbar Navbar -->


        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <!-- Begin Page Content -->
        <div class="container " class="sidebar-toggle-box">

          <div class="row">
            <!--  -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
              Ajouter un module
            </button>

            <div class="modal fade" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Ajouter un Module</h4>

                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">


                    <form action="valid-ajout.php" method="POST">
                      <div class="form-group row">
                        <label for="recipient-name" class="col-sm-2 col-form-label">Module</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="mod" id="module" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="recipient-name" class="col-sm-2 col-form-label">Horaire</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="qh" id="qh" required>
                        </div>
                      </div>





                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="module">VALIDER</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">FERMER</button>
                      </div>
                    </form>
                  </div>

                </div>
              </div>
            </div>

            <!--  -->
          </div>
          <br>
          <!-- debut  -->
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <center>
                <h3 class="m-0 font-weight-bold text-primary">Les informations concernant <?php echo $nbr2;  ?> Module(s)</h3>
              </center>
            </div>
            <?php
            if (isset($_GET['echec'])) {
            ?>
              <div class="alert alert-success" role="alert">
                <center class="test">
                  <h3> Module enregistré </h3>
                </center>
              </div>
            <?php
            }
            ?>
            <?php
            if (isset($_GET['verif'])) {
            ?>
              <div class="alert alert-warning" role="alert">
                <center class="test">
                  <h3> Ce module est deja enregistré </h3>
                </center>
              </div>
            <?php
            }
            ?>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th style="text-align:center;">Modules </th>
                      <th style="text-align:center;">Quantum Horaire</th>
                      <th style="text-align:center;">Détails</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($res1 as $res1) :
                      // nombre d'etudiant
                      //    $donnee4=$connect->prepare('SELECT count(*) FROM `etudiant`  JOIN `classe`  WHERE `etudiant`.`id_classe`=`classe`.`nom_classe` AND `classe`.`nom_classe`=?   ');
                      //    $res4=$donnee4->execute(array($res3['nom_classe']));
                      //    $res4=$donnee4->fetch();
                      //    $nbr= $res4[0];
                      //     $donnee5=$connect->prepare('SELECT * FROM `niveau`  JOIN `classe`  WHERE `niveau`.`id_niv`=`classe`.`id_niv` AND `classe`.`nom_classe`=?   ');
                      //    $res5=$donnee5->execute(array($res3['nom_classe']));
                      //    $res5=$donnee5->fetch();

                    ?>
                      <tr>
                        <td style="text-align:center;"><?= $res1['nom_module'] ?></td>
                        <td style="text-align:center;"><?= @$res1['quantum_horaire'] ?> H</td>


                        <td style="text-align:center;"><a href="#"><button class="btn btn-primary"> Details</button> </a></td>

                      </tr>
                    <?php
                    endforeach;

                    ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- fin -->
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
    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>