<?php
$connect = mysqli_connect('localhost','root','','cf') or die("error");

function insertDate($table,$fields){
    $col = implode(",",array_keys($fields));
    $rows = implode("','",array_values($fields));
    $query = mysqli_query($connect, "insert into $table($col) value ('$rows)");
    return $query;
}
function callingData($table){
    global $connect;
    $array = [];
    $query = mysqli_query($connect , "Select * from $table");
    while ($row = mysqli_fetch_array($query)){
        $array[] = $row;
    }
    return $array;
}
function deleteDate($table ,$cond){
    global $connect;
    $query= mysqli_query($connect , "DELETE FROM $table WHERE $cond");
    return $query;
}
function redirect($page="index"){
    echo "<script> window.open('$page.php', '_self')</script>";
}

?>