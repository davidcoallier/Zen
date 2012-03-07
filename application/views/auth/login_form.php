<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
if ($login_by_username AND $login_by_email) {
	$login_label = 'Email or login';
} else if ($login_by_username) {
	$login_label = 'Login';
} else {
	$login_label = 'Email';
}
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'size'	=> 30,
);
$remember = array(
	'name'	=> 'remember',
	'id'	=> 'remember',
	'value'	=> 1,
	'checked'	=> set_value('remember'),
	'style' => 'margin-top:8px',
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>
<div id="content">
    <div class="wrap">
        <div id="main">
            <?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
            <legend>Login</legend>

            <div class="control-group">
                <label class="control-label" for="login"><?=$login_label;?></label>
                <div class="controls">
                    <input type="text" class="input-xlarge" id="login" name="login" value="<?=$login['value'];?>">
                    <p class="help-block"><font color="red"> <?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?></font></p>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="password">Password</label>
                <div class="controls">
                    <input type="password" class="input-xlarge" id="password" name="password"">
                    <p class="help-block"><font color="red"><?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?></font></p>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="remember">Remember me</label>
                <div class="controls">
                    <?php echo form_checkbox($remember); ?>
                </div>
            </div>

            <?php if ($show_captcha) { ?>
            <div class="control-group">
                <label class="control-label" for="recaptcha_response_field">Are you human?</label>
                <div class="controls">
                    <div id="recaptcha_image"></div>

                    <input type="text" style="margin-top: 12px;" class="input-xlarge" id="recaptcha_response_field" name="recaptcha_response_field">
                    <p class="help-block">
                        <div class="recaptcha_only_if_image">Enter the words above &bull; <a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a></div>
                        <div class="recaptcha_only_if_audio">Enter the numbers you hear &bull; <a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a></div>
                        <div class="recaptcha_only_if_image" style="margin-left: 145px;">&bull;<a href="javascript:Recaptcha.switch_type('audio')"> Get an audio CAPTCHA</a></div>
                        <div class="recaptcha_only_if_audio" style="margin-left: 145px;">&bull;<a href="javascript:Recaptcha.switch_type('image')"> Get an image CAPTCHA</a></div>

                        <font color="red"><?php echo form_error('recaptcha_response_field'); ?></font>
                    </p>
                    <?php echo $recaptcha_html; ?>
                </div>
            </div>
            <?php } ?>
            <div class="control-group">
                <div class="controls">
                    <input class="btn-primary" style="padding: 5px 108px;" type="submit" value="Login">
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
        <div id="sidebar">
            <div class="widget">
                <legend>Other stuff</legend>
                <ul style="margin-left: 30px;">
                    <li><?php echo anchor('/auth/forgot_password/', 'Forgot password'); ?></li>
                    <li><?php echo anchor('/auth/register/', 'Register'); ?></li>
                </ul>
            </div>
        </div>
    </div><!--.wrap-->
</div><!--#content-->