


<div id="navRight" class="bounceIn animated" style="color:white;">

    <button id="live">Live</button><br>

    <?php
    $filtres = [
        'child' => 'child',
        'cocktail' => 'cocktail',
        'eye' => 'eye',
        'thumbs-up' => 'thumbs-up',
        'umbrella-beach' => 'umbrella-beach',
        'swimmer' => 'swimmer',
        'futbol' => 'futbol',
        'fish' => 'fish',
        'kiwi-bird' => 'kiwi-bird',
        'smile' => 'smile',
        'camera' => 'camera',
        'question' => 'question'
    ];


    foreach ($filtres as $filtre) {
        ?>
        <button onclick="filtre('<?= $filtre ?>')"><?= $filtre ?></button>
        <?php
    }
    ?>

</div>
