<?php
 
$connect=mysqli_connect("localhost","id12804492_jsonmhsw","kharisa17","id12804492_chacashop");
$query = "SELECT * from penyewa ";
$result = mysqli_query($connect,$query) or die (mysqli_error());
 
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {
    $temp = array(
    "nama" => $row["nama"],
    "alamat" => $row["alamat"], 
    "email" => $row["email"]);
   
    array_push($arr, $temp);
}
 
$data = json_encode($arr);
 
echo "{\"MENAMPILKAN DATA PENYEWA\":" . $data . "}";
?>