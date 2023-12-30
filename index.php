<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta   name="viewport" 
            content="width=device-width, initial-scale=1.0">
    <link   href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
            crossorigin="anonymous">
    <link   rel="stylesheet" 
            href="css/main.css">
    <title>Hírességek</title>
</head>
<body>
    <?php
        require_once "includes/celebrities.php";
        $database = new celebrity();
        $celebrities = $database->getAll();
    ?>
  
<div class="container">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Hírességek</a>
    <button class="navbar-toggler shadow-none border-0" 
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasDarkNavbar"
            aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

      <div class="sidebar offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header border-bottom">
        <h4 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Hírességek</h4>
        <button type="button" 
                class="btn-close btn-close-white shadow-none" 
                data-bs-dismiss="offcanvas" 
                aria-label="Close">
        </button>
      </div>
      <div class="offcanvas-body text-center d-felx flex-column p-1">
        <ul class="navbar-nav justify-content-end fs-5 flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Listázás</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="formHandler.php">Felvétel</a>
          </li>
        </ul>
      </div>
      </div>
  </div>
</nav>


<div class="line"></div>
<div class="container">
  <div class="table-responsive">
  <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Név</th>
                <th scope="col">Életkor</th>
                <th scope="col">Foglalkozás</th>
                <th scope="col">Nemzetiség</th>
                <th scope="col">Aktivitás kezdete</th>
                <th scope="col">Jelenleg aktív-e</th>
            </tr>
        </thead>
        <tbody>
              <?php foreach ($celebrities as $celebrity): ?>
                        <tr>
                                <td><?php echo $celebrity['id'] ?></td>
                          <td><?php echo $celebrity['name'] ?></td>
                          <td><?php echo $celebrity['age'] ?></td>
                          <td><?php echo $celebrity['profession'] ?></td>
                          <td><?php echo $celebrity['nationality'] ?></td>
                          <td><?php echo $celebrity['activeFrom'] ?></td>
                          <td><?php echo $celebrity['activeNow'] ? "Aktív" : "Nem"?></td>
                      </tr>
              <?php endforeach; ?>
        </tbody>
    </table>        
  </div>
</div>
</div>   
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
            crossorigin="anonymous">
  </script>
</body>
</html>