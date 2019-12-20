<?php



// For using $_SESSION in this file.
session_start();
parse_str(file_get_contents("php://input"), $_PUT);
// Checking if a request has been made.
if(isset($_SERVER['REQUEST_METHOD'])) {

    // Checking if request-method is POST.
    if($_SERVER['REQUEST_METHOD'] === 'PUT') {
            
        

        // Checking if key 'name' has been set in the request-body.
        if(isset($_PUT['date'])) {

            $month = substr($_PUT['date'], 0, 2);
           $day = substr($_PUT['date'], 3, 2);

            // Sending the saved value back to the client.
            if(isset($_SESSION["date"]) && $_SESSION["date"] == ($month-$day)){
                echo json_encode("True");
            }
            else{
                echo "False";
            }
            
        } else {
            
            // Sending a fault message explaining that the name is not set.
            echo json_encode("name is not set in body");
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

