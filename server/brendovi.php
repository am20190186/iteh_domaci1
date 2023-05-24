<?php
include "../sesija.php";

$brendovi = $baza->vratiBrendove();

/** @var Brend $brend */
foreach ($brendovi as $brend){
    ?>

    <option value="<?= $brend->getBrendId(); ?>"><?= $brend->getNazivBrenda(); ?> </option>

<?php
}