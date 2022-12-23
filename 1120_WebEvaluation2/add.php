<?php include 'header.php';
include 'database.php';
$obj= new Database(); ?>

<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="ammar" />
        </div>
        <div class="form-group">
            <label>Reg. Number</label>
            <input type="text" name="1120" />
        </div>
       
        <div class=" ">
        <label for="" style="font-weight: bold; float: left;">Class</label>
            <div class="radio_button" style="margin-left: 100px;margin-bottom:20px; float: left;">
                <input type="radio" name="class" value="SE" />
                <label>SE</label>
                <input type="radio" name="class" value="CS" />
                <label>CS</label>
                <input type="radio" name="class" value="IT" />
                <label>IT</label>
            </div> 
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
