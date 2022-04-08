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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/main.css">

</head>

<body id="reportsPage">
    <div class="" id="home">
        <nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <h1 class="tm-site-title mb-0">Suivi-Patient</h1>
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toga-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('home') }}">
                                <i class="fas fa-tachometer-alt"></i>
                                Tableau de bord
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-bell"></i>
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
                            <a class="nav-link d-block" href="{{ route('logout') }}">
                                <span style="color: red"><i class="far fa-user"></i> Deconexion</span>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col">
                    <strong>
                        <p class="text-white mt-5 mb-5">Tous les dossiers<b></b></p>
                    </strong>
                </div>
                <div class="col-12 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">

                        <div class="row mt-4">
                            <div class="form-group mb-3 col-xs-12 col-sm-10">
                                <input class="form-control validate" data-large-mode="true"
                                    placeholder="Rosine Sawadogo" />
                            </div>

                            <div class="form-group mb-3">
                                <button class="btn btn-primary btn-block text-uppercase">Rechercher</button>
                            </div>
                        </div>
                        @foreach ($datas as $data)
                            <table class="table mt-4">
                                <thead>
                                    <tr>
                                        <th scope="col"><span style="color:#F5A623">IDENTIFIANT</span></th>
                                        <th scope="col"><span style="color:#F5A623">NOM</span></th>
                                        <th scope="col"><span style="color:#F5A623">PRENOM</span></th>
                                        <th scope="col"><span style="color:#F5A623">TELEPHONE</span></th>
                                        <th scope="col"><span style="color:#F5A623">DERNIERE CONSULTATION</span></th>
                                        <th scope="col"><span style="color:#F5A623">PROCHAIN RDV</span></th>
                                        <th scope="col"><span style="margin-left:50px; color:#F5A623">ACTIONS</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="font-size: 14px">
                                        <th scope="row "><b>#{{ $data->id }}</th>

                                        <td><b>{{ $data->n_patient }}</b></td>
                                        <td><b>{{ $data->p_patient }}</b></td>
                                        <td><b>{{ $data->tel_patient }}</b></td>
                                        <td><b>16:00, 12 NOV 2018</b></td>
                                        <td><b>{{ $data->date_rdv }}</b></td>
                                        <td>
                                            
                                            <a 
                                               href="{{ route('dossiers.show', $data->id) }}" style="margin:5px; color:#F5A623;font-size: 30px">

                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a 
                                
                                                href="{{ route('dossiers.edit', $data->id) }}" style="margin:5px; color:#F5A623;font-size: 30px">

                                                <i class="fas fa-edit"></i>
                                            </a>
                                            
                                                @csrf
                                                @method('DELETE')
                                            <a href="{{ route('dossiers.delete', ['id'=>$data->id]) }}" style="color:hsl(37, 91%, 55%);font-size: 30px">
                                                <i class="fas fa-trash"></i>
                                            </a> 
                                        
                                            
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        @endforeach
                    </div>


                </div>
            </div>
            <footer class="tm-footer row tm-mt-small">
                <div class="col-12 font-weight-light">
                    <h6 class="text-center text-white mb-0 px-4 sm">
                        Copyright &copy; <b>2022</b> Tous droits reserves.

                    </h6>
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
            $(function() {
                drawLineChart(); // Line Chart
                drawBarChart(); // Bar Chart
                drawPieChart(); // Pie Chart

                $(window).resize(function() {
                    updateLineChart();
                    updateBarChart();
                });
            })
        </script>
</body>

</html>
