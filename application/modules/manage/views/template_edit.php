<div class="container">
    <div class="row">
    <?php foreach ($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <style type="text/css">
    	.gc-container{
    		width: 1200px !important;
    	}
    </style>
    <?php endforeach; ?>
    <?php foreach ($js_files as $file): ?>
    <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
    <?php echo $output; ?>
    </div>
</div>