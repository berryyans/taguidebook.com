<div class="container">
    <div class="row">
        <div class="col-sm-12" style="margin-top:100px;margin-bottom:50px;">
            <?php foreach ($css_files as $file): ?>
            <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
            <?php endforeach; ?>
            <?php foreach ($js_files as $file): ?>
            <script src="<?php echo $file; ?>"></script>
            <?php endforeach; ?>
            <?php echo $output; ?>
        </div>
    </div>
</div>