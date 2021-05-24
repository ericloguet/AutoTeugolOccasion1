
<h2>Ajax</h2>

<?php
$voit = new VoitureBD($cnx);
$liste = $voit->getAllVoiture();
$nbr = count($liste);
//var_dump($liste);
?>
<form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get">
    <label for="id">Identifiant : </label>
    <input type="text" id="id" name="id">&nbsp;
  &nbsp;&nbsp;
    &nbsp;&nbsp;
    <select name="choix_voiture" id="choix_voiture">
        <option value =" ">Choisissez</option>
        <?php
        for($i=0; $i<$nbr; $i++)
        {
            ?>
            <option value=" <?php print $liste[$i]->id_voiture;?>">
                <?php print $liste[$i]->nom_marque.' ' ;
                print $liste[$i]->modele;
                ?>
            </option>
            <?php
        }
        ?>
    </select>
    <input type="submit" name="submit_id" value="Chercher" id="submit_id">
</form>
<div class="card-group" id="infoVoiture">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <div id="id_voiture"></div>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <div id="image_voiture"></div>
        </div>
    </div>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>

<div id="contenu2">

</div>


