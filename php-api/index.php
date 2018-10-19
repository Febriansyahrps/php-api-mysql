<?php
include "koneksi.php";
$query = mysqli_query($connection,"SELECT * FROM user ORDER BY id ASC");
?>
<form action="" method="post">
    <table border="1" cellpadding="0" cellspacing="1">
        <tr>
            <th>No</th>
            <th>username</th>
            <th>Password</th>
            <th>level</th>
            <th>fullname</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["username"];?></td>
            <td><?php echo $data["password"];?></td>
            <td><?php echo $data["level"];?></td>
            <td><?php echo $data["fullname"];?></td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>