<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page </title>
</head>
 
<body>
    <center>
        <?php
 
        
        $conn = mysqli_connect("localhost", "root", "", "quick_mart");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $f_name =  $_REQUEST['f_name'];
        $email = $_REQUEST['email'];
        $pswd =  $_REQUEST['pswd'];
        $num= $_REQUEST['num'];
        $gender = $_REQUEST['gender'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO user  VALUES ('$f_name',
            '$email','$pswd','$num','$gender')";
         
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$f_name\n $email\n "
                . "$pswd\n $num\n $gender");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>