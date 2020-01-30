<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Test Drive - eMobility</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/landing-page.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Test drive eMobility</a>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalLogin">Accedi</button>
    </div>
  </nav>

  <!-- Login -->
  <div class="modal fade" id="modalLogin">
      <div class="modal-dialog">
          <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                  <h4 class="modal-title">Accedi alla tua area personale</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                  <div class="row">
                      <div class="col-sm-2 align-content-center"><label for="txtUser" class="mx-auto">Username</label></div>
                      <div class="col-sm-10 align-content-center"><input type="text" id="txtUser"style="width: 100%" /></div>
                  </div>
                  <div class="row">
                      <div class="col-sm-2 align-content-center"><label for="txtPwd">Password</label></div>
                      <div class="col-sm-10 align-content-center"><input type="password" id="txtPwd" style="width: 100%" /></div>
                  </div>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                  <div class="row">
                      <div class="col-sm-8"><p id="pError" style="float:left;display:inline">Username e/o password errati</p></div>
                      <div class="col-sm-2"><button type="button" class="btn btn-primary" id="btnLogin">Login</button></div>
                      <div class="col-sm-2"><button type="button" class="btn btn-danger" data-dismiss="modal">Close</button></div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- Masthead -->
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-12 mx-auto">
          <h1 class="mb-5">Test drive - eMobility</h1>
        </div>
          <div class="col-xl-12 mx-auto">
              <h1 class="mb-5">Prenota la tua prova su un'auto elettrica</h1>
          </div>
      </div>
    </div>
  </header>

  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
          <div class="col-xl-12 mx-auto">
              <h1 class="mb-5">Seleziona l'auto da provare</h1>
          </div>
      </div>
        <div class="row">
            <div class="col-xl-4 mx-auto">
                <form class="form-inline">
                    <div class="form-group">
                        <label for="selAuto" class="mr-2">Selezionare un'auto </label>
                        <select class="form-control" id="selAuto">
                        </select>
                    </div>
                </form>
            </div>
            <div class="col-xl-8 mx-auto">
                <div class="card" style="width:200px; margin:0px auto;">
                    <img class="card-img-top" id="imgAuto">
                    <div class="card-body">
                        <h5 class="card-text" id="marca"></h5>
                        <h6 class="card-title" id="modello"></h6>
                        <h6 class="card-text" id="potenza"></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

  <!-- Image Showcases -->
  <section class="showcase" id="secPrenotazioni">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-lg-12 my-auto showcase-text">
            <div id="tabPrenotazioni">
                <table class="table">
                    <thead>
                    <tr align="center">
                        <th width="300">N. test drive</th>
                        <th width="300">Data</th>
                        <th width="300">Turno 1</th>
                        <th width="300">Turno 2</th>
                        <th width="300">Turno 3</th>
                    </tr>
                    </thead>
                    <tbody id="tBodyPrenotazioni">
                    </tbody>
                </table>
            </div>
        </div>
      </div>
        <div class="row no-gutters">
            <div class="col-lg-6 my-auto showcase-text mx-auto">
                <button type="button" class="btn btn-primary" id="btnPrenota" style="width: 500px">Prenota sul form</button>
            </div>
        </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="testimonials text-center bg-light" id="moduloPren">
    <div class="container">
        <div id="formPren" class="container-fluid">
            <form>
                <div class="form-group form-inline">
                    <label for="data" class="p-1 m-1">Data: </label><input type="date" class="form-control" id="data" />
                </div>
                <div class="form-group form-inline">
                    <label for="radioM" class="p-1 m-1 mr-3">Turno: </label>T1<input type="radio" name="radioT" value="t1" class="form-control p-1 m-1 mr-5">
                    T2<input type="radio" name="radioT" value="t2" class="form-control p-1 m-1 mr-5">
                    T3<input type="radio" name="radioT" value="t3" class="form-control p-1 m-1 mr-5">
                </div>
                <div class="form-group form-inline">
                    <button type="button" class="btn btn-primary p-1 m-1" id="btnSalva">Conferma prenotazione test drive</button>
                </div>
            </form>
        </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#">About</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Contact</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2019. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/index.js"></script>
  <script src="js/libreria.js"></script>
</body>

</html>
