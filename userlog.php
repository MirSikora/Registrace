<?php 
    include "menu.php";
    include "login.php";

    session_start();
   
if($_SERVER["REQUEST_METHOD"] === "POST") {   
     
    $log_name = ($_POST["login-name"]) ;
    $log_password = ($_POST["login-password"]) ;


    $con = connection();

function authentication($con, $log_name, $log_password) {

$sql = "SELECT password
            FROM registration
            WHERE login = ?";
   
    $stmt = mysqli_prepare($con, $sql);

    if($stmt){
        mysqli_stmt_bind_param($stmt, "s", $log_name);

        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);

            if($result->num_rows != 0){
                $password_database = mysqli_fetch_row($result);//zde je v proměnné pole                
                $user_password_database = $password_database[0]; // zde je v proměnné string
            
            if($user_password_database) {
                return password_verify($log_password, $user_password_database);                
            }
        }else{
            echo "Neplatné uživatelské jméno";
        }
    } else {
        echo mysqli_error($con);
    }
}}
}    
    if(authentication($con, $log_name, $log_password)) {
        echo "<h2>Úspěšné přihlášení.</h2>";
        
        //Nastavení, že je uživatel přihlášený
        $_SESSION["is_logged_in"] = true;
        //Nastavení ID uživatele
        $_SESSION["logged_in_user_id"] = $log_name;


    } else {
        echo "<h2>Zadali jste špatné přihlašovací údaje.</h2>";
    }
?>
<?php 
    include "footer.php";
    ?>