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
                <a class="navbar-brand" href="{{route('home')}}">
                    <h1 class="tm-site-title mb-0">Suivi-Patient</h1>
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toga-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('home')}}">
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
          
        <form class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
          <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="nom_patient"
                            >Nom
                          </label>
                           <input style="color: black;"
                            id="n_patient"
                            name="n_patient"
                            readonly
                            value="{{$dossier->n_patient}}"
                            class="form-control validate"
                            data-large-mode="true"
                          />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="nom_patient"
                            >Prenom
                          </label>
                           <input style="color: black;"
                            id="p_patient"
                            name="p_patient"
                            type="text"
                            readonly
                            value="{{$dossier->p_patient}}"
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
                           <input style="color: black;"
                            id="tel_patient"
                            name="tel_patient"
                            readonly
                            value="{{ $dossier->tel_patient }}"
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
                           <input style="color: black;"
                            id="adr_patient"
                            name="adr_patient"
                            readonly
                            value="{{ $dossier->adr_patient }}"
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
                           <input style="color: black;"
                            id="sex_patient"
                            name="sex_patient"
                            type="text"
                            readonly
                            value="{{ $dossier->sex_patient }}"
                            class="form-control validate"
                            data-large-mode="true"
                          />
                      </div>
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                        <label
                          for="sit_mat"
                          >Situation Matrimoniale
                        </label>
                         <input style="color: black;"
                          id="sit_mat"
                          name="sit_mat"
                          type="text"
                          readonly
                            value="{{ $dossier->sit_mat }}"
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
                           <input style="color: black;"
                            id="ant_med"
                            name="ant_med"
                            type="text"
                            class="form-control validate"
                            readonly
                            value="{{ $dossier->ant_med }}"
                            data-large-mode="true"
                          />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="m_rec"
                            >Maladie récurrente
                          </label>
                           <input style="color: black;"
                            id="m_rec"
                            name="m_rec"
                            type="text"
                            readonly
                            value="{{ $dossier->m_rec }}"
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
                           <input style="color: black;"
                            id="grp_san"
                            name="grp_san"
                            type="text"
                            readonly
                            value="{{ $dossier->grp_san }}"
                            class="form-control validate"
                            data-large-mode="true"
                          />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="al_med"
                            >Alergie
                          </label>
                           <input style="color: black;"
                            id="al_med"
                            name="al_med"
                            type="text"
                            readonly
                            value="{{ $dossier->al_med }}"
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
                           <input style="color: black;"
                            id="vacc"
                            name="vacc"
                            type="text"
                            readonly
                            value="{{ $dossier->vacc }}"
                            class="form-control validate"
                            data-large-mode="true"
                          />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="ser"
                            >Serums déja recus
                          </label>
                           <input style="color: black;"
                            id="ser"
                            name="ser"
                            type="text"
                            readonly
                            value="{{ $dossier->ser }}"
                            class="form-control validate"
                            data-large-mode="true"
                          />
                        </div>
            </div>
            <div>

            <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="electro"
                            >Electrophorese
                          </label>
                           <input style="color: black;"
                            id="electro"
                            name="electro"
                            type="text"
                            readonly
                            value="{{ $dossier->electro }}"
                            class="form-control validate"
                            data-large-mode="true"
                          />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="poids"
                            >Poids
                          </label>
                           <input style="color: black;"
                            id="poids"
                            name="poids"
                            type="text"
                            readonly
                            value="{{ $dossier->poids }}"
                            class="form-control validate"
                            data-large-mode="true"
                          />
                        </div>
                          
            </div>
            

            
            <div class="row">
                <div class="form-group mb-3 col-xs-12 col-sm-6">
                    <label
                      for="oper"
                      >Derniere operation faite
                    </label>
                     <input style="color: black;"
                      id="oper"
                      name="oper"
                      type="text"
                      readonly
                      value="{{ $dossier->oper }}"
                      class="form-control validate"
                      data-large-mode="true"
                    />
                </div>
                <div class="form-group mb-3 col-xs-12 col-sm-6">
                  <label
                    for="date_rdv"
                    >Date prochain Rdv
                  </label>
                   <input style="color: black;"
                    id="date_rdv"
                    name="date_rdv"
                    readonly
                    value="{{ $dossier->tel_patient }}"
                    type="text"
                    class="form-control validate"
                    data-large-mode="true"
                  />
              </div>
       </div>
              </div>
              <div class="row">
                <div class="form-group mb-3 col-xs-12 col-sm-6">
                    <label
                      for="date_cons"
                      >Date derniere consultation
                    </label>
                     <input style="color: black;"
                      id="dat_cons"
                      name="date_cons"
                      type="text"
                      readonly
                    value="{{ $dossier->date_cons }}"
                      class="form-control validate"
                      data-large-mode="true"
                    />
                </div>
                <div class="form-group mb-3 col-xs-12 col-sm-6">
                  <label
                    for="n_person"
                    >Personne a prevenir </label
                  >
                   <input style="color: black;" style="color: black;"

                      id="n_danger"
                      name="n_danger"
                      type="text"
                      readonly
                    value="{{ $dossier->n_danger }}"
                      class="form-control validate"
                      data-large-mode="true"
                    />
                </div>
                <div class="row">
                  <div class="form-group mb-3 col-sm col-m">
                    <label
                      for="notes"
                      > Notes </label
                    >
                     <input style="color: black;" style="color: black;"
                    name="notes"
                      class="form-control validate"
                      rows="3"
                      readonly
                        value="{{ $dossier->notes }}"

                    ></input>
                  </div>
                </div>
              
              <div class="col-12">
                <a href="{{ route('home')}}"
                <button type="submit" class="btn btn-primary btn-block text-uppercase">Retourner a l'accueil</button> </a>
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
