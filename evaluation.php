<!DOCTYPE html>
<html lang="de">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Evaluation</title>

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- lokale Fonts -->
      <link rel="stylesheet" href="css/fonts.css">
      <!-- lokales CSS -->
      <link rel="stylesheet" href="css/evaluation.css">   
      <!-- Favicon -->
      <meta name="schoeppach" content="&nbsp;">
      <link rel="icon" type="image/png" href="favicon/favicon_schoeppach.png">
      <link rel="apple-touch-icon-precomposed" sizes="180x180" href="favicon/apple-touch-icon-180x180.png">

</head>
<body class="d-flex flex-column min-vh-100">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
        <div class="container">
        
          <!-- Logo -->
          <div class="div">
            <a><img src="images/schoeppach.svg" alt="schöppach" width="52" height="50"></a>
            <a class="navbar-brand" href="index.html">Home</a>
          </div>
          <!-- Menu Button -->

          <!-- <a><img src="images/menu_dark.png" alt="menu" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" width="60" height="40"></a>               -->

          <div class="collapse.show navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="comingsoon.html">Newsletter</a>
              </li>

              <li class="nav-item">
              <a class="nav-link" aria-current="page" href="imprint.html">Impressum</a>
              </li>

              <li class="nav-item">
              <a class="nav-link" aria-current="page" href="policy.html">Datenschutz</a>
              </li>
        
            </ul>                
          </div>

        </div>
      </nav>

    <!-- INHALT FORMULAR -->

    <div class="formular">

    <div class="text-php">

          <p>Diese Seite zeigt ihr Formular mit den<wbr> zugeh&ouml;renden Feldern und Eintr&auml;gen an,<br>
          es wird zu Testzwecken als Formularauswertung genutzt,<br> die eigentliche Funktion ist noch nicht implementiert.</p>

            <div class="text">
              <ol>

                <?php
                      if (isset($_POST["Newsletter"]))                  
                      echo "<font color='black'>Newsletter: </font>" . $_POST["Newsletter"];            
                ?>

                  <br>
                  <br>

                <?php
                      if (isset($_POST["Alias"]))
                      echo "<font color='black'>Alias Name: </font>" . $_POST["Alias"];
                ?>

                  <br>
                  <br>

                <?php
                      if(isset($_POST["Bewertung"])){
                        if(!empty($_POST["Bewertung"])) {
                          foreach($_POST["Bewertung"] as $selected){
                            echo "<font color='black'>Bewertung: </font>" . $selected;
                          }          
                        } 
                      }
                ?>
              
              </ol>
            </div>

    </div>

    </div>
    <!-- FOOTER -->
     
		<footer class="bg-black text-center text-lg-start mt-auto">
        <div class="container py-3">
          <div class="row text-warning justify-content-center align-item-start" >
            
            <div class="text-footer col-md-8 text-center mt-3">
              <p>
                created by &copy; schoeppach
                <span id="jahr"><time datetime="2024" class="text-warning">2022-2025</time></span>
                <a href="imprint.html" class="text-light"> &nbsp; Impressum &nbsp; </a> 
                &#124; <a href="policy.html" class="text-light"> &nbsp; Datenschutz &nbsp; </a>
              </p>
            </div>
            
          </div>
        </div>
    </footer>

    <!-- BootstrapJavaScript -->
    <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>
