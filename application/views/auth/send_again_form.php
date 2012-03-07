<?php
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
?>
<?php echo form_open($this->uri->uri_string()); ?>
    <div id="message">
        <div class="msg_wrap" style="padding: 5px;">
            <div class="alert alert-info">
                <strong>Account not activated</strong>
            </div>
            <p>Whoa whoa whoa! Slow down there speedy gonzales. Your account is not activated, please check your email, click the link in the email and activate the account.</p>
            <p>If you want, we can send you the email again, just enter the email address you registered with in the field below and hit send</p>
            <hr />
            <br />
            <div class="control-group">
                 <label class="control-label" for="email">Email</label>
                 <div class="controls">
                      <input type="text" class="input-xlarge" id="email" name="email" value="<?=$email['value'];?>">
                      <div class="error-text"> <?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?></div>
                 </div>
            </div>

            <div style="text-align: center; padding-bottom: 10px;">
                <input type="submit" name="send" value="Send" class="btn-large btn-primary">
            </div>
    </div><!--.wrap-->
</div><!--#content-->
<?php echo form_close(); ?>