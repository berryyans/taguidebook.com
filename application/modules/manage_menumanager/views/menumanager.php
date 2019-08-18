<div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div> 
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Data</li>
            <li class="breadcrumb-item"><a href="<?php echo base_url() . 'manage_menumanager/tambahMenuManager' ?>">Add</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url() . 'manage_menumanager/sorting' ?>">Sorting</a></li>
        </ol>
    </nav>
</div>
<div class="container">
    <div class="container" style="background: #f5f5f5;padding-top: 20px;">
    <h3><span class="glyphicon glyphicon-file"></span>Menu Manager</h3>
    <div class="row">
        <div class="col-md-6">
            <?php if (isset($search))
            { ?>
                <p style="padding: 16px;    background-color: #10be28; color: white;">Search results by keyword <?php echo isset($search) ? $search : "" ?></p>

                <?php $this->session->set_flashdata('search', $search);
            } ?>
        </div>
        <div class="col-md-6">
            <?php echo form_open('manage_menumanager/'); ?>
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
            <button class="btn btn-default" type="submit">Search</button>
            </span>
            </div><!-- /input-group -->
            <?php echo form_close()?>
        </div>
    </div>
    <br>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>No</th>
            <th>Action</th>
            <th>Title</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if (isset($datas))
        {
            $index = 1;
            if(isset($page)&&$page!=0)
                $index = $index+$page;
            foreach ($datas as $data)
            {
                echo '<tr>';
                echo '<td>' . $index . '</td>';
                echo '<td><a href="' . base_url() . 'manage_menumanager/editmenumanager/' . $data->id . '" class="btn btn-primary">Edit</a>&nbsp;&nbsp;&nbsp;<button onclick="confirmDelete('.$data->id.',\'' . base_url() . 'manage_menumanager/deleteMenuManager/\')" class="btn btn-danger">Delete</button></td>';
                echo '<td>' . $data->menu_title . '</td>';
                if($data->status==0)
                    echo '<td class="text-center"><span style="font-weight: bold;padding: 1% 6%;color: white;background: green">Show</span></td>';
                if($data->status==1)
                    echo '<td class="text-center"><span style="font-weight: bold;padding: 1% 6%;color: white;background: grey">Hidden</span></td>';
                echo '</tr>';
                $index++;
            }
        }
        ?>
        </tbody>
    </table>
    </div>
</div>
<?php echo validation_errors(); ?>
<?php if (isset($result)) echo $result; ?>

<style>
    #notifications {
    cursor: pointer;
    position: fixed;
    right: 0px;
    z-index: 9999;
    bottom: 0px;
    margin-bottom: 22px;
    margin-right: 15px;
    min-width: 300px; 
    max-width: 800px;  
}
</style>
<script>   
    $('#notifications').slideDown('slow').delay(3000).slideUp('slow');
</script>
