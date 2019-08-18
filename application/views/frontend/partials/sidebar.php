    <aside class="sidebar no-top-spacing">

        <style type="text/css">
            img.borderthumb {
                border: 5px solid #E1E1E1;
            }
        </style>
        <div class="content-box margin-top-0 no-padding">

            <div class="content-box margin-top-0 no-padding">
                <div class="box fokus">
                    <div class="title">
                        <div class="clearfik"></div>
                        <div class="logo">BERITA TERKINI</div>
                        <div class="clearfik"></div>
                        <div class="row">
                            <div style="border-bottom:5px solid #FF880D;width:150px;margin-left:0px;"></div>
                        </div>
                    </div>
                </div>

                <div class="tab-content social-tabs no-border">
                    <div class="tab-pane active" id="beritaterkini" style="padding: 0px 0px;">
                        <ul class="media-list">
                            <?php
                            $index_berita_terkini = 0;
                            foreach ($berita_terkini as $rberita_terkini){?>
                            <li class="media margin-bottom-20">
                                <div class="media-left">
                                    <img class="media-object borderthumb" src="<?=site_url()."uploads/beritas/".$rberita_terkini->img;?>" alt="<?=$rberita_terkini->title;?>" width="125" height="70">
                                </div> <!-- .media-left -->

                                <div class="media-body">
                                    <p class="small text-muted no-bottom-spacing">
                                        <i class="fa fa-calendar"></i>&nbsp;
                                        <?=format_date_in(2,substr($rberita_terkini->date,0,10));?>
                                    </p>
                                    <h4 class="media-heading margin-top-5">
                                        <a href="<?=base_url()."berita/detail/".$rberita_terkini->id_berita;?>">
                                        <?=$rberita_terkini->title;?>
                                        </a>
                                    </h4>
                                </div> <!-- .media-body -->
                            </li>
                            <?php
                            }
                            ?>

                        </ul>
                    </div> <!-- #berita -->
                </div> <!-- .tab-content -->
            </div>

        </div>
        <!-- .content-box -->

        <div class="content-box no-padding">
            <div class="box fokus">
                <div class="title">
                    <div class="clearfik"></div>
                    <div class="logo">PENGUMUMAN</div>
                    <div class="clearfik"></div>
                    <div class="row">
                        <div style="border-bottom:5px solid #FF880D;width:150px;margin-left:0px;"></div>
                    </div>
                </div>
            </div>

            <div class="tab-content social-tabs no-border">
                <div class="tab-pane active" id="beritaterkini" style="padding: 0px 0px;">
                    <ul class="media-list">
                        <?php
                        $index_pengumuman_terkini = 0;
                        foreach ($pengumuman_terkini as $rpengumuman_terkini){?>

                        <li class="media margin-bottom-20">
                            <div class="media-left">
                                <img class="media-object borderthumb" src="<?php echo site_url();?>assets/images/null.png" alt="<?=$rpengumuman_terkini->title;?>" width="125" height="70">
                            </div>

                            <div class="media-body">
                                <p class="small text-muted no-bottom-spacing">
                                    <i class="fa fa-calendar"></i>&nbsp; <?=format_date_in(2,substr($rpengumuman_terkini->date,0,10));?> </p>
                                <h4 class="media-heading margin-top-5">
                                    <a href="<?=base_url()."pengumuman/detail/".$rpengumuman_terkini->id_pengumuman;?>">
                                        <?=$rpengumuman_terkini->title;?>                             
                                    </a>
                                </h4>
                            </div>
                            <!-- .media-body -->
                        </li>
                       <?php
                       }
                       ?>
                        

                    </ul>
                </div>
                <!-- #pengumuman -->
            </div>
            <!-- .tab-content -->
        </div>
        <!-- .content-box -->

        <div class="content-box margin-top-0" style="padding: 0px;">
            <div class="box fokus">
                <div class="title">
                    <div class="clearfik"></div>
                    <div class="logo">AGENDA KEGIATAN</div>
                    <div class="clearfik"></div>
                    <div class="row">
                        <div style="border-bottom:5px solid #FF880D;width:150px;margin-left:0px;"></div>
                    </div>
                </div>
            </div>

            <div class="tab-content social-tabs no-border">
                <div class="tab-pane active" id="beritaterkini" style="padding: 0px 0px;">
                    <ul class="media-list">
                         <?php
                        $index_agenda_terkini = 0;
                        foreach ($agenda_terkini as $ragenda_terkini){?>

                        <li class="media margin-bottom-20">
                            <div class="media-left">
                                <div class="event-date margin-bottom-5">
                                    <p><?=date('d', strtotime($ragenda_terkini->start_date));?></p>
                                    <small class="uppercase"><?=date('M', mktime(0, 0, 0, $ragenda_terkini->start_date)); ?></small>
                                </div>
                            </div>
                            <div class="media-body">
                                <p class="small text-muted no-bottom-spacing">
                                    <i class="fa fa-calendar"></i>&nbsp; <?=format_date_in(2,substr($ragenda_terkini->start_date,0,10));?> 
                                </p>
                                <h4 class="media-heading margin-top-5">
                                <a href="<?=base_url()."agenda/detail/".$ragenda_terkini->id_agenda;?>">
                                <?=$ragenda_terkini->title;?>                             
                                </a>
                                </h4>
                            </div>
                            <!-- .media-body -->
                        </li>
                       <?php
                       }
                       ?>
                        
                    </ul>
                </div>
                <!-- #agenda -->
            </div>
            <!-- .tab-content -->
        </div>
        <!-- .content-box -->
    </aside>