<?php
if ($this->session->logged_in_member){
$myaccount = $this->myglobal->getLoggedInMember();
}
?>
<div class="navbar navbar-default navbar-fixed-top" style="background-color:#003580;color:#ffffff;">
      <div class="container">
        <div class="navbar-header">
          <a href="<?=site_url();?>" class="navbar-brand"><img src="<?php echo site_url();?>uploads/settings/<?=$settings->company_logo;?>" height="25" /></a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li  class="" ><a href="<?=site_url();?>" style="color:#FFFFFF;">Home</a></li>
                <?php
                if (isset($top_menumanager)){
                $itop_menumanager = 0;
                foreach ($top_menumanager as $htop_menumanager){?>
                <li><a href="<?=$htop_menumanager->url;?>" target="<?=$htop_menumanager->menu_target;?>" style="color:#FFFFFF;"><?=$htop_menumanager->menu_title;?></a></li>
                <?php
                $itop_menumanager++;
                }
                }
                ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color: #ffffff;margin-bottom:-15px;"><span class="lang-xs lang-lbl" lang="en"><img src="<?php echo site_url();?>public/frontend/assets/img/lang/sg.png"></span> <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu" style="width: 10px">
                        <li style="width: 10px"><a href="/" style="width: 10px"><span class="lang-xs lang-lbl" lang="en"><img src="<?php echo site_url();?>public/frontend/assets/img/lang/ch.png"></span></a></li>
                        <li style="width: 10px"><a href="/" style="width: 10px"><span class="lang-xs lang-lbl" lang="en"><img src="<?php echo site_url();?>public/frontend/assets/img/lang/in.png"></span></a></li>
                        <li style="width: 10px"><a href="/" style="width: 10px"><span class="lang-xs lang-lbl" lang="en"><img src="<?php echo site_url();?>public/frontend/assets/img/lang/my.png"></span></a></li>
                        <li style="width: 10px"><a href="/" style="width: 10px"><span class="lang-xs lang-lbl" lang="en"><img src="<?php echo site_url();?>public/frontend/assets/img/lang/th.png"></span></a></li>
                        <li style="width: 10px"><a href="/" style="width: 10px"><span class="lang-xs lang-lbl" lang="en"><img src="<?php echo site_url();?>public/frontend/assets/img/lang/vt.png"></span></a></li>
                        <li style="width: 10px"><a href="/" style="width: 10px"><span class="lang-xs lang-lbl" lang="en"><img src="<?php echo site_url();?>public/frontend/assets/img/lang/kb.png"></span></a></li>
                        <li style="width: 10px"><a href="/" style="width: 10px"><span class="lang-xs lang-lbl" lang="en"><img src="<?php echo site_url();?>public/frontend/assets/img/lang/ls.png"></span></a></li>
                        
                    </ul>
                </li>
                <?php
                if (!$this->session->logged_in_member){?>
                <li class="dropdown" id="menuLogin"><a href="<?=base_url();?>member/verifyLogin" style="color:#FFFFFF;"><i class="glyphicon glyphicon-check"></i>&nbsp;Login</a></li>              
                <li class="dropdown" id="menuLogin"><a href="<?=base_url();?>member/openaccount" style="color:#FFFFFF;"><i class="glyphicon glyphicon-user"></i>&nbsp;Register</a></li>
                <?php
                }else{?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color: #ffffff;margin-bottom:-15px;">My Account<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu" style="width: 10px">
                        <li style="width: 10px"><a href="<?=base_url();?>member" style="width: 10px">Dasboard</a></li>
                        <li style="width: 10px"><a href="<?=base_url();?>persprofile" style="width: 10px">Edit Account</a></li>
                        <li style="width: 10px"><a href="<?=base_url();?>persprofile/change_password" style="width: 10px">Change Password</a></li>
                        <li style="width: 10px"><a href="<?=base_url();?>member/logout" style="width: 10px">Logout</a></li>
                        
                    </ul>
                </li>  
                <?php
                }
                ?>
            </ul>

            
        </div>

      </div>
    </div>