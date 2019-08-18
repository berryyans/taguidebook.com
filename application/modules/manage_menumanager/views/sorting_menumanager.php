<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/nestle.css">
<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>assets/css/alertify.css">
<script src="<?php echo site_url(); ?>assets/js/alertify.js"></script>
<script src="<?php echo site_url(); ?>assets/js/alertConfirm.js"></script>
<script src="<?php echo site_url(); ?>assets/js/jquery.nestable.js"></script>
<script type="text/javascript">
    function showmenus() {
    $('#webmenus').empty();
    //both are assumed to have values. Any error will be returned from the server
    $.ajax({
        type: "GET",
        url: "<?=base_url();?>manage_menumanager/showmenus",
        data: {},
        dataType: "json",
        cache: "false",
        success: function (result) {
            var total = result.length;
            if (total == 0) {
                return false;
            }
            else if (total === 1) {
                var webmenus = $('#webmenus');
                webmenus.append('<li class="dd-item" data-id="' + result[0]["id"] + '"><div class="dd-handle">' + result[0]["name"] + '<span class="pull-right">'+result[counter]["link"]+'</span></div></li>');
            }
            else if (total > 1) {
                var webmenus = $('#webmenus');
                var counter = 0;
                var elems = '';
                while (counter < total) {
                    elems = elems + '<li class="dd-item" data-id="' + result[counter]["id"] +'"><div class="dd-handle">' + result[counter]["name"] + '<span class="pull-right">'+result[counter]["link"]+'</span></div>';
                    if (counter < total - 1) {
                        if (result[counter + 1]['level'] > result[counter]['level']) {
                            elems = elems + '<ol class="dd-list">';
                        }
                        else {
                            elems = elems + '</li>';
                        }
                        if (result[counter + 1]['level'] < result[counter]['level']) {
                            elems = elems + '</ol></li>'.repeat(result[counter]['level'] - result[counter + 1]['level']);
                            // echo str_repeat('</ol></li>' . "\n",$categories[$i]['level'] - $categories[$i + 1]['level']);
                        }
                    }//if(counter<total-1){
                    else {
                        elems = elems + '</li>';
                        //  echo str_repeat('</ol></li>' . "\n", $categories[$i]['level']);
                        elems = elems + '</ol></li>'.repeat(result[counter]['level']);
                    }
                    counter++;
                }//en while
                webmenus.append(elems);
                $('#nestable').nestable();
            }
        }
    });
}
</script>
<div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url() . 'manage_menumanager/' ?>">List</a></li>
        <li class="breadcrumb-item"><a href="<?php echo base_url() . 'manage_menumanager/tambahmenumanager' ?>">Add</a></li>
        <li class="breadcrumb-item active">Sorting</li>
      </ol>
    </nav>
</div>

<div class="container">
    <div class="container" style="background: #f5f5f5;padding-top: 20px;">
        <!-- Main content -->
        <div class="col-sm-12">
            <div class="box">
                <!-- /.box-userer -->
                <div class="box-body">
                    <?php
                    echo form_open('#', 'id = frmmenus');
                    echo form_close();
                    ?>
                    <span id="generate" style="color:#FF0000; font-weight:bold;"></span>
                    <div style="width:100%; height:2px; clear:both;">&nbsp;</div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="menustructure">
                                <div class="dd" id="nestable">
                                    <ol class="dd-list" id="webmenus">

                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <div class="text-center">
                <a href="<?php echo base_url() . 'manage_menumanager/' ?>" class="btn btn-warning">Cancel</a>
                <button id="savenavmenus" class="btn btn-success">
                    Save Sorting
                </button>
            </div>
        </div>
    </div>
</div>
<script>
    var updateOutput = function (e) {
        var list = e.length ? e : $(e.target),
            output = list.data('output');
        if (window.JSON) {
            return (window.JSON.stringify(list.nestable('serialize')));//, null, 2));
        } else {
            return false;
        }
    };

    $(document).ready(function () {
        showmenus();

        $('#nestable').nestable({maxDepth: 4});

        $("#savenavmenus").click(function () {
            var structure = updateOutput($('#nestable').data('output', $('#generate')));

            if (structure == false) {
                showalert('error', languages_navmenu['oldbrowser']);
                return false;
            }

            var postForm = $('#frmmenus').serialize() + '&s=' + structure;
            $.ajax({
                type: "POST",
                url: "<?=base_url();?>manage_menumanager/updateSorting",
                data: postForm,
                dataType: "json",
                cache: "false",
                success: function (result) {
                    //remove it
                    if (result == '1') {
                        //success
                        nestlelistchanged = false;
                        alertify.alert('Notification', 'Sorting data has been successfully', function () {
                            alertify.success('Successful');
                        });
                    }
                    else {
                        alertify.alert('Notification', 'Failed', function () {
                            alertify.success('Sorting data Failed');
                        });
                    }
                },
                fail: function (result) {
                    showalert('error', languages_navmenu['servererror']);
                }
            });
        });
        $('#generate').html('');
    });
</script>