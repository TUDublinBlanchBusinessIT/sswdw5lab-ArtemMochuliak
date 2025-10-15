<?php 
include("dbcon.php");

$sql = "SELECT * from member";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo '<select name="memberID">';
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = htmlspecialchars($row['firstname'] . ' ' . $row['surname']);
        echo "<option value='$id'>$name</option>";
    }
    echo '</select>';
} else {
    echo "No members found.";
}

mysqli_close($conn); 
?>