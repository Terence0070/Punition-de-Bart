<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Punition de Bart</title>
</head>
<body>
<h1>La punition de Bart</h1>

<?php
if (isset($_POST["envoyer"])) {
    $_SESSION['texte'] = $_POST["texte"];
    $_SESSION['combien'] = $_POST["combien"];

    // echo $_COOKIE["Cookietexte"];
    // echo $_COOKIE["Cookiecombien"]; MONTRER LES COOKIES en commentaire
}
?>

<form method="POST" class="form">
    <div class="champ_form">
        <label for="ligne">Quelle est la ligne à écrire ?</label>
        <input type="text" value='<?php echo isset($_SESSION["texte"]) ? $_SESSION["texte"] : ""; ?>' placeholder="Entrez un texte" name="texte" required>
    </div>
    <div class="champ_form">
        <label for="combien">Combien de lignes ?</label>
        <select name="combien">
            <option <?php if (isset($_SESSION['combien']) && $_SESSION['combien'] == "10") { echo ' selected'; } ?> value="10">10</option>
            <option <?php if (isset($_SESSION['combien']) && $_SESSION['combien'] == "25") { echo ' selected'; } ?> value="25">25</option>
            <option <?php if (isset($_SESSION['combien']) && $_SESSION['combien'] == "50") { echo ' selected'; } ?> value="50">50</option>
            <option <?php if (isset($_SESSION['combien']) && $_SESSION['combien'] == "100") { echo ' selected'; } ?> value="100">100</option>
            <option <?php if (isset($_SESSION['combien']) && $_SESSION['combien'] == "200") { echo ' selected'; } ?> value="200">200</option>
            <option <?php if (isset($_SESSION['combien']) && $_SESSION['combien'] == "500") { echo ' selected'; } ?> value="500">500</option>
        </select>
    </div>
    <div class="champ_form">
        <input class="champ_form_envoyer" type="submit" name="envoyer">
    </div>
</form>

<div class="bordure_tableau">
    <div class="tableau">
        <p class="lignes">
            <?php
                if (isset($_POST["envoyer"])) {
                    $texte = htmlspecialchars($_POST["texte"]);
                    $combien = htmlspecialchars($_POST["combien"]);
                        for ($i = 0; $i < $combien; $i++) {
                            echo "$texte <br>";
                            }
                    $_SESSION["texte"] = $texte;
                    // var_dump($_SESSION['texte'], $texte); Quelques tests
                    // die();
                    $_SESSION["combien"] = $combien;
                    setcookie("Cookietexte", $texte, time()+3600);  /* expire dans 1 heure */
                    setcookie("Cookiecombien", $combien, time()+3600);  /* expire dans 1 heure */
                    
                }
            ?>
        </p>
    </div>
</div>

<style>
    h1 {
        text-align:center;
        font-family: "Comic Sans MS";
        background-color:yellow;
        width:100%;
        padding-left:10px;
        padding-right:10px;
        max-width:300px;
        margin:auto;
    }

    .form {
        display:block;
        font-family: Calibri;
        text-align: center;
        margin:auto;
        margin-top:20px;
        margin-bottom:20px;
        width:280px;
    }

    .bordure_tableau {
        text-align:center;
        background-image: url("https://media.istockphoto.com/id/1083302826/fr/photo/stratifi%C3%A9-parquet-texture-fond.jpg?s=612x612&w=0&k=20&c=2CtDrFnHvEzPyyMJIntTTOnxHHy44LRChPENk4_nITc=");
        /* background-size:cover; Finalement c'était pas l'idée du siècle. */
        max-width:800px;
        padding:24px;
        margin: auto;
    }

    .tableau {
        text-align:left;
        background-image: url("https://img.freepik.com/photos-premium/tableau-noir-fond-ecole-restes-craie-effacee_273893-2275.jpg");
        background-size:cover;
        padding-left:16px;
        padding-right:16px;
        padding-top:4px;
        padding-bottom:4px;
        min-height:200px;
        margin: auto;
    }

    .lignes {
        font-family: "Comic Sans MS";
        color:white;
        word-wrap: break-word;
    }

    .champ_form {
        margin-top:4px;
    }

    .champ_form_envoyer {
        font-size:24px;
        width:100%;
    }


</style>

</body>
</html>