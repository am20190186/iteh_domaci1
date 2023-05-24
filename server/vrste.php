<?php
include "../sesija.php";

$vrste = $baza->vratiVrste();

/** @var Vrsta $vrsta */
foreach ($vrste as $vrsta){
    ?>

    <option value="<?= $vrsta->getVrstaId(); ?>"><?= $vrsta->getNazivVrste(); ?> </option>

<?php
}