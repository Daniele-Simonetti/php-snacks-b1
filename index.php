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

    <div class="row justify-content-center">

      <div class="card col-3 text-center" v-for="car in carsAvailable">
        
        <?php include __DIR__ . '/partials/card.php' ?>
    
      </div>
    </div>
  </div>
  </div>
<script src="js/script.js"></script>
</body>
</html>