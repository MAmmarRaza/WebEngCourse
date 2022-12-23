<?php
include 'header.php';
include 'database.php';

$obj= new Database();
?>
<div id="main-content">
    <h2>All Records</h2>
    <table cellpadding="7px" style="text-align: center;">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Reg. Number</th>
        <th>Class</th>
        </thead>
        <tbody>
        <?php 
            $result= $obj->select("20-1120","*",null,null,null,null);
            if($result != null){
                while($row= $result->fetch(PDO::FETCH_ASSOC))
                { 
           
        ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['reg']; ?></td>
                <td><?php echo $row['class']; ?></td>
            </tr>
            <?php 
            }
                }?>
        </tbody>
    </table>
</div>
</div>
</body>
</html>
