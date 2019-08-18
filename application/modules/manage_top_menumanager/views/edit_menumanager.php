<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>
<div class="container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url() . 'manage_top_menumanager/' ?>">List</a></li>
        <li class="breadcrumb-item active">Edit</li>
        <li class="breadcrumb-item"><a href="<?php echo base_url() . 'manage_top_menumanager/sorting' ?>">Sorting</a></li>
    </ol>
</div>
<div class="container">
    <div class="container" style="background: #f5f5f5;padding-top: 20px;">
        <h3>Edit Top Menu Manager</h3>
        <br>
        <?php echo form_open_multipart('manage_top_menumanager/edittopmenumanager/'.$menu->id); ?>
        <div class="row">
            <div class="col-md-2">
                <label>Top Menu</label>
            </div>
            <div class="col-md-10">
                <select name="top_menu" class="form-control">
                    <option value="0">None</option>
                    <?php
                    if (isset($top_menus))
                    {
                        foreach ($top_menus as $top_menu)
                        {
                            echo '<option value="' . $top_menu->id . '"' . ($this->session->flashdata('top_menu') == $top_menu->id ? 'selected' : '') . '>' . $top_menu->menu_title . '</option>';
                        }
                    }
                    ?>
                </select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2">
                <label>Title</label>
            </div>
            <div class="col-md-10">
                <input name="title_id" type="text" class="form-control"
                       value="<?php echo $menu->menu_title ?>"/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2">
                <label>Content</label>
            </div>
            <div class="col-md-10">
                <?php //echo $this->ckeditor->editor("content_id", $menu->menu_konten); ?>
                <textarea id="summernote" name="content_id"><?=$menu->menu_konten; ?></textarea>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2">
                <label>URL</label>
            </div>
            <div class="col-md-10">
                <input name="url" type="text" class="form-control"
                       value="<?php echo $menu->url ?>"/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2">
                <label>Target</label>
            </div>
            <div class="col-md-10">
                <input type="radio" name="target" value="_blank" <?php echo $menu->menu_target == '_blank' ? "checked" : ""; ?>> New Window
                <input type="radio" name="target" value="_self" <?php echo $menu->menu_target == '_self' ? "checked" : ""; ?>> Same Window<br>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2">
                <label>Status</label>
            </div>
            <div class="col-md-10">
                <input type="radio" name="status" value="0" <?php echo $menu->status == 0 ? "checked" : ""; ?>> Show
                <input type="radio" name="status" value="1" <?php echo $menu->status == 1 ? "checked" : ""; ?>> Hidden<br>
            </div>
        </div>
        <br>
        <div>
            <?php if (isset($results))
            {
                foreach ($results as $result)
                {
                    echo $result;
                }
            }; ?>
        </div>
        <div id="errors">
            <?php echo $this->session->flashdata('error'); ?>
        </div>
        <div class="col-md-12 text-center">
            <a href="<?php echo base_url() . 'manage_top_menumanager/' ?>" class="btn btn-warning">Cancel</a>
            <button type="submit" class="btn btn-success">Save</button>
        </div>
        <?php form_close(); ?></div>
</div>
<script type="text/javascript">
     $('#summernote').summernote({
       placeholder: 'Type your content here',
       tabsize: 2,
       height: 300
     });
</script>