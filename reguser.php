<?php 
    include "menu.php";
    include "login.php";

    session_start();  
    
    ?>

    <h1>Pro registrované</h1>
    
    <?php 
    
    if ( !(isset($_SESSION["is_logged_in"]) and $_SESSION["is_logged_in"]) ){
            echo ('<p class="warning">Nepovolený přístup!!!</p><br><a class="login" href="loguser.php"> Zde se můžete přihlásit.</a>');
        }else{
            $con = connection();
            $result = mysqli_query($con, "SELECT * FROM registration");
   
            if (!$result) {
                echo mysqli_error($con);
            } else {
                $allUsers = mysqli_fetch_all($result, MYSQLI_ASSOC);
                echo "<h3>Seznam registrovaných uživatelů:</h3>";
                foreach($allUsers as $user){
                    echo '<p class="users"><span><label>Jméno: </label>'.$user["name"].' '.$user["surname"].'</span><span><label> Přihlašovací jméno: </label>'.$user["login"].'</span></p>';
                }   
            }
            mysqli_free_result($result);
            mysqli_close($con);
        }

    ?>
<?php 
    include "footer.php";
    ?>