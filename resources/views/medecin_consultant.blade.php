<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Suivi Patient</title>
    <link rel="stylesheet" href="../../fonts.googleapis.com/css01c8.css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/main.css">

</head>

<body id="reportsPage">
    <div class="" id="home">
        <nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="index.html">
                    <h1 class="tm-site-title mb-0">Panneau medecin</h1>
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toga-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <i class="fas fa-tachometer-alt"></i>
                                Tableau de bord
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-shopping-cart"></i>
                                Notifications
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="far fa-user"></i>
                                Mon profile
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link d-block" href="#">
                                {{ Auth::user()->name }}, 
                                <span style="color: red"> Deconexion</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-white mt-5 mb-5">Hopital: <b></b></p>
                </div>
            <div class="col-12 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
                        <nav class="navbar navbar-expand-xl">
                            <div class="container h-100">
                
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mx-auto h-100">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#">
                                                <i class="fas fa-tachometer-alt"></i>
                                                Nouveau dossier
                                                <span class="sr-only">(current)</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="products.html">
                                                <i class="fas fa-shopping-cart"></i>
                                                Remplir un rapport
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="products.html">
                                                <i class="fas fa-shopping-cart"></i>
                                                Rechercher un dossier
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="products.html">
                                                <i class="fas fa-shopping-cart"></i>
                                                Modifier un dossier
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="products.html">
                                                <i class="fas fa-shopping-cart"></i>
                                                Supprimer un dossier
                                            </a>
                                        </li>
                                        
                                    </ul>
                                    
                                </div>
                            </div>
                
                        </nav>
                    </div>
            </div>
        </div>
        <footer class="tm-footer row tm-mt-small">
            <div class="col-12 font-weight-light">
                <p class="text-center text-white mb-0 px-4 small">
                    Copyright &copy; <b>2022</b> Tous droits reserves. 
                    
                </p>
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="js/Chart.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="js/tooplate-scripts.js"></script>
    <script>
        Chart.defaults.global.defaultFontColor = 'white';
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        barChart, pieChart;
        // DOM is ready
        $(function () {
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart

            $(window).resize(function () {
                updateLineChart();
                updateBarChart();                
            });
        })
    </script>
</body>

</html>