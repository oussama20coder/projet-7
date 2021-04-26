<?php 
function Calculer($x, $y, $operation){
    $solution = null ;
    switch ($operation) {
        case '+':
            $solution = $x + $y ;
            break;
        case '+':
            $solution = $x - $y ;
            break;
        case '/':
            $solution = $x / $y ;
            break;
        default:
            break;
    }
    return $solution; 
}
//Initialisation
$x = null ;
$y = null ;
$operation = null ;
$solution = null ;
$afficheur = "" ;

 // Traitement
 if(isset($_POST['x'])) $x = $_POST['x'];
 if(isset($_POST['y'])) $y = $_POST['y'];
 if(isset($_POST['operation'])) $operation = $_POST['operation'];

// Ajouter la valeur du nombre au X ou Y
if(isset($_POST['Number'])){
    $Number = $_POST['Number'] ;
    if ($operation == null) {
        if ($x == null) $x = $_POST['Number'];
        else $x = floatval($x . $Number) ;
    }else {
        if ($y == null) $y = $_POST['Number'];
        else $y = floatval($y . $Number) ;
    }
}

if (isset($_POST['Egale'])) {
    $Egale = $_POST['Egale'] ;
    $solution = Calculer($x,$y,$operation) ;
}

//Affichage 
if ($solution != null) $afficheur = $solution ;
else {
    if ($x != null) $afficheur = $afficheur . $x ;
    if ($operation != null) $afficheur .= "" . $operation . "";
    if ($y != null) $afficheur .= $y ;
}

// C Button 
if(isset($_POST['init'])){
    $x = null ;
    $y = null ;
    $operation = null ;
    $solution = null ;
    $afficheur = "" ;
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
</head>
<body>
<form action="" method="POST">
<input type="hidden" name="x" value="<?php echo $x ?>"  ></input>
<input type="hidden" name="y" value="<?php echo $y ?>"  ></input>
<input type="hidden" name="operation" value="<?php echo $operation ?>" ></input>
<br><br>
<input type="text" name="afficheur" value="<?php echo $afficheur ?>"  ></input>
<br><br>
<input type="submit" name="Number" value="1"></input>
<input type="submit" name="Number" value="2"></input>
<input type="submit" name="Number" value="3"></input>
<input type="submit" name="init" value="C" ></input>
<br><br>

<input type="submit" name="Number" value="4"></input>
<input type="submit" name="Number" value="5"></input>
<input type="submit" name="Number" value="6"></input>
<input type="submit" name="operation" value="+"></input>
<br><br>

<input type="submit" name="Number" value="7"></input>
<input type="submit" name="Number" value="8"></input>
<input type="submit" name="Number" value="9"></input>
<input type="submit" name="operation" value="-"></input>
<br><br>

<input type="submit" name="Egale" value="Calculer" ></input>
<input type="submit" name="operation" value="/"></input>

</form>
    
</body>
</html>