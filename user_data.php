<!DOCTYPE html>
    <head>
        <title>User Data Display</title>
    </head>
    <body>
        <?php

        ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

            $name = $_POST["name"];
            $email = $_POST["email"];
            $dob = $_POST["dob"];
            $gender = $_POST["gender"];
            $country = $_POST["country"];

            $data = array("name"=>$name, "email"=>$email, "dob"=>$dob, "gender"=>$gender, "country"=>$country );
            
            //Create csv
            $file = fopen('userdata.csv', 'w');
            fputcsv($file, $data);
            fclose($file);

            print_r($data);
        ?>
    </body>
</html>

