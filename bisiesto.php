<?php include("header.php")?> 
<script src="scripts/bisiesto.js"></script>
<div class="container">
    <h1>Años bisiestos</h1>
    <h2>Rango de años</h2>
    <input type="number" id="firstyear"></input>
    <input type="number" id="lastyear"></input>

    <button onclick="añobisiesto()">Ejecutar</button>
    <button onclick="totalbisiesto()">Total año bisiestos</button>
    
    <div id="years"></div>

    
    <div id="resultado"></div>
</div>
<?php include("footer.php")?> 
