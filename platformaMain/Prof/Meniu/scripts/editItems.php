<?php
require 'databaseConnect.php';

if(isset($_POST['deletedItems'])) {
    $deletedItems = $_POST['deletedItems'];
    foreach ($deletedItems as $delete){
        $sql= "DELETE FROM materii WHERE nume ='$delete'";
        mysqli_query($connect,$sql);
    }

}
echo'ola';
if(isset($_POST['added'])){
    $addedItems=$_POST['added'];
    $sql= "SELECT id FROM student";
    foreach ($addedItems as $add){
        if(empty($add)==false) {
            $result=mysqli_query($connect,$sql);
            while ($date_DB=$result->fetch_assoc()){
                $id=$date_DB['id'];
                $command="INSERT INTO materii (nume,user_id) VALUES ('$add','$id')";
                $insert=mysqli_query($connect,$command);


            }
        }
    }
}

?>
