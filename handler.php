<?php  

    function generateFile($email) {
        $date = str_replace("-", "/", $_POST['date']);
        $time = date("H:i:s A");

        $formatted = "$date $time (UTC)";

        $body = file_get_contents("./templates/microsoft.html");

    
        $body = str_replace("{{email}}", $email, $body);
        $body = str_replace("{{time}}", $formatted, $body);

        if($body) {
            // Create a new file
            $name = explode("@", $email)[0];
            $file = fopen("$name.html", "w");
            fwrite($file, $body);
            fclose($file);

            // Downloading File
            header('Content-Description: File Transfer');
            header('Content-Disposition: attachment; filename='.basename("$name.html"));
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize("$name.html"));
            header("Content-Type: text/html");
            echo file_get_contents("$name.html");

            sleep(1);
            unlink("$name.html");
        }
    }

    if(isset($_POST['generate'])) {
        $email = $_POST['email'];
        generateFile($email);
    }
?>