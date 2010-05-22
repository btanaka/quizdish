<?php $this->load->helper('html'); ?>

<html>
<head>
<title>Database Test</title>
<?php print link_tag('css/main.css'); ?>
</head>
<body>

<div id="Content">
<h1>This should show the databases our db user has access to</h1>

<ul>
<?php $dbs = $this->dbutil->list_databases(); ?>
<?php foreach($dbs as $db):?>

<li><?php echo $db;?></li>

<?php endforeach;?>
</ul>

</body>
</html>
