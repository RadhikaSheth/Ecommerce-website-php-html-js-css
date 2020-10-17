<?php
$conn=new mysqli("localhost","root","","hw_data");
session_start();
?>
<html>
<head>
</head>
<style>
    body{
        background-color: coral;
    }
table,tr,td{
    border-style: solid;
    background-color: aqua;
    width: 35vw;
}

</style>
<body>
    <center>

        <?php
        if($_SESSION['id']){
            $x=$_SESSION['id'];
            $sql2 = "SELECT * FROM tab1 WHERE id=$x";
                $result = mysqli_query($conn, $sql2);
                while($a = mysqli_fetch_assoc($result)){
?>          
        <form method="POST">
                    <table>
                        
                        <tr><td>Enter name:</td><td><input type="text" name="uname1" value="<?php echo $a['uname'];?>"/><br /></td></tr>
                        <tr><td>Enter surname:</td><td><input type="text" name="surname1" value="<?php echo $a['sname'];?>"/><br /></td></tr>
                        <tr><td>Enter zip-code:</td><td><input type="integer" name="zip1" value="<?php echo $a['zip'];?>"/><br /></td></tr>
                        <tr><td>Enter city:</td><td><input type="text" name="city1" value="<?php echo $a['city'];?>"/><br /></td></tr>
                
                <tr>
                <td ><input type="submit" name="subedit" value="SUBMIT"/></td>
                <td><input type="submit" name="reedit" value="RESET"/></td>
                        </tr>
                    </table>
            </form>
                

<?php

        
        }
    }
    if(!$_SESSION['id']){
    ?>
    

<form method="POST">
    <table>
    <tr><td>Enter name:</td><td><input type="text" name="uname" /><br /></td></tr>
    <tr><td>Enter surname:</td><td><input type="text" name="surname" /><br /></td></tr>
    <tr><td>Enter zip-code:</td><td><input type="integer" name="zip" /><br /></td></tr>
    <tr><td>Enter city:</td><td><input type="text" name="city" /><br /></td></tr>
    <tr><td><input type="submit" name="sub" value="SUBMIT"/></td>
                <td><input type="submit" name="re" value="RESET"/></td></tr>
    </table>
</form>
    
    <?php
    }
    ?>

<br>
<br>

<?php

if(isset($_POST['subedit'])){
            $uname=$_POST['uname1'];
            $sname=$_POST['surname1'];
            $zip=$_POST['zip1'];
            $city=$_POST['city1'];
            $x=$_SESSION['id'];
            
    
    $sql = "UPDATE tab1 SET uname='$uname', sname='$sname', zip='$zip', city='$city' WHERE id = $x";
    $result=mysqli_query($conn,$sql);
    if($result){
        $_SESSION['id']=0;
        header("Location: input.php");
    }
}

        if(isset($_POST['reedit'])){
            $_SESSION['id']=0;
            header("Location: input.php");
}


        if(isset($_POST['sub'])){
            $uname2=$_POST['uname'];
            $sname2=$_POST['surname'];
            $zip2=$_POST['zip'];
            $city2=$_POST['city'];
            $sql="INSERT INTO tab1 (uname, sname, zip, city) VALUES ('$uname2','$sname2','$zip2','$city2')";
            mysqli_query($conn,$sql);
        }


        if(isset($_POST['re'])){
            header("Location: input.php");
        }
             
                
        
        $sql1 = "SELECT * FROM tab1";
                $result = mysqli_query($conn, $sql1);
                if (mysqli_num_rows($result) > 0)
            {
                ?>
                <table style="border-style:solid;">
                <tr style="border-style:solid;">
                <th>
                name
                </th>
                <th>
                sname
                </th>
                <th>
                zip code
                </th>
                <th>
                city
                </th>
                </tr>
<?php
            while($row = mysqli_fetch_assoc($result))
                       {
                          
                        ?>
                
                
                <tr>
                <td>
                <?php
                echo $row['uname'];
                ?>
                </td>
                <td>
                <?php
                echo $row['sname'];
                ?>
                </td>
                <td>
                <?php
                echo $row['zip'];
                ?>
                </td>
                <td>
                <?php
                echo $row['city'];
                ?>
                </td>
                <td>
                <form method="POST">
                    <button type="submit" class="btn btn-primary" name="edit" value="<?php echo $row['id'];?>">Edit</button>  
                    </form>
                </td>
                <td>
                <form method="POST">
                    <button type="submit" class="btn btn-primary" name="udelete" value="<?php echo $row['id'];?>">Delete</button>  
                    </form>
                </td>
                </tr>
                



<?php
                       }
                    }
                    
            
        
            if(isset($_POST['edit']))
            {   $_SESSION['id']=$_POST['edit'];
                header("Location: input.php");
               
            }
            if(isset($_POST['udelete']))
            {  
              $x=$_POST['udelete'];
               $sql = "DELETE FROM tab1 WHERE id=$x";
                $result=mysqli_query($conn,$sql);   
                header("Location: input.php");
                
            } 

        
        ?>
           </table>
           <center>
</body>
</html>