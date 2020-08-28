<?php include('header.php'); ?>
<center>
<div class="container">
    <div style="width: 70%;border:1px solid black;border-radius:10px;padding:4%;padding-bottom:10%;margin-top:5%;">
        <form action="database_connection.php" method="post">
            <div class="form-group">
                <label for="server-name">Server Name</label>
                <input class="form-control" type="text" name="server-name" placeholder="Enter server name" value="localhost" style="width:90%;border: 2px solid orange;background-color: black;color: white;">
            </div>
            <div class="form-group" style="margin-top: 2%;">
                <label for="username">User Name</label>
                <input class="form-control" type="text" name="username" placeholder="Enter database username" value="root" style="width:90%;border: 2px solid orange;background-color: black;color: white;">
            </div>
            <div class="form-group" style="margin-top: 2%;">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Enter database password" style="width:90%;border: 2px solid orange;background-color: black;color: white;">
            </div>
            <div class="form-group" style="width:90%;margin-top: 2%;">
                <input type="reset" class="btn btn-danger" style="width: 45%;float:left;" value="Cancel">
                <input type="submit" name="submit" class="btn btn-success" style="width: 45%;float:right;" value="Connect">
            </div>
        </form>
    </div>
</div>
</center>
<?php
    if(isset($_POST['submit']))
    {
        $sn=$_POST['server-name'];
        $un=$_POST['username'];
        $pw=$_POST['password'];
        $con1=mysqli_connect($sn,$un,$pw);
        if($con1)
        {
            session_start();
            $_SESSION['sn']=$sn;
            $_SESSION['un']=$un;
            $_SESSION['pw']=$pw;
            ?>
                <script>
                    alert("Nice !! Now you are connected");
                    window.open("index.php","_self");
                </script>
            <?php
        }
        else
        {
            ?>
                <script>
                    alert("Sorry !! Your information is not match");
                    window.open("database_connection.php","_self");
                </script>
            <?php
        }
    }
?>