<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>虎门乐诚汽修</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link type="text/css" rel="stylesheet" href="<?php echo base_url("ui_ref/css/bootstrap_mobile.min.css"); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url("ui_ref/css/font-awesome_official.min.css"); ?>">

</head>

<body>
<?php echo validation_errors(); ?>
<?php echo form_open('Newsinput/index') ?>

<?php if(isset($success)){?>
<div class="bs-component">
    <div class="alert alert-dismissible alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>恭喜!</strong>您已成功插入 <a href="#" class="alert-link">一条新闻</a>.
    </div>
</div>
<?php }?>




<div class="well bs-component">
    <form class="form-horizontal">
        <fieldset>
            <legend>新闻录入</legend>
            <div class="form-group">
                <label for="inputTitle" class="col-lg-2 control-label">标题</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="inputTitle" placeholder="title" name="title">
                </div>
            </div>

            <div class="form-group">
                <label for="textArea" class="col-lg-2 control-label">概要</label>
                <div class="col-lg-10">
                    <textarea class="form-control" rows="3" id="textArea"  name="summary"></textarea>
                    <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
                </div>
            </div>

            <div class="form-group">
                <label for="textArea" class="col-lg-2 control-label">内容</label>
                <div class="col-lg-10">
                    <textarea class="form-control" rows="3" id="editor" name="content"></textarea>
                    <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
                </div>
            </div>




            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <button type="reset" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </fieldset>
    </form>
    </div>
<!--/#footer-->

<script src="<?php echo base_url("ui_ref/js/jquery.js"); ?>"></script>
<script src="<?php echo base_url("ui_ref/js/bootstrap.min.js"); ?>"></script>
<script src="<?php echo base_url("ui_ref/ckeditor/ckeditor.js"); ?>"></script>
<script type="text/javascript">CKEDITOR.replace('content');</script>
</body>


</html>