<?php 
    include "menu.php";
	include "login.php";
	session_start();
    ?>
    <h1>Registrace</h1>

<?php

$con = connection();
if((mysqli_query($con, "SELECT id_user FROM registration
    WHERE login = '" .($_POST["login"]) . "'"))->num_rows !=0){
                echo "Zadané uživatelské jméno již existuje.";
                
            }else{
                mysqli_query($con,"SET NAMES 'utf8'");  
                if (mysqli_query($con,
                        "INSERT INTO registration(name, surname, login, password) VALUES('" .
                        addslashes($_POST["name"]) . "', '" .
                        addslashes($_POST["surname"]) . "', '" .
                        addslashes($_POST["login"]) . "', '" .
                        password_hash($_POST["password"],PASSWORD_DEFAULT) . "')"))
                {
                            //Nastavení, že je uživatel přihlášený
                        $_SESSION["is_logged_in"] = true;
                        //Nastavení ID uživatele
                        $_SESSION["logged_in_user_id"] = $_POST["login"]; 
                        echo "Registrace proběhla úspěšně.";    
                }
                else
                {
                    echo "Nepovolený přístup. ". mysqli_error($con);
                }
            }     
   
mysqli_close($con);
?>
<?php 
    include "footer.php";
    ?>