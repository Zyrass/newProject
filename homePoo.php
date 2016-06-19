<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Alain Guillon alias Zyrass">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NewProject</title>
    <!-- =================================================================================================== -->
    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <!-- =================================================================================================== -->
    <!--                                      CSS Bootstrap                                                  -->
    <!-- =================================================================================================== -->
    <link rel="stylesheet" type="text/css" href="style/bootstrap/css/bootstrap.min.css" media="all" />
    <!-- =================================================================================================== -->
    <!--                                       FONT AWESOME                                                  -->
    <!-- =================================================================================================== -->
    <link rel="stylesheet" type="text/css" href="style/font-awesome/css/font-awesome.min.css" media="all" />
    <!-- =================================================================================================== -->
    <!--                                     STYLE CSS PERSO                                                 -->
    <!-- =================================================================================================== -->
    <link rel="stylesheet" type="text/css" href="style/css-perso/stylePerso.css" media="all" />
    <!-- =================================================================================================== -->
    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <!-- =================================================================================================== -->
    <!--                                 COMMENTAIRE CONDITIONEL                                             -->
    <!-- =================================================================================================== -->
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    <!-- =================================================================================================== -->
    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <!-- =================================================================================================== -->
  </head>
  <body class="bg-danger">
    <main>
      <!-- =================================================================================================== -->
      <!--                                            HEADER                                                   -->
      <!-- =================================================================================================== -->
      <header>
        <div class="container-fluid"> <!-- start container-fluid dans le header -->
          <div class="row"> <!-- start de la row du container-fluid dans le header -->
            <div class="col-xs-12"> <!-- start du col-xs-12 de la row issu du container-fluid dans le header -->
                <hgroup class="well">
                  <h1 class="text-capitalize text-info text-center">NewProject !!</h1>
                  <h2 class="text-center"><small>Les liens qui suivront permettent de tester plusieurs méthodes en fonction d'un contexte bien précis. Tous seras expliqués</small></h2>
                </hgroup>
            </div> <!-- end col-xs-12 du container-fluid dans le header -->
          </div> <!-- end de la row du container-fluid dans le header -->
        </div> <!-- end du container-fluid dans le header -->
      </header>
      <!-- =================================================================================================== -->
      <!--                                           SECTION                                                   -->
      <!-- =================================================================================================== -->
      <section>
        <div class="container"> <!-- start container dans la section -->
          <div class="row"> <!-- start de la row du container dans la section -->
            <div class="col-xs-12 well"> <!-- start du col-xs-12 de la row issu du container dans la section -->
              <legend>Présentation</legend>
              <blockquote>
                Je vous propose ici 6 articles traitant sur des méthodes établie en POO !
              </blockquote>
            </div> <!-- end col-xs-12 du container dans la section -->
          </div> <!-- end de la row du container dans la section -->
          <div class="row row2">
            <div class="col-xs-12 col-lg-offset-2 col-lg-8">
              <article class="well">
                <legend class="text-right text-warning">appMovie</legend>
                  <p>Appli sur les films<br />
                    <a href='src/class/movies/ClassMovie.php'>Clique ici...</a>
                  </p>
                  <footer class="pull-right">src/class/movies/<strong><span class="text-success">ClassMovie.php</span></strong></footer><br />
              </article>
            </div>
            <!-- =================================================================================================== -->
            <div class="col-xs-12">
              <article class="well">
                <legend class="text-right text-warning">appSupportMovie</legend>
                  <p>Appli sur les le supports des films<br />
                    <a href='src/class/movies/supports/ClassBlueRay.php'>BlueRay</a> -
                    <a href='src/class/movies/supports/ClassDvd.php'>Dvd</a> -
                    <a href='src/class/movies/supports/ClassDvdRom.php'>DvdRom</a>
                  </p>
                  <footer>
                    src/class/movies/supports/<br />
                      { <strong><span class="text-success">ClassBlueRay.php</span></strong> |
                      <strong><span class="text-success">ClassDvd.php</span></strong> |
                      <strong><span class="text-success">ClassDvdRom.php</span></strong> }
                  </footer><br />
              </article>
            </div>
            <!-- =================================================================================================== -->
            <div class="col-xs-12 col-lg-offset-2 col-lg-8">
              <article class="well">
                <legend class="text-right text-warning">appPersonnelActors</legend>
                  <p>Appli sur les acteurs<br />
                    <a href='src/class/personnels/actors/ClassActors.php'>Clique ici...</a>
                  </p>
                  <footer class="pull-right">src/class/personnels/actors/<strong><span class="text-success">ClassActors.php</span></strong></footer><br />
              </article>
            </div>
            <!-- =================================================================================================== -->
            <div class="col-xs-12 col-lg-6">
              <article class="well">
                <legend class="text-right text-warning">appPersonnelActorsFilm</legend>
                  <p>Appli sur les acteurs qui jouent dans des films<br />
                    <a href='src/class/personnels/actors/roles/ClassActorsFilm.php'>Clique ici...</a>
                  </p>
                  <footer class="pull-right">src/class/personnels/actors/roles/<strong><span class="text-success">ClassActorsFilm.php</span></strong></footer><br />
              </article>
            </div>
            <!-- =================================================================================================== -->
            <div class="col-xs-12 col-lg-6">
              <article class="well">
                <legend class="text-right text-warning">appPersonnelActorsSerie</legend>
                  <p>Appli sur les acteurs qui jouent dans des séries<br />
                    <a href='src/class/personnels/actors/roles/ClassActorsSerie.php'>Clique ici...</a>
                  </p>
                  <footer class="pull-right">src/class/personnels/actors/roles/<strong><span class="text-success">ClassActorsSerie.php</span></strong></footer><br />
              </article>
            </div>
            <!-- =================================================================================================== -->
            <div class="col-xs-12 col-lg-offset-2 col-lg-8">
              <article class="well">
                <legend class="text-right text-warning">appPersonnelDirector</legend>
                  <p>Appli sur les Réalisateurs
                    <a href='src/class/personnels/directors/ClassDirectors.php'>Clique ici...</a>
                  </p>
                  <footer class="pull-right">src/class/personnels/directors/<strong><span class="text-success">ClassDirectors.php</span></strong></footer><br />
              </article>
            </div>
            <!-- =================================================================================================== -->
        </div> <!-- end du container dans la section -->
      </section>
    </main>
    <!-- =================================================================================================== -->
    <!--                                            FOOTER                                                   -->
    <!-- =================================================================================================== -->
    <footer>
      <div class="container-fluid"> <!-- start container-fluid dans le footer -->
        <div class="row"> <!-- start de la row du container-fluid dans le footer -->
          <div class="col-xs-12"> <!-- start du col-xs-12 de la row issu du container-fluid dans le footer -->
            <div class="well">
              <h4 class="text-center text-capitalize text-info">Quelques questions pour éveiller notre curiosité !</h4>
              <p class="text-center">
                <a href="utileCuriosite.php">Cliquez vite sur moi afin d'accéder à la page traitant sur des questions intéréssantes </a>
              </p>
            </div>
          </div> <!-- end col-xs-12 de la row issu du container-fluid dans le footer -->
        </div> <!-- end de la row du container-fluid dans le footer -->
      </div> <!-- end du container-fluid dans le footer -->
    </footer>
    <!-- =================================================================================================== -->
    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <!-- =================================================================================================== -->
    <!--                                     JQUERY POUR BOOTSTRAP                                           -->
    <!-- =================================================================================================== -->
    <script src="style/jquery/jquery-2.2.4.min.js"></script>
    <!-- =================================================================================================== -->
    <!--                                        SCRIPT BOOTSTRAP                                             -->
    <!-- =================================================================================================== -->
    <script src="style/bootstrap/js/bootstrap.min.js"></script>
    <!-- =================================================================================================== -->
    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <!-- =================================================================================================== -->
  </body>
</html>
