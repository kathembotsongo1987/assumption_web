<?php 	
// Create two functions. The first function connects to the database and the 2 others are the templates for the header and the footer foht the admin page.

// Function 1 //


Class Connection{
    private $server = "mysql:host=localhost;dbname=newaadb";
    private $username = "root";
    private $password = "";
    private $option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);

    protected $conn; 


public function open(){
        try {
        $this->conn = new PDO($this->server, $this->username, $this->password, $this->option);
        return $this->conn;

        } catch (PDOException $exception) {
        echo "Failed to connect to database! Please chech the problem first." . $exception->getMessage();
    }
}

public function close(){
    $this->conn = null;
}
}


// Function 2 = template_header //
function template_header() {
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title></title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="js/js_font.js"></script>
    </head>
	<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Administration</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"></form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <a class="nav-link" href="../index.php"><i class="fas fa-home fa-fw" style="color:blue; font-size:40px;"></i></a>
                <li class="nav-item dropdown">                
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-key fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">                        
                        <li><a class="dropdown-item" href="../index.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Home data
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Slides carousel</a>
                                            <a class="nav-link" href="register.html">Photos triple love</a>
                                            <a class="nav-link" href="password.html">Rule of life</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAbout" aria-expanded="false" aria-controls="pagesCollapseError">
                                        About us data
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAbout" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">Our Formator</a>
                                            <a class="nav-link" href="404.html">Our History</a>
                                            <a class="nav-link" href="500.html">Our Spirituality</a>
                                            <a class="nav-link" href="500.html">lay Assumptionists</a>
                                            <a class="nav-link" href="500.html">Our Administration</a>
                                            <a class="nav-link" href="500.html">Our Location and statistic</a>
                                            <a class="nav-link" href="500.html">Our Formation</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                  </nav>
            </div>
            <div id="layoutSidenav_content">


                
EOT;
}

/// Function call the footer
function template_footer() {
echo <<<EOT

		<footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Developper: 
                            <span style="color:blue; font-size:30px;">D</span>ieudonne <span style="color:red; font-size:30px;">K</span>athembo <span style="color:black; font-size:30px;">T</span>songo a.a</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        
       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        
         <script src="js/js_font.js"></script>
         <script src="js/scripts.js"></script>
        <script src="js/chart-area.js"></script>
        <script src="js/chart-bar.js"></script>
        <script src="js/bootstrap5_1.js"></script>

    </body>
</html>
EOT;
}
?>
