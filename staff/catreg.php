
<?php
include 'include/check.php';
include '../include/db.php';


$i = $_POST["id"];
$n = $_POST['catname'];
$d = $_POST['cdesc'];





$query="SELECT * FROM category WHERE num = '$i'";
$result=mysqli_query($connect,$query);
$num=mysqli_num_rows($result);

if($num != 0)
{ 
    
    $query = "UPDATE item set name = '$n' , catdesc = '$d'  where num = $i";
    mysqli_query($connect,$query) or die ("Error Query [".$strSQL."]");;
    $query = "FLUSH PRIVILEGES";
    echo '<meta http-equiv="refresh" content="0;url=/projekweb/staff/clist.php">'; 
}
else
    {
 
    $query = "INSERT INTO category (name,catdesc) VALUES ('$n', '$d')";
    mysqli_query($connect,$query) or die ("Error Query [".$strSQL."]");;
    $query = "FLUSH PRIVILEGES";
    
    
    echo '<meta http-equiv="refresh" content="0;url=/projekweb/staff/clist.php">'; 

    }



?>