<div class="container">
    <div class="row">
    <?php foreach ($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>
    <?php foreach ($js_files as $file): ?>
    <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
    <?php echo $output; ?>
    <p>
        <div class"alert alert-info">
            When You press Submit : We will check email and last deposit and last deposit amount and then we email you with instructions.
        </div>
    </p>
    </div>
</div>