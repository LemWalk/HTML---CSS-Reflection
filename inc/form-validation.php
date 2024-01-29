<?php

// define variables and set to empty values
$nameErr = $company_nameErr = $emailErr = $telephoneErr = $messageErr = "";
$name = $company_name = $email = $telephone = $message = "";
$emailRegex = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
$telephoneRegex = "/^(?:(?:\+?44\s?(?:\(\d{1,5}\)|\d{1,5})|\d{4}|\d{5})\s?\d{3}\s?\d{3}\s?)$/";



if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {            
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $nameErr = "Only letters and white space allowed";

            }
        }    
        
        $company_name = test_input($_POST["company_name"]);

    
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!preg_match($emailRegex, $email)) {
                $emailErr = "Invalid email";

            }
    }

        
        if (empty($_POST["telephone"])) {
            $telephoneErr = "Telephone number is required";
        } else {
            $telephone = test_input($_POST["telephone"]);
            if (!preg_match($telephoneRegex, $telephone)) {
                $nameErr = "Invalid email";

            }
        }    


        if (empty($_POST["message"])) {
            $messageErr = "Message is required";
        } else {
            $message = test_input($_POST["message"]);
        }
    
    
        if (
            empty($nameErr) &&
            empty($company_nameErr) &&
            empty($emailErr) &&
            empty($telephoneErr) &&
            empty($messageErr)
        )   {
            
            ?>
            <script>

                function displaySuccessMessage(){
                        successMessage.style.display = 'flex';
                    }
            
                const successMessage = document.querySelector('.submit_message_box');

                // function displaySuccessMessage() {
                //     $.ajax({
                //         url: 'contact-us.php',
                //         type: 'POST',
                //         data: { success: true },
                //         success: function(response) {
                //         echo $('.submit_message_box').css('display', 'flex');
                //         },
                //         error: function(xhr, status, error) {
                //         console.log(error);
                //         }
                //     });
                //     }

                displaySuccessMessage();
                console.log('It works');

            </script>"

            <?php

                try{

                    global $form_validation;
                    $form_validation = true;

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
                
                    $conn = null;
                    $stmt = null;
                    header('Location: contact-us.php#contact-form-lo');
                    die();
        
                } catch (PDOException $e) {
                    die("Query Failed: " . $e->getMessage());
                }
            

            } 

            
    } else {
            // header("Location:./contact-us.php#contact-form-lo");
        }

    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


//======================================================
                            
// <?php if($form_validation == false ) {echo 'hidden';}

//===================================================





        // $name = test_input($_POST["name"]);
        // $company_name = test_input($_POST["company_name"]);
        // $email = test_input($_POST["email"]);      
        // $telephone = test_input($_POST["telephone"]);
        // $message = test_input($_POST["message"]);


?>