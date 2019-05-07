<?php include_once('header.php'); ?>
<title>Staff List</title>
<body>
	<div>
        <ul>
        <?php foreach($datas as $key => $row):?>
        <li>
            <?php echo($key + 1); ?> Name:<?php echo $row['name']; ?>, Phone:<?php echo $row['phone']; ?>
        </li>
        </ul>
    </div>
</body>
<?php include_once('footer.php'); ?>