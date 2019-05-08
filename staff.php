<?php 
include_once('header.php');
?>
<title>Staff List</title>
<body>
	<div>
        
        <?php
         while($row = $ret->fetchArray(SQLITE3_ASSOC) )
         {
            echo "<ul class='center'>NAME : ". $row['firstname'] ."</ul>";
            echo "<li class='center'>Phone : ". $row['work_phone'] ."</li>";
            echo "<li class='center'>Email : ". $row['email'] ."</li>";
         }
         $db->close();
        ?>
        
    </div>
</body>
<?php include_once('footer.php'); ?>