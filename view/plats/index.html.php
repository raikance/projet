<?php

foreach ($plats as $plat) : ?>

<article>
    <h1><?= $plat->getNom()?></h1>
    <span> Date de création : <?= $plat -> getDateCreation()?></span>
    <span> Date de modification : <?= $plat -> getDateModification()?></span>
    <p> <?= $plat -> getDescription()?> </p>
</article>

<?php endforeach; ?>
