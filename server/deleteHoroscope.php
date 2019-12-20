
<?php



// For using $_SESSION in this file.
session_start();

// Checking if a request has been made.
if(isset($_SERVER['REQUEST_METHOD'])) {

    // Checking if request-method is POST.
    if($_SERVER['REQUEST_METHOD'] === "DELETE") {

        // Checking if key 'name' has been set in the request-body.
        if(isset($_SESSION['date'])) {
            
            // Saving the value of the key 'name' from the request into the key 'personName' in $_SESSION.
             unset($_SESSION["date"]);
            // Sending the saved value back to the client.
            //echo json_encode(unserialize($_SESSION["horoscope"]));
            echo json_encode("True");
        } else {
            
            // Sending a fault message explaining that the name is not set.
            echo json_encode("False");
        }

    }else {
            
        // Sending a fault message explaining that the request-method is not POST.
        echo json_encode("not a Delete method");
    }

} else {

    // Sending a fault message explaining that this not is a valid request.
    echo json_encode("Not a valid request(Delete)");
}

?>