<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nos Formations</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Style  -->
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/formation.css">
  <link rel="stylesheet" href="../css/formation2.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700|Open+Sans&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/839df3b8b1.js"></script>
</head>

<body>

  <?php include 'navbar_menu.php' ?>

  <div id="form">
    <ul class="nav nav-tabs d-none d-sm-flex" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
          aria-selected="true">Référent.e Digigtal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
          aria-selected="false">Développeure.euse Web</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
          aria-selected="false">Concepteur.trice Developpeur.se D'appication</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="formation-tab" data-toggle="tab" href="#formation4" role="tab"
          aria-controls="formation1" aria-selected="false">Technicien.ne Supperieur.e Systèpes et Réseaux</a>
      </li>
    </ul>
    
    <div class="dropdown d-sm-none">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        Dropdown
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
        <button class="dropdown-item" type="button">Action</button>
        <button class="dropdown-item" type="button">Another action</button>
        <button class="dropdown-item" type="button">Something else here</button>
      </div>
    </div>

    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <?php include 'formation/formation1.php' ?></div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <?php include 'formation/formation2.php' ?></div>
      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <?php include 'formation/formation3.php' ?></div>
      <div class="tab-pane fade" id="formation4" role="tabpanel" aria-labelledby="contact-tab">
        <?php include 'formation/formation4.php' ?></div>
    </div>
  </div>

  <button type="button" class="btn bouton">S'engager</button>

  <?php include 'footer.php' ?>








  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
  <script src="../js/navbar.js"></script>
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/839df3b8b1.js"></script>
</body>

</html>