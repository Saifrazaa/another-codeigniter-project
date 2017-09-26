<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeIgniter Recaptcha Demo</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
    <div class="container" style="margin-top: 20px;">
        <div class="col-xs-6 col-xs-offset-3 well" style="background:none;">
        <?php echo form_open("captcha/index"); ?>
            <div class="form-group">
            </div>
            <div class="form-group">
                <div class="g-recaptcha" data-sitekey="6LetaRsUAAAAADM57PaSbo_mZttP9VKlyprsd8V-
"></div>
                <span class="text-danger"><?php echo form_error('g-recaptcha-response'); ?></span>
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-lg btn-danger">Send Feedback</button>
            </div>
        <?php echo form_close(); ?>
        <?php echo $this->session->flashdata('msg'); ?>
        </div>
    </div>
</body>
</html>