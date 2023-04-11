<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['submit'])) {
        $full_name = filter_input(INPUT_POST,'name', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_STRING);
        $phone_number = filter_input(INPUT_POST,'pnumber', FILTER_SANITIZE_STRING);
        $message = filter_input(INPUT_POST,'message', FILTER_SANITIZE_STRING);

        if(!empty($full_name) || !empty($email) || !empty($phone_number) || !empty($message)){
            echo "Thank you for contacting us!";
        }else{
            echo "Please all filed is required";
        }
    }
}
?>