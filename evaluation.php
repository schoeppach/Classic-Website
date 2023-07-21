<!doctype html>
<html>
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <title>Evaluation</title>

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- lokale Fonts -->
      <link rel="stylesheet" href="css/fonts.css">
      <!-- lokales CSS -->
      <link rel="stylesheet" href="css/evaluation.css">    
      <!-- Favicon -->
      <link rel="icon" type="image/png" href="favicon/favicon_rosa.png">     

</head>

<body>
<header>
  <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
        <div class="container">
        
          <!-- Logo -->
          <div class="div">
            <a><img src="images/robot_dark.png" alt="schöppach" width="50" height="42"></a>
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
      
</header>
<main>
  <div class="container pt-5">

      <p>Diese Seite zeigt ihr Formular mit den<wbr> zugeh&ouml;renden Feldern und Eintr&auml;gen an,<br>
      es wird zu Testzwecken als Formularauswertung genutzt.</p>

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

</main>
       <!-- BootstrapJavaScript -->
       <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
