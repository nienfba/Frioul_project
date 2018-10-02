<?php
if (isset($_POST['id']) AND $_POST['id'] == "" )
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] == "" )
    {
        ?>

        <h1>Accès:</h1>
        <p><strong><a style="color:#46DF00" href=""><FONT size="3pt"><b>Espace journalistes</b></FONT></a></strong></p>

        <p>
            Cette page est reservee aux journalistes.
        </p>

        <?php
    }
    else
    {
        echo '<p>Mot de passe incorrect</p>';
    }
    ?>

    <?php
    if (isset($_POST['id']) AND $_POST['id'] == "" )
        if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] == "" )
        {
            ?>
