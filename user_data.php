<!DOCTYPE html>
    <head>
        <title>User Data Display</title>
    </head>
    <body>
        <?php
            $name = $_POST["name"];
            $email = $_POST["email"];
            $dob = $_POST["dob"];
            $gender = $_POST["gender"];
            $country = $_POST["country"];

            $data = array("name"=>$name, "email"=>$email, "dob"=>$dob, "gender"=>$gender, "country"=>$country );

            print_r($data);
        ?>
    </body>
</html>

