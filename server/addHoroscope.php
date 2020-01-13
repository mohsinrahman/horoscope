
<?php

include 'horoscopeList.php';

// For using $_SESSION in this file.
session_start();

// Checking if a request has been made.
if(isset($_SERVER['REQUEST_METHOD'])) {

    // Checking if request-method is POST.
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Checking if key 'name' has been set in the request-body.
        if(isset($_POST['date'])) {
            
            // Saving the value of the key 'name' from the request into the key 'personName' in $_SESSION.
            if(!isset($_SESSION["result"])) {
                
                
                error_log("save");
                echo json_encode($_SESSION["result"]);
                
                //echo json_encode(true); 
                $_SESSION["result"] = getHoroscope($_POST['date']);
               
                exit;
               
            } else {
                error_log("not save");
                echo json_encode($_SESSION["result"]);
                echo json_encode(false); 
                exit;
            }
            

            
        } else {
            
            // Sending a fault message explaining that the name is not set.
            echo json_encode(false);
        }

    }else {
            
        // Sending a fault message explaining that the request-method is not POST.
        echo json_encode("not a POST method");
    }

} else {

    // Sending a fault message explaining that this not is a valid request.
    echo json_encode("Not a valid request");
}

?>

