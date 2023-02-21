<?php include_once("connect.php") ?>



<?php
$lang="en";
$sql = "SELECT * FROM language_tbl";

$result = mysqli_query($mysqli_connect,$sql);
$id=1;  
while ($row = $result->fetch_assoc()) {?>
    
    
    <h1><?php 
    if($row['field_name'] == "good")
    echo $row['lang_'.$lang]; ?></h1>


<?php } ?>
