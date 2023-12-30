<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devoir php</title>
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
        <br>
        <br>
    <form>
<h2 class="display-5 fw-bold"> Série N° 1 : PHP-MySQL </h2>
<h4> Exercice 1 :
</h4> <p>
Parmi les variables suivantes, lesquelles ont un nom valide : mavar, $mavar, 
$var5, $_mavar, $_5var, $__élément1, $hotel4* ? </p>
<h4>
Exercice 2 : </h4>
<p>
Rédigez une expression conditionnelle pour tester si un nombre est à la fois un 
multiplede 3 et de 5. 
</p> <h4>
Exercice 3: </h4>
<p>
Choisissez un nombre de trois chiffres. Effectuez ensuite des tirages aléatoires, et 
comptez le nombre de tirages nécessaire pour obtenir le nombre initial. Arrêtez les tirages, et 
affichez le nombre de coups réalisés. Réalisez ce script d’abord avec l’instruction while puis 
avec l’instruction for. </p>
<h4>
Exercice 4: 
</h4> <p>
Ecrire un programme qui permet de calculer le PPCM de deux entiers saisis au 
clavier. </p>
<h4>
Exercice 5 : 
</h4> <p>
Ecrire un programme qui calcule le diamètre, le périmètre et la surface d’un 
cercle dont le rayon est saisi au clavier. </p>
<h4> Exercice 6 : </h4> <p>
    Ecrire un programme qui affiche l’ensemble des diviseurs d’un nombre saisi au 
clavier. </p>
<h4>Exercice 7 : </h4>
  <p>
    Ecrire un programme qui teste si un nombre saisi au clavier est parfait. 
NB : Un nombre égal à la somme de ses diviseurs propres est parfait. </p>
<h4>Exercice 8 : </h4>
 <p>
    Écrivez un tableau multidimensionnel associatif dont les clés sont des noms de 
personne et les valeurs des tableaux indicés contenant le prénom, la ville de résidence et l’âge 
de la personne. </p>
<h4> Exercice 9 : </h4>
 <p>
    Écrivez un tableau multidimensionnel associatif dont les clés sont des noms de 
personne et les valeurs des tableaux associatifs dont les clés sont le prénom, la ville de 
résidence et l’âge de la personne avec une série de valeurs associées. </p>
<h4> Exercice 10 : </h4>
  <p>
  Utilisez une boucle foreach pour lire les tableaux des exercices 8 et 9. </p>
<h4>Exercice 11 : </h4>
  <p>
  Utilisez une boucle while pour lire les tableaux des exercices 8 et 9. 
</p>
<h4>
Exercice 12 : 
</h4>
<p>
Créez un formulaire comprenant un groupe de champs ayant pour titre ~Adresse 
client~. Le groupe doit permettre la saisie du nom, du prénom, de l’adresse, de la ville et du 
code postal. Les données sont ensuite traitées par un fichier PHP séparé récupérant les 
données et les affichant dans un tableau XHTML. </p>
<h4>
Exercice 13 : 
</h4>
<p>
Créez un formulaire demandant la saisie d’un prix HT et d’un taux de TVA. Le 
script affiche le montant de la TVA et le prix TTC dans deux zones de texte créées 
dynamiquement. Le formulaire maintient les données saisies. </p>
<h4> Exercice 14 : </h4>
  <p>  Dans la perspective de création d’un site d’agence immobilière, créez un 
formulaire comprenant trois boutons Submit nommés Vendre, Acheter et Louer. En fonction 
du choix effectué par le visiteur, redirigez-le vers une page spécialisée dont le contenu 
réponde au critère choisi. </p>
<h4>Exercice 15 : </h4>
 <p>   Écrivez une fonction dont le paramètre passé par référence est un tableau de 
chaînes de caractères et qui transforme chacun des éléments du tableau de manière que le 
premier caractère soit en majuscule et les autres en minuscules, quelle que soit la casse initiale 
des éléments, même si elle est mixte. </p>
<h4> Exercice 16 : </h4>
 <p>   À partir de la fonction sinus de PHP, écrivez une fonction qui donne le sinus 
d’un angle donné en radian, en degré ou en grade. Les paramètres sont la mesure de l’angle, et 
l’unité est symbolisée par une lettre. Le deuxième paramètre doit avoir une valeur par défaut 
correspondant aux radians. <p>
<h4> Exercice 17 : </h4>
  <p>  Écrivez une fonction de lecture de tableaux multidimensionnels. L~affichage~ se 
fait sous forme de tableau XHTML dont les titres sont les clés des tableaux. </p>
<h4> Exercice 18 : </h4> 
<p> Ecrire un programme qui permet d’afficher ce résultat. 
<br>
1 
<br>
22
<br>
333
<br>
4444
<br> 
55555
<br> 
666666
<br> 
7777777 
<br>
88888888 
<br>
999999999 
<br>
10101010101010101010
</p>
    </form>
    </main>
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
</body>
</html>