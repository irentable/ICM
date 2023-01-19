<?php 
@$nom=$_POST["nom"];
@$nwhatsapp=$_POST["nwhatsapp"];
@$pays=$_POST["pays"];
@$ville=$_POST["ville"];
@$add=$_POST["add"];
@$valider=$_POST["valider"];
@$erreur="";
@$erreur2="";

if(isset($valider)) { /*verifier si le boutton exite*/
    if(empty($nom || $nwhatsapp || $pays || $ville || $add)) { $erreur2="Remplir tous les champs!";}
    if(empty($nom)){   $erreur="<li>Remplir la case nom!</li>"; /*verifi si la case est vide*/}
    else if(empty($nwhatsapp)){   $erreur.="<li>Remplir la case numero whatsapp!</li>";}
    else if(empty($pays)) {  $erreur.="<li>Remplir la case de votre pays de residence!</li>";}
    else if(empty($ville)) {  $erreur.="<li>Remplir la case de votre ville!</li>";}
    else if(empty($add)) {  $erreur.="<li>Remplir votre adresse! </li>";}
    else {
        header ("Location: Formulairevalide.php");
    }
} 

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8*" />
        <link rel="stylesheet" href="css/csshfor.css" type="text/css"/>
        <title>Formulaire_ICM</title>
    </head>
    <body>
        <div id="image">
            <img class="imageheader" src="images/header.png"/>
        </div>
  
        <div >
            <p class="titre1">
                    <H1>Investissement Cash Money</H>
            </p>          
            <?php if(!empty($erreur2)) echo $erreur2 ; 
                ?>
        </div>

        <div>
                <?php if(!empty($erreur)) echo $erreur ; 
                ?>         
        </div>

        <div >
            <p>
            <br> 
                <a href="Home.php">   
                    <button type="button">ACCUEIL</button>
                </a>
                <a href="Home.php" class="ri">   
                    <button type="button">ACCUEIL</button>
                </a>
            </p>           
        </div>
        <form name="fo" METHOD="POST" action="" >
        <div class="forpre">
            <p>
                    <H2>FORMULAIRE D'ENREGISTREMENT</H2>
            </p>
            <p>
                 Nom et prenom : <P><input type="text" name="nom" placeholder="Entrez votre nom" value="<?php echo $nom?>"/></p>
            </p>
            <p>
                 Numéro WhatsApp  : <P><input type="text" name="nwhatsapp" placeholder="Entrez votre numero WhatsApp" value="<?php echo $nwhatsapp?>"/></p>
            </p>
            <p>
                 Pays : <P><input type="text" name="pays" placeholder="Entrez votre pays" value="<?php echo $pays?>"/></p>
            </p>
            <p>
                 Ville : <P><input type="text" name="ville" placeholder="Entrez votre ville" value="<?php echo $ville?>" /> </p>
            </p>
            <p>
                 Adresse : <P><input type="text" name="add" placeholder="Entrez votre adresse" value="<?php echo $add?>"/></p>
            </p>
            <p>
                 Sexe : 
                        <input type="radio" name="sexe" checked >Homme</input>
                        <input type="radio" name="sexe">Femme</input><br>
            </p>
            <p>
                 Montant à investir : 
                        <select name="montant" id="mont">
                            <option value="10k">10000 XAF pour 100000 XAF</option>
                            <option value="20k">20000 XAF pour 200000 XAF</option>
                            <option value="30k">30000 XAF pour 200000 XAF</option>
                            <option value="40k">40000 XAF pour 400000 XAF</option>
                            <option value="50k">50000 XAF pour 500000 XAF</option>
                            <option value="60k">60000 XAF pour 600000 XAF</option>
                            <option value="70k">70000 XAF pour 700000 XAF</option>
                            <option value="80k">80000 XAF pour 800000 XAF</option>
                            <option value="90k">90000 XAF pour 900000 XAF</option>
                            <option value="100k">100000 XAF pour 1000000 XAF</option>
                        </select>
            </p>
            <p>
                 Moyen de paiement : 
                        <select name="moyen" id="moy">
                            <option value="btc">BTC (USDT)</option>
                            <option value="om">ORANGE MONEY</option>
                            <option value="momo">MOBILE MONEY</option>
                            <option value="cv">CARTE VISA </option>
                            <option value="eu">EXPRESS UNION</option>
                            <option value="wu">WESTERN UNION</option>
                        </select>
            </p>
            <p>
                <P><input type="submit" value="Valider" name="valider" class="btn"/></p>
                
            </p>
            <p>
                 Fin d'inscription. Assurez vous que vous avez entré les informations 
                 correctes car la modification n'est plus valide après l'enregistrement 
            </p>
        </div>
        </form>   
        <div class="footer" >
        <a href="https://instagram.com/investcashmoney?igshid=YmMyMTA2M2Y="><img src="images/icons/instagram.png" class="tiktok"></a>   
                <a href="https://www.facebook.com/profile.php?
                    id=100089592312134&mibextid=LQQJ4d"><img src="images/icons/facebook.png" class="tiktok"></a>  
                <a href="https://www.tiktok.com/@irenttll4y2?_t=8ZADlOm0IZ4&_r=1"><img src="images/icons/tiktok.png" class="tiktok"></a>  
                <a href="#"><img src="images/icons/telegram.png" class="tiktok"></a>   
            <p class="cond">Ce contenue n'est ni rédigé, ni cautionné par Google.
                <br>
                    <a href="#" class="lien">
                        <u> 
                            un cas d'utilisation abusive
                        </u>
                    </a>
                    -
                    <a href="#" class="lien">
                        <u> 
                            Condition d'utilisation
                        </u>
                    </a>
                    <br>
                    <a href="#" class="lien" class="tk1">
                        <u> 
                            Règles et confidentialité
                        </u>
                    </a>
                  
            </p>  
    </body>
</html>