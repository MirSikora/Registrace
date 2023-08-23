<?php 
    include "menu.php";
    ?>

    <h1>Přihlášení</h1>
    
    <form action="userlog.php" method="post">
        <input type="text" name="login-name" placeholder="Přihlašovací jméno"><br>
        <input type="password" name="login-password" placeholder="Heslo"><br>
        <input type="submit" value="Přihlásit">
    </form>
    
    <?php 
    include "footer.php";
    ?>
    