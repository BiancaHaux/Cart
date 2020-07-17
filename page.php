<?php    
    // load up the config file
    require_once("./resources/config.php");
     
    require_once(VIEW_PATH . "/header.php");

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">	<style>
		<?php include 'public_html/css/main.css'; ?>
	</style>
	
<div id="container">
    <div id="content">
        <!-- content -->
    </div>
    <?php
        require_once(VIEW_PATH . "/products_content.php");
    ?>
</div>
<?php
    require_once(VIEW_PATH . "/cart_content.php");
?>