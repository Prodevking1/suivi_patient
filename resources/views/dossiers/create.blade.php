<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Suivi Patient</title>
    <link rel="stylesheet" href="../../fonts.googleapis.com/css01c8.css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="../../css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="../../css/main.css">

</head>
<body id="create">
    <div class="" id="home">
        <nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="index.html">
                    <h1 class="tm-site-title mb-0">Suivi-Patient</h1>
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
                            <a class="nav-link d-block" href="{{route('logout')}}">
                                
                                <span style="color: red"><i class="far fa-user"></i> Deconexion</span>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                </form>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
        <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <form method="POST" action="{{ route('dossiers.store') }}" class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          @csrf
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
          <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="nom_patient"
                            >Nom
                          </label>
                          <input
                            id="n_patient"
                            name="n_patient"
                            type="text"
                            class="form-control validate"
                            data-large-mode="true"
                          />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="nom_patient"
                            >Prenom
                          </label>
                          <input
                            id="p_patient"
                            name="p_patient"
                            type="text"
                            class="form-control validate"
                            data-large-mode="true"
                          />
                        </div>
            </div>

            <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="tel_patient"
                            >Telephone
                          </label>
                          <input
                            id="tel_patient"
                            name="tel_patient"
                            type="text"
                            class="form-control validate"
                            data-large-mode="true"
                          />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="adr_patient"
                            >Adresse
                          </label>
                          <input
                            id="adr_patient"
                            name="adr_patient"
                            type="text"
                            class="form-control validate"
                            data-large-mode="true"
                          />
                        </div>
            </div>

            <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="sex_patient"
                            >Sexe
                          </label>
                          <input
                            id="sex_patient"
                            name="sex_patient"
                            type="text"
                            class="form-control validate"
                            data-large-mode="true"
                          />
                       <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="m_patient"
                            >Mail
                          </label>
                          <input
                            id="m_patient"
                            name="m_patient"
                            type="text"
                            class="form-control validate"
                            data-large-mode="true"
                          />
                        </div>
             </div>

             <div  class="row">
             <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="n_medsoi"
                            >Nom du Medecin Soignant
                          </label>
                          <input
                            id="n_medsoi"
                            name="n_medsoi"
                            type="text"
                            class="form-control validate"
                            data-large-mode="true"
                          />
              </div>
              <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="tel_medsoi"
                            >Numero du Medecin Soignant
                          </label>
                          <input
                            id="tel_medsoi"
                            name="tel_medsoi"
                            type="text"
                            class="form-control validate"
                            data-large-mode="true"
                          />
              </div>

             </div>

             <div class ="row">
             <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="n_medtrai"
                            >Nom du Medecin Traitant
                          </label>
                          <input
                            id="n_medtrai"
                            name="n_medtrai"
                            type="text"
                            class="form-control validate"
                            data-large-mode="true"
                          />
              </div>
              <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="n_medtrai"
                            >Telephone du Medecin Soignant
                          </label>
                          <input
                            id="n_medtrai"
                            name="n_medtrai"
                            type="text"
                            class="form-control validate"
                            data-large-mode="true"
                          />
              </div>

             </div>


            <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="ant_med"
                            >Antécédent médical
                          </label>
                          <input
                            id="ant_med"
                            name="ant_med"
                            type="text"
                            class="form-control validate"
                            data-large-mode="true"
                          />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="m_rec"
                            >Maladie récurrente
                          </label>
                          <input
                            id="m_rec"
                            name="m_rec"
                            type="text"
                            class="form-control validate"
                            data-large-mode="true"
                          />
                        </div>
            </div>

            <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="grp_san"
                            >Groupe sanguin
                          </label>
                          <input
                            id="grp_san"
                            name="grp_san"
                            type="text"
                            class="form-control validate"
                            data-large-mode="true"
                          />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="al_med"
                            >Alergie
                          </label>
                          <input
                            id="al_med"
                            name="al_med"
                            type="text"
                            class="form-control validate"
                            data-large-mode="true"
                          />
                        </div>
            </div>

            <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="vacc"
                            >Vaccins déja recu
                          </label>
                          <input
                            id="vacc"
                            name="vacc"
                            type="text"
                            class="form-control validate"
                            data-large-mode="true"
                          />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="ser"
                            >Serums déja recus
                          </label>
                          <input
                            id="ser"
                            name="ser"
                            type="text"
                            class="form-control validate"
                            data-large-mode="true"
                          />
                        </div>
            </div>
<<<<<<< HEAD
            <div>

            <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="electro"
                            >Electrophorese
                          </label>
                          <input
                            id="electro"
                            name="electro"
                            type="text"
                            class="form-control validate"
                            data-large-mode="true"
                          />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="poids"
                            >Poids
                          </label>
                          <input
                            id="poids"
                            name="poids"
                            type="text"
                            class="form-control validate"
                            data-large-mode="true"
                          />


            </div>

=======
            
                  
>>>>>>> 37f643cb7af5bad731eda65f6cef1bb1f6414737
              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                <div class="tm-product-img-dummy mx-auto">
                  <i
                    class="fas fa-cloud-upload-alt tm-upload-icon"
                    onclick="document.getElementById('fileInput').click();"
                  ></i>
                </div>
                <div class="custom-file mt-3 mb-3">
                  <input id="fileInput" type="file" style="display:none;" />
                  <input
                    type="button"
                    class="btn btn-primary btn-block mx-auto"
                    value="Importer une photo"
                    onclick="document.getElementById('fileInput').click();"
                  />
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase">Nouveau dossier</button>
              </div>
            </form>
            </div>
          </div>
        </form>
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
