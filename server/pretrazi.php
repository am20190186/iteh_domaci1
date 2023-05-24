<?php
include "../sesija.php";

$brend = $_GET['brend'];
$sortiranje = $_GET['sortiranje'];

$proizvodi = $baza->pretraziProizvode($brend, $sortiranje);
?>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Proizvod</th>
            <th>Opis</th>
            <th>Brend</th>
            <th>Vrsta</th>
            <th>Cena</th>
        </tr>
    </thead>
    <tbody>

<?php

/** @var Proizvod $p */
foreach ($proizvodi as $p){
    ?>
    <tr>
        <td><?= $p->getNaziv() ?></td>
        <td><?= $p->getOpis() ?></td>
        <td><?= $p->getBrendId()->getNazivBrenda() ?></td>
        <td><?= $p->getVrstaId()->getNazivVrste() ?></td>
        <td><?= $p->getCena() ?></td>
    </tr>

<?php
}
?>

    </tbody>
</table>
