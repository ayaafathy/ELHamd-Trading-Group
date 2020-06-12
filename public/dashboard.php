<?php if (!isset($_SESSION)) 
{
  session_start();
}

  define('__ROOT__', "../app/"); 
  require_once(__ROOT__ . "model/Employees_model.php");
  require_once(__ROOT__ . "controller/employee_controller.php");
  require_once(__ROOT__ . "view/Employees_view.php");

  $model = new Employees();
  $controller = new EmployeeController($model);
  $view = new Empviewpage($controller, $model);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Homepage
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <script>
    function display() {
      document.getElementById('id02').style.display = 'block';
      document.getElementById('id01').style.display = 'none';
    }
  </script>
</head>

<body class="">

  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"-->
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          HT
        </a>
        <a href="#" class="simple-text logo-normal">
          ELHamd Trading
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="./dashboard.php">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <?php if (!empty($_SESSION["ID"])) { ?>

            <li>
              <a href="employeeList.php">
                <i class="now-ui-icons users_single-02"></i>
                <p>User Profile
                <br> Do not open</p>
              </a>
            </li>


            <li>
              <a href="employeesList.php">
                <i class="now-ui-icons users_single-02"></i>
                <p>Employees</p>
              </a>
            </li>
            <li>
              <a href="companiesList.php">
                <i class="now-ui-icons files_box"></i>
                <p>Companies</p>
              </a>
            </li>
            <li>
              <a href="shipping.php"> <i class="now-ui-icons files_box"></i>
                <p>Shipping Lines</p>
              </a>
            </li>
            <li>
              <a href="">
                <i class="now-ui-icons files_box"></i>
                <p>Contracts
                <br> Do not open</p>
              </a>
            </li>
            <li>
                <a href="product_public.php"><i class="now-ui-icons files_box"></i>
                    <p>Products</p>
                </a>
            </li>
            <li>
              <a href="storage_public.php"><i class="now-ui-icons files_box"></i>
                <p>Storage</p>
              </a>
            </li>
    
          <?php }
          ?>

        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
   

            <li class="nav-item">
              <a  class="nav-link" href="aboutUs.php"><i class="now-ui-icons files_box"></i>
                <p>About US</p>
              </a>
            </li>

              <li class="nav-item">
              <a  class="nav-link" href="contactUs.php"><i class="now-ui-icons files_box"></i>
                <p>Contact US</p>
              </a>
            </li>

              <li class="nav-item">
              <a  class="nav-link" href="faqs.php"><i class="now-ui-icons files_box"></i>
                <p>FAQs</p>
              </a>
            </li>




              <?php if (!empty($_SESSION["ID"])) { ?>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="now-ui-icons users_single-02"></i>
                    <p> <span class="d-lg-none d-md-block">Some Actions</span> </p>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="signout.php">Signout</a>

                  </div>
                </li>
              <?php } ?>
              <?php if (empty($_SESSION["ID"])) { ?>
                <li class="nav-item">
                  <a class="nav-link" href="login_public.php">
                    <i class="now-ui-icons users_single-02"></i>
                    <i>Login</i>
                    <p><span class="d-lg-none d-md-block">Account</span></p>
                  </a>
                </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </nav>

      <!-- End Navbar -->


      <div class="panel-header panel-header-sm">
      </div>
      <div class="content" id="id01" style="display: block">

        <div class="row">

          <div class="col-lg-4">

            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Global Sales</h5>
                <h4 class="card-title"><a href="product_public.php">View Products</a></h4>
                <div class="dropdown">
                  <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                    <i class="now-ui-icons loader_gear"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="product_public.php">View Products</a>
                    <a class="dropdown-item" href="product_public.php?action=add">Add New Product</a>
                    <a class="dropdown-item" href="product_public.php?action=edit">Edit Product</a>
                    <a class="dropdown-item text-danger" href="#">Remove Data</a>
                  </div>
                </div>
              </div>
              <div class="card-body">

                <div class="row">

                  <img src="../public/Products/BFAVP.jpg" style="width:50%">
                  <img src="../public/Products/fit.jpeg" style="width:50%">
                  <img src="../public/products/unnamed.jpg" style="width:50%">
                  <img src="../public/Products/80242-Org-Tumeric-560x325.jpg" style="width:50%">


                </div>
              </div>

            </div>
          </div>


          <?php if (!empty($_SESSION["ID"])) { ?>

           
           <div class="col-md-4">
            <div class="card  card-tasks">
              <div class="card-header ">
                <h5 class="card-category"></h5>
                <h4 class="card-title">Reminders</h4>
              </div>
              <div class="card-body ">
                <div class="table-full-width table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>

                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" checked>
                              <span class="form-check-sign"></span>
                            </label>
                          </div>

                        </td>
                        <td class="text-left"> Sign Contract 3001 </td>
                        
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                            <i class="now-ui-icons ui-2_settings-90"></i>
                          </button>

                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                          </button>
                        </td>

                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox">
                              <span class="form-check-sign"></span>
                            </label>
                          </div>
                        </td>
                        <td class="text-left"> Update Storage </td>

                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                            <i class="now-ui-icons ui-2_settings-90"></i>
                          </button>

                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                          </button>
                        </td>
                      </tr>

                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" checked>
                              <span class="form-check-sign"></span>
                            </label>
                          </div>
                        </td>

                        <td class="text-left"> Print Invoices </td>
                       
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                            <i class="now-ui-icons ui-2_settings-90"></i>
                          </button>

                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                          </button>
                        </td>

                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer ">
                <hr>

              </div>
            </div>
          </div>

        </div>


    
        
        
       
    <div class="row">


        <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="card-category"></h5>
                <h4 class="card-title"> Employees</h4>
              </div>
                <div class="card-body">
                   
                    <?php echo $view->output(); ?>
                
                </div>
        </div>

    </div>

       
        
      <?php } ?>
    </div>


</div>




  <footer class="footer">
    <div class=" container-fluid ">

      <div class="copyright" id="copyright">
        &copy;
        <script>
          document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
        </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
      </div>
    </div>
  </footer>

  </div>
  </div>
  </div>


  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script>


</body>

</html>