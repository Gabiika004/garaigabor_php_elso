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
    <title>Felvétel</title>
</head>
<body>

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

    <div class="container">
    <h2>Új híresség hozzáadása</h2>
    <form class="row g-3" action="formHandler.php" method="post">

        <div class="col-md-6">
            <label for="name" class="form-label">Név</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="col-md-6">
            <label for="age" class="form-label">Életkor</label>
            <input type="number" class="form-control" id="age" name="age">
        </div>
        <div class="col-md-4">
            <label for="profession" class="form-label">Foglalkozás</label>
            <input type="text" class="form-control" id="profession" name="profession">
        </div>
        <div class="col-md-4">
            <label for="nationality" class="form-label">Nemzetiség</label>
            <input type="text" class="form-control" id="nationality" name="nationality">
        </div>
        <div class="col-md-4">
            <label for="activeFrom" class="form-label">Aktivitás kezdete</label>
            <input type="date" class="form-control" id="activeFrom" name="activeFrom">
        </div>
        <div class="col-md-12">
            <label for="activeNow" class="form-labe">Jelenleg aktív-e</label>
            <input type="checkbox" class="form-check-input" id="activeNow" name="activeNow">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-success">Mentés</button>
        </div>
    </form>
    </div>


    <?php
require_once "includes/celebrities.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        if (empty($_POST["name"]) || empty($_POST["age"]) || empty($_POST["profession"]) || empty($_POST["nationality"]) || empty($_POST["activeFrom"])) {
            throw new Exception("Minden mező kitöltése kötelező!");
        }

        $name = $_POST["name"];
        $age = $_POST["age"];
        $profession = $_POST["profession"];
        $nationality = $_POST["nationality"];
        $activeFrom = $_POST["activeFrom"];
        $activeNow = isset($_POST["activeNow"]) ? 1 : 0;

        $celebrity = new celebrity();
        $success = $celebrity->addCelebrity($name, $age, $profession, $nationality, $activeFrom, $activeNow);

        if ($success) {
            ?> 
                <div class="col-12 text-center">
                    <h2>Híresség hozzáadva!</h2>
                </div> <?php
        } else {
            throw new Exception("Hiba történt a híresség hozzáadása során.");
        }
    } catch (Exception $e) {
        $message = $e->getMessage();
        ?>  
        <div class="col-12 text-center">
            <h2>Hiba: <?php echo $message ?> </h2> 
        </div> <?php
    }
}
?>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
            crossorigin="anonymous">
  </script>
</body>
</html>