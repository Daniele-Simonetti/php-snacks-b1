<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
  <title>NoleggioMacchine</title>
</head>
<body>
  <div id="app">
  <div class="container">
    <header>
      <div class="container">
        <div class="row">
          <div class="col">
            <form action="index.php">
              <select name="brand" id="brand">
                <option value="all">all</option>
                <option value="Renault">Renault</option>
                <option value="McLaren">McLaren</option>
                <option value="Tesla">Tesla</option>
                <option value="Audi">Audi</option>
                <option value="Ford">Ford</option>
                <option value="Volkswagen">Volkswagen</option>
                <option value="Fiat">Fiat</option>
                <option value="Rolls-Royce">Royce</option>
              </select>
              <button>cerca</button>
            </form>
          </div>
        </div>
      </div>
    </header>
    <main>
      <div class="row justify-content-center">
        <div class="card col-3 text-center" v-for="car in carsAvailable">
          <?php include __DIR__ . '/partials/card.php' ?>
        </div>
      </div>
    </main>
  </div>
  </div>
<script src="js/script.js"></script>
</body>
</html>