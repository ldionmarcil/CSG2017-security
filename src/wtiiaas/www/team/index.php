<?php
require_once '../utils/utils.php';

$db->where('employee_role',1); //ceo
$db->orWhere('employee_role',2); //cfo
$db->orWhere('employee_role',3); //cto

$employees = $db->get('employees',null,array('employee_role','employee_id'));
print_r($employees);


?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>What Time Is It As A Service - Time, at your service!</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
      <div class="container topnav">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand topnav" href="/intranet/">Intranet</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="#about">About</a>
            </li>
            <li>
              <a href="#services">Services</a>
            </li>
            <li>
              <a href="/team/">The Team</a>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>



    <!-- Page Content -->
    <div style="padding-top:60px;" class="container">

      <!-- Introduction Row -->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Our team of totally-humane executives
            <small>It's Nice to Meet You!</small>
          </h1>
          <p>Meet our team of dedicated officers. It is with the help of these fellow executives that WTIIAAS is able to make profit!</p>
        </div>
      </div>

      <!-- Team Members Row -->
      <div class="row">
        <div class="col-lg-12">
          <h2 class="page-header">Our Team</h2>
        </div>
        <a href="/team/employee.php?id=<?=$employees[0]["employee_id"]?>">
          <div class="col-lg-4 col-sm-6 text-center">
            <img class="img-circle img-center" src="/img/ceo.png" alt="">
            <h3>Chief Executive Officer
              <small>CEO</small>
            </h3>
          </div>
        </a>

        <a href="/team/employee.php?id=<?=$employees[1]["employee_id"]?>">
        <div class="col-lg-4 col-sm-6 text-center">
          <img class="img-circle img-center" src="/img/cfo.png" alt="">
          <h3>Chief Technology Officer
            <small>CTO</small>
          </h3>
        </div>
        </a>
        
        <a href="/team/employee.php?id=<?=$employees[2]["employee_id"]?>">
        <div class="col-lg-4 col-sm-6 text-center">
          <img class="img-circle img-center" src="/img/cto.png" alt="">
          <h3>Chief Financial Officer
            <small>CFO</small>
          </h3>
        </div>
      </div>
        </a>
        
      <hr>

      <!-- Footer -->
      <footer>
        <div class="row">
          <div class="col-lg-12">
            <p>Copyright &copy; Your Website 2014</p>
          </div>
          <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
      </footer>

    </div>
    <!-- /.container -->


      </div>
      <!-- /.banner -->

      <!-- Footer -->
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <ul class="list-inline">
                <li>
                  <a href="#">Home</a>
                </li>
                <li class="footer-menu-divider">&sdot;</li>
                <li>
                  <a href="#about">About</a>
                </li>
                <li class="footer-menu-divider">&sdot;</li>
                <li>
                  <a href="#services">Services</a>
                </li>
                <li class="footer-menu-divider">&sdot;</li>
                <li>
                  <a href="#contact">Contact</a>
                </li>
              </ul>
              <p class="copyright text-muted small">Copyright &copy; Your Company 2014. All Rights Reserved</p>
            </div>
          </div>
        </div>
      </footer>

      <!-- jQuery -->
      <script src="/js/jquery.js"></script>

      <!-- Bootstrap Core JavaScript -->
      <script src="/js/bootstrap.min.js"></script>

  </body>

</html>