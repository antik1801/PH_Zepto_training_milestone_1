<?php 
   
        $conn= mysqli_connect('localhost', 'root', '', 'test1');
        if (isset($_POST['name']) && isset($_POST['address']) && isset($_POST['city'])) {
            $name= $_POST['name'];
            $address= $_POST['address'];
            $city= $_POST['city'];
            echo `$name`;
            echo `$address`;
            echo `$city`;

            $sql = "INSERT INTO users (name,address,city) VALUES ('$name', '$address', '$city')";

            $query = mysqli_query($conn, $sql);
            if ($query) {
                echo 'Entry Successfull';
            }
            else{
                echo 'Error Occured';
            }
        }

    ?>