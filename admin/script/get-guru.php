<?php

include "./connection.php";

$result = "<option id=\"placeholder-kelas\" value=\"blank\" selected>Pilih Guru</option>";

$query = "SELECT * FROM guru ORDER BY nip;";

$queryResult = mysqli_query($conn, $query);

if (mysqli_num_rows($queryResult) > 0){
    while($row = mysqli_fetch_assoc($queryResult)){
        $result = $result."
            <option value=\"".$row["nip"]."\">".$row["nama"]."</option>
        ";
    }
}

echo $result;
?>