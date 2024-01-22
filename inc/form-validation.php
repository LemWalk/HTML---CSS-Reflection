<?php
// define variables and set to empty values
$nameErr = $company_nameErr = $emailErr = $telephoneErr = $messageErr = "";
$name = $company_name = $email = $telephone = $message = "";
$emailRegex = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
$telephoneRegex = "";





    //     if (empty($_POST["name"])) {
    //         $nameErr = "Name is required";
    //     } else {            
    //         $name = test_input($_POST["name"]);
    //         if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
    //             $nameErr = "Only letters and white space allowed";
    //         }
    //     }
    
    //     if (empty($_POST["company_name"])) {
    //         $company_name = "";
    //     } else {
    //         $company_name = test_input($_POST["company_name"]);
    //     }
        
    
    //     if (empty($_POST["email"])) {
    //         $emailErr = "Email is required";
    //     } else {
    //         $email = test_input($_POST["email"]);
    //         // if (!preg_match($emailRegex, $email)) {
    //         //     $nameErr = "Invalid email";
    //     // }
    // }

        
    //     if (empty($_POST["telephone"])) {
    //         $telephone = "";
    //     } else {
    //         $telephone = test_input($_POST["telephone"]);
    //         if (!preg_match($emailRegex, $email)) {
    //             $nameErr = "Invalid email";
    //         }
    //     }    


    //     if (empty($_POST["message"])) {
    //         $messageErr = "Message is required";
    //     } else {
    //         $message = test_input($_POST["message"]);
    //     }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = test_input($_POST["name"]);
        $company_name = test_input($_POST["company_name"]);
        $email = test_input($_POST["email"]);      
        $telephone = test_input($_POST["telephone"]);
        $message = test_input($_POST["message"]);



        try{
            require_once "connection.php";
            $query = "INSERT INTO contact_form (name, company_name, email, telephone, message) 
            VALUES ( :name , :company_name , :email , :telephone, :message)";            

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":company_name", $company_name);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":telephone", $telephone);
            $stmt->bindParam(":message", $message);
            

            $stmt->execute();

            // [$name, $company_name, $email, $telephone, $message]

            $conn = null;
            $stmt = null;
            header("Location:./contact-us.php");
            die();

        } catch (PDOException $e) {
            die("Query Failed: " . $e->getMessage());
        } 

    
    } else {
        // header("Location:../contact-us.php");
    }

    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


//  // If there are no errors, ASSIGN a success message that we call later.
//  if (
//     empty($nameErr) &&
//     empty($cnameErr) &&
//     empty($emailErr) &&
//     empty($telephoneErr) &&
//     empty($messageErr)
    
// ) {
//     $success_message = "Enquiry sent! We'll get back to you as soon as possible.";
//     $validForm = true;
//     $stmt = $dbenquiries->prepare(
//         "INSERT INTO enquiries (name, cname, email, telephone, message) VALUES (?, ?, ?, ?, ?)"
//     );
//     $stmt->bindParam(1, $name);
//     $stmt->bindParam(2, $cname);
//     $stmt->bindParam(3, $email);
//     $stmt->bindParam(4, $telephone);
//     $stmt->bindParam(5, $message);
//     $stmt->execute();
//     $name = $cname = $email = $telephone = $message ="";
// }


