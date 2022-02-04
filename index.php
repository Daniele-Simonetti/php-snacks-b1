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
        <div class="cardHeader">
          <p>{{car.id}}</p>
          <h1 class="fs-5">{{car.model}}</h1>
          <img :src="car.img" :alt="car.model">
          <h2 class="fs-6">{{car.brand}}</h2>
        </div>
        <div class="text-start card-list">
          <ul>
            <li>Motor: {{car.motor}}</li>
            <li>Asset: {{car.asset}}</li>
            <li>Places: {{car.places}}</li>
            <li>Doors: {{car.doors}}</li>
            <li>Displacement: {{car.displacement}}</li>
            <li>Color: {{car.color}}</li>
            <li>Year of Registration: {{car.yearOfregistration}}</li>
            <li>Insurance: {{car.insurance}}</li>
          </ul>
        </div>
        <div class="cardFooter">
          <h3 class="fs-5"> Price X Day: {{car.priceXday}}€</h3>
        </div>
      </div>
    </div>
  </div>
  </div>
<script src="js/script.js"></script>
</body>
</html>