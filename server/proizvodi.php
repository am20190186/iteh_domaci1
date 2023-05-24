<?php
include "../sesija.php";

$proizvodi = $baza->pretraziProizvode(0, 'asc');

/** @var Proizvod $p */
foreach ($proizvodi as $p){
    ?>

    <option value="<?= $p->getId(); ?>"><?= $p->getNaziv(); ?> </option>

<?php
}