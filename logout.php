<?php 
    include "menu.php";
    session_start();
    $_SESSION = array();

    ?>

    <h1>Odhlášení</h1>
    
    <p>Právě jste se odhlásili.</p><br>
    <p><a class="login" href="loguser.php"> Zde se můžete přihlásit.</a></p>

    <?php 
    include "footer.php";
    ?>