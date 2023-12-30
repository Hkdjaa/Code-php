<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <a href="index.php">
        <h1 class="display-5 fw-bold">Accueil</h1> </a>
        <nav class="navbar navbar-expand">
            <ul>
            <div id="operation-container">
    <div>
        <button class="left-align" id="groupe1">Groupe 1</button>
        <div class="sub-operations" id="groupe1-operations">
            <a href="exo1.php">
         <button id="exo1">Exercice 1</button> </a>
         <a href="exo2.php">
            <button id="exo2">Exercice 2</button> </a>
         <a href="exo3.php">
            <button id="exo3">Exercice 3</button><a>
            <a href="exo4.php">
            <button id="exo4">Exercice 4</button><a>
            <a href="exo5.php">
            <button id="exo5">Exercice 5</button><a>
            <a href="exo6.php">
            <button id="exo6">Exercice 6</button><a>
            <a href="exo7.php">
            <button id="exo7">Exercice 7</button><a>
        </div>
    </div>
    <div>
        <button class="left-align" id="groupe2">Groupe 2</button>
        <div class="sub-operations" id="groupe2-operations">
         <a href="exo8.php">
         <button id="exo8">Exercice 8</button> </a>
         <a href="exo9.php">
            <button id="exo9">Exercice 9</button> </a>
         <a href="exo10.php">
            <button id="exo10">Exercice 10</button><a>
            <a href="exo11.php">
            <button id="exo11">Exercice 11</button><a>
            <a href="exo12.php">
            <button id="exo12">Exercice 12</button><a>
            <a href="exo13.php">
            <button id="exo13">Exercice 13</button><a>
            <a href="exo14.php">
            <button id="exo14">Exercice 14</button><a>
        </div>
    </div>
    <div>
        <button class="left-align" id="groupe3">Groupe 3</button>
        <div class="sub-operations" id="groupe3-operations">
        <a href="exo15.php">
         <button id="exo15">Exercice 15</button> </a>
         <a href="exo16.php">
            <button id="exo16">Exercice 16</button> </a>
         <a href="exo17.php">
            <button id="exo17">Exercice 17</button><a>
            <a href="exo18.php">
            <button id="exo18">Exercice 18</button><a>
        </div>
    </div>
        </div>
            </ul>
        </nav>
    </header>
    <main>
    <form action="" method="get">
        <br>
        <br>
        <label style="color: #d66060;"> Veuillez entrer une valeur </label>
<br>
<br>
        <div class="col-sm-6" >
        <input type="text" name="num" id="num" class="form-control" placeholder="Entrez un nombre entier">
</div>
<br>
<div class="col-sm-2">
        <input type="submit" value="Vérifier" class="form-control" id="calcul">
        <br>
        <br>
</div>
    </form>

    <span style="color: #d66060;">
        <?php
        if (isset($_GET['num'])) {
            $nombre = $_GET['num'];
            if (filter_var($nombre, FILTER_VALIDATE_INT) !== false) {
                if ($nombre % 3 === 0 && $nombre % 5 === 0) {
                    echo "Le nombre $nombre est un multiple de 3 et de 5.";
                } else {
                    echo "Le nombre $nombre n'est pas un multiple de 3 et de 5.";
                }
            } else {
                echo "Veuillez entrer un nombre entier valide.";
            }
        }
        ?>
    </span>

    </main>
</body>
<script type="text/javascript">
const groupe1Button = document.getElementById("groupe1");
const groupe1Operations = document.getElementById("groupe1-operations");
let formulaireVisible = false; 

groupe1Button.addEventListener("click", () => {
    if (!formulaireVisible) {
        groupe1Operations.style.display = "block";
        formulaireVisible = true;
    } else {
        groupe1Operations.style.display = "none";
        formulaireVisible = false;
    }
});

const groupe2Button = document.getElementById("groupe2");
const groupe2Operations = document.getElementById("groupe2-operations");
let formulaireVisible2 = false;

groupe2Button.addEventListener("click", () => {
    if (!formulaireVisible2) {
        groupe2Operations.style.display = "block";
        formulaireVisible2 = true;
    } else {
        groupe2Operations.style.display = "none";
        formulaireVisible2 = false;
    }
});

const groupe3Button = document.getElementById("groupe3");
const groupe3Operations = document.getElementById("groupe3-operations");
let formulaireVisible3 = false; 

groupe3Button.addEventListener("click", () => {
    if (!formulaireVisible3) {
        groupe3Operations.style.display = "block";
        formulaireVisible3 = true;
    } else {
        groupe3Operations.style.display = "none";
        formulaireVisible3 = false;
    }
});


    </script>
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>

</html>