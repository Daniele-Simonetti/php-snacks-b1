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