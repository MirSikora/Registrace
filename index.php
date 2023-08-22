<?php 
    include "menu.php";
    ?>

    <h1>Registrace</h1>

    <form action="regform.php" method="post">
        <input type="text" name="name" placeholder="Jméno"><br>
        <input type="text" name="surname" placeholder="Příjmení"><br>
        <input type="text" name="login" placeholder="Přihlašovací jméno"><br>
        <input class="password-first" type="password" name="password" placeholder="Heslo" ><br>
        <input class="password-second" type="password" name="password-again" placeholder="Heslo znovu"><br>
        <p class="result-text"></p>
        <input type="submit" value="Registrovat" >
    </form>
    <?php 
    include "footer.php";
    ?>
