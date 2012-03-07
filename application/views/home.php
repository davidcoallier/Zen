<div id="content">
    <div class="wrap">
        <div id="main"><legend>Zen</legend>


            <p>Welcome to CoderDojo Zen, this is the network behind CoderDojo, here you can create a listing for a Dojo and more. If you're here to create a Dojo, please login first and then click create Dojo on right if you do not already have a Dojo</p>
              <ul class="thumbnails">
              <li class="span3">
                <a href="#" class="thumbnail">
                  <img src="/static/images/home.jpg" alt="">
                </a>
              </li>
            </ul>
            <a href="/dojo"><input type="button" class="btn-success btn-large" style="padding: 5px 185px; margin-top: 10px; margin-bottom: -5px;" value="Click here for a list of all Dojos"></a>


        </div>
        <div id="sidebar">
            <div class="widget">
                <?php if ($username) {?>
                <legend>Yo <?=$username;?></legend>
                <?php if($user_data->dojo){ ?>
                <a href="/dojo/<?=$user_data->dojo;?>"><input type="button" class="btn-primary" style="padding: 5px 80px;" value="View Dojo Listing"></a>
                <a href="/dojo/edit"><input type="button" class="btn" style="padding: 5px 83px;" value="Edit Dojo Listing"></a>
                <?php } else { ?>
                <a href="/dojo/create"><input type="button" class="btn-primary" style="padding: 5px 95px;" value="Create Dojo"></a>
                <?php } } else {?>
                <legend>Whats up?</legend>
                <a href="/auth/login"><input type="button" class="btn-primary" style="padding: 5px 113px;" value="Login"></a>
                <a href="/auth/register"><input type="button" class="btn-primary" style="padding: 5px 105px;" value="Register"></a>
                <?php } ?>
            </div>

            <div class="widget">
                <legend>In Beta</legend>
                <p>We're still working on Zen, we have a list of cool stuff we want to implement (like profiles, management, etc) and we're working on it. If you want to help out <a href="https://github.com/CoderDojo/Zen">Fork Zen on GitHub</a> and help out! </p>
                <a href="https://github.com/coderdojo"><img src="http://octodex.github.com/images/dojocat.jpg" alt="" height="100" style="margin-left: 70px;"></a>
            </div>
        </div>
    </div><!--.wrap-->
</div><!--#content-->
