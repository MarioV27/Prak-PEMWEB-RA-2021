<table>
<?php
include 'connection.php';

$sql = mysqli_query($connection,"SELECT * FORM mhs");
$result = 0;

while($banyak = mysqli_fetch_array($sql));
    $result++;
?>
<tr>
    <td><?php echo $banyak['nama'];?></td>
    <td><?php echo $banyak['NIM'];?></td>
    <td><?php echo $banyak['prodi'];?></td>
    <td><?php echo $banyak['angkatan'];?></td>
</tr>
    <?php endwhile;?>
</table>