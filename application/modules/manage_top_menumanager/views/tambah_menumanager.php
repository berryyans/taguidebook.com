<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>
<div class="container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">List</li>
        <li class="breadcrumb-item"><a href="<?php echo base_url() . 'manage_top_menumanager/' ?>">Data</a></li>
        <li class="breadcrumb-item active">Add</li>
        <li class="breadcrumb-item"><a href="<?php echo base_url() . 'manage_top_menumanager/sorting' ?>">Sorting</a></li>
    </ol>
</div>
<div class="container">
    <div class="container" style="background: #f5f5f5;padding-top: 20px;">
        <h3>Tambah Top Menu Manager</h3>
        <br>
        <?php echo form_open_multipart('manage_top_menumanager/tambahtopmenumanager','id = frmmenus'); ?>
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
                        foreach ($top_menus as $menu)
                        {
                            echo '<option value="' . $menu->id_menu . '"' . ($this->session->flashdata('top_menu') == $menu->id_menu ? 'selected' : '') . '>' . $menu->menu_title . '</option>';
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
                       value="<?php echo $this->session->flashdata('title_id'); ?>"/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2">
                <label>Content</label>
            </div>
            <div class="col-md-10">
                <?php //echo $this->ckeditor->editor("content_id", $this->session->flashdata('content_id')); ?>
                <textarea id="summernote" name="content_id"><?=$this->session->flashdata('content_id'); ?></textarea>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2">
                <label>URL</label>
            </div>
            <div class="col-md-10">
                <input name="url" type="text" class="form-control"
                       value="<?php echo $this->session->flashdata('url'); ?>"/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2">
                <label>Target</label>
            </div>
            <div class="col-md-10">
                <input type="radio" name="target" value="_blank"> New Window
                <input type="radio" name="target" value="_self"> Same Window<br>
            </div>
        </div>
        <br>
       <div class="row">
            <div class="col-md-2">
                <label>Status</label>
            </div>
            <div class="col-md-10">
                <input type="radio" name="status" value="0"> Show
                <input type="radio" name="status" value="1"> Hidden<br>
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
