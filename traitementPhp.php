<?php
 //  connexion DB
        // echo $_SERVER['REMOTE_ADDR'];
        if ($_SERVER['REMOTE_ADDR']=="127.0.0.1" || $_SERVER['REMOTE_ADDR']=="::1") {
            //  En local sur wamp
            try
                {
                    $bdd = new PDO("mysql:host=localhost;dbname=php_soutien", "root", "");
                    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }
                catch(Exception $e) {die($erreur_sql='Erreur connect bd: '.$e->getMessage());}
        }
        else {
            //  Chez l(hebergeur)
            try
                {
                    $bdd = new PDO("mysql:host=[sql hote];dbname=[nom de la base]", "[utilisateur]", "[mot de passe]");
                    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }
                catch(Exception $e) {die($erreur_sql='Erreur connect bd: '.$e->getMessage());}
        }

//echo 'coucou';
    print_r($_POST); 
    //result : Array
//(
   // [red] => 235
   // [green] => 90
   // [blue] => 90
   // [alpha] => 1
//)



//variable $newColor
    $newColor = $_POST['red']. ','.$_POST['green']. ','.$_POST['blue']. ','.$_POST['alpha']; 
    echo 'newColor' . $newColor; //result example: newColor235


//insert into table SET
try {
    $sql="INSERT INTO colors SET colors=?;";
    $stmt = $bdd->prepare($sql);
    $stmt->execute(array($newColor));
    } catch (Exception $e) {print "Erreur ! " . $e->getMessage() . "<br/>";}

?>