<?php



// For using $_SESSION in this file.
session_start();
include 'horoscopeList.php';

//parse_str(file_get_contents("php://input"), $_PUT);
// Checking if a request has been made.
if(isset($_SERVER['REQUEST_METHOD'])) {
    //echo json_encode($_SERVER['REQUEST_METHOD']);
    // Checking if request-method is PUT.
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
            
        

        // Checking if key 'name' has been set in the request-body.
        if(isset($_POST['date'])) {

            if(isset($_SESSION["result"])) {
                $_SESSION["result"] = getHoroscope($_POST['date']);
                //echo json_encode($_SESSION["result"]);
                //echo json_encode(true);
                exit($_SESSION['result']);
            } else{
                //echo json_encode(false);
                exit;
                
            }
        } else {
            echo json_encode("Invalid date...");
        }
            
            
        
       /*  else {
            
            // Sending a fault message explaining that the name is not set.
            echo json_encode("False");
        } */

    }else {
            
        // Sending a fault message explaining that the request-method is not PUT.
        echo json_encode("not a PUT method");
    }

} else {

    // Sending a fault message explaining that this not is a valid request.
    echo json_encode("Not a valid request");
}

?>

