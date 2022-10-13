<?php
        if(isset($_POST["submit"])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $birthday =$_POST['birthday'];
            $gender = $_POST['gender'];
            $country = $_POST['country'];


            $userdata = [$name, $email, $birthday, $gender, $country];

            $file = fopen('userdata.csv', 'a');

            if($file){
                echo "file submitted....";

                if(fputcsv($file,$userdata)){
                    print_r($userdata);

                    fclose($file);
                }


            };
        }else{
            echo "NO DATA!";
        }
       
        
        ?>