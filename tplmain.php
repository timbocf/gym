<?php ?>
<!DOCTYPE html>
<html>
<head>
<title class="title"><?php echo ucwords($page) ?> | Gym 101 Fitness</title>

<!-- Design by DC/Design | http://www.divineconnectionsdesign.com -->

<?php include 'includes/metadata.php' ?>
<link rel="stylesheet" href="css/main.css" />
<link rel="stylesheet" href="css/<?php echo $page ?>.css" />
<link rel="icon" type="image/gif" href="../images/favicon.gif" />

<!--[if lt IE 7]>
	<script type="text/javascript" src="unitpngfix.js"></script>
<![endif]-->
<script src="includes/google.js"></script>

<?php include 'includes/googlemaps.php' ?>
</head>

<body onload="load()" onunload="GUnload()">
<div id="container">
	<?php include 'includes/header.php' ?>

	<div id="wrap"><?php echo $page_content ?></div>

</div>

<?php include 'includes/footer.php' ?>

<!-- BEGIN: SeeVolution --><img width=0 height=0 src="https://c.svlu.net/pixel.aspx"/><script type="text/javascript" src="https://c.svlu.net/JInitScript.js"></script><!-- END: SeeVolution  -->

</body>
</html>
