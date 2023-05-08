<html>
<head>
<title>
login validation
</title>
</head>
<body>
<?php
    if(isset($_POST["submit"]))
    {
        
      $emailid=$_POST["emailid"];
      $pwd=$_POST["pwd"];
       $conn=mysqli_connect("localhost","root","","game");
       if($conn)
       {
             
               $query="SELECT * FROM signup2 where email='$emailid' and passwd='$pwd'";

               $res=mysqli_query($conn,$query);
               if(mysqli_num_rows($res)>0)
                {
                           echo "Hello...".$emailid."<br/>";
                         echo " Successfully Login..";
                         header("Location:sample.html");
                }
               else
               {
                header("Location:Loginfailed.php");
                }
        }
        else
        {
            echo "Connection is not established";
        }
    }
    ?>
</body>
</html>