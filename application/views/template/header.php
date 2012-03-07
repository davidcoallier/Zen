<html>
    <head>
        <title>CoderDojo Zen</title>
        <link rel="stylesheet" href="/static/css/styles.css">
        <link rel="stylesheet" href="/static/css/bootstrap.css">
    </head>
    <body>
    <div id="top-bar">
		<div class="wrap">
		    <ul id="menu-top-menu">
                <li><a href="/"><img src="http://coderdojo.com/wp-content/themes/collective/images/logo.png" height="30" style="margin-top: -3px;"></a></li>
                <li><a href="/dojo">Dojo List</a></li>
		<?php if (isset($username)) {
		       if($user_data->dojo){?>
                <li><a href="/dojo/edit">Edit My Dojo</a></li>
                <li><a href="/dojo/<?=$user_data->dojo;?>">Dojo Profile</a></li>
                <?php } else { ?>
                <li><a href="/dojo/create">Create a Dojo</a></li>
                <?php } }?>
            </ul>
            <ul class="fr">
                <?php if (isset($username)) {?>
			    <li><a href="/auth/logout">Logout (<?=$username; ?>)</a></li>
                <?php } else { ?>
                <li><a href="/auth/register">Register</a></li>
                <li><a href="/auth/login">Login</a></li>
                <?php }?>
			</ul>
			<div class="clear"></div>
		</div><!--wrap-->
	</div>

