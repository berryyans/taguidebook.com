	  <link rel="stylesheet" type="text/css" media="screen" href="../../assets/css/bootstrap-datetimepicker.min.css">
	  	  
	  <div class="page-header">
        <h1 align="center">Selamat Datang!</h1>
      </div> 
	  <?php 
	  include "./content/control.php";
	  
	  if($_GET[page]=="list"){ ?>
	  
      <?php 
	  //include "./content/menu.php";
      ?>
      
      <?php } else if($_GET[page]=="add") { ?>
      <!-- Forms
      ================================================== -->
      <div class="bs-docs-section">
       	<?php 
		//include "menu.php";
		?>
        <p>
            <div class="well">
              <form enctype="multipart/form-data" class="bs-example form-horizontal" method="POST" >
                <fieldset>
                  <legend>Tulis Artikel</legend>   
				  				  
                  <div class="form-group">
					<label for="dtp_input1" class="col-sm-2 control-label">Date</label>
					<div class="input-group date form_datetime col-sm-3" data-date="<?php if(isset($_POST["submit"])){echo $_POST["date"];}else{ echo date("Y-m-d h:i:s"); }?>" data-date-format="yyyy-mm-dd hh:ii:ss" data-link-field="dtp_input1" style="padding-left:15px;">
						<input class="form-control" type="text" value="<?php if(isset($_POST["submit"])){echo $_POST["show_date"];}else{ echo date("Y-m-d h:i:s"); }?>" name="date" readonly>
						<span class="input-group-addon"><i class="glyphicon glyphicon-remove"></i></span>
						<span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
					</div>
				  </div>
				  
				  <div class="form-group">
	                <label for="dtp_input1" class="col-sm-2 control-label">Show Date</label>
	                <div class="input-group date form_datetime col-sm-3" data-date="<?php if(isset($_POST["submit"])){echo $_POST["date"];}else{ echo date("Y-m-d h:i:s"); }?>" data-date-format="yyyy-mm-dd hh:ii" data-link-field="dtp_input1" style="padding-left:15px;">
						<input class="form-control" type="text" name="show_date" value="<?php if(isset($_POST["submit"])){echo $_POST["show_date"];}else{ echo date("Y-m-d h:i:s"); }?>" readonly>
						<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
						<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
					</div>
				  </div> 
				  
				  <?php
				  /*
				  <!-- Select Basic -->
				  <div class="form-group">
					  <label class="col-md-2 control-label" for="category">Category</label>
					  <div class="col-md-4">
						<select id="category" name="category" class="form-control">
						  <option value="">All Category</option>
						  <?php
						  $category=mysql_query("select * from category order by title asc");
						  while($dcategory=mysql_fetch_array($category)){
						  ?>
						  <option value="<?php echo $dcategory['alias'];?>"><?php echo $dcategory['title'];?></option>
						  <?php
						  }
						  ?>
						</select>
					  </div>
				  </div>

				  */
				  ?>
				  

				  <!-- Select Basic -->
				  <div class="form-group">
				  <label class="col-md-2 control-label" for="region">Region</label>
				  <div class="col-md-4">
					<select id="region" name="region" class="form-control">
					  <option value="">All Region</option>
					  <?php
					  $region=mysql_query("select * from region order by title asc");
					  while($dregion=mysql_fetch_array($region)){
						  ?>
						  <option value="<?php echo $dregion['alias'];?>"><?php echo $dregion['title'];?></option>
						  <?php
					  }
					  ?>
					</select>
				  </div>
				  </div>

				
				  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-10">
                      <input name="title" type="text" class="form-control" id="title" placeholder="title" value="<?php if(isset($_POST["submit"])){echo $_POST["title"];}else{ echo $baris2["title"]; }?>">
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Sub Title</label>
                    <div class="col-sm-10">
                      <input name="subtitle" type="text" class="form-control" id="subtitle" placeholder="subtitle" value="<?php if(isset($_POST["submit"])){echo $_POST["subtitle"];}else{ echo $baris2["subtitle"]; }?>">
                    </div>
                  </div>
                  
				  <div class="form-group">
                    <label for="isi" class="col-sm-2 control-label">Short Content</label>
                    <div class="col-sm-10">
                      <textarea class="ckeditor" name="short_content" rows="10" id="short_content"><?php if(isset($_POST[submit])){ echo $_POST["short_content"]; }else { echo $baris2["short_content"]; } ?></textarea>
                    </div>
                  </div>
                  
				  <div class="form-group">
                    <label for="isi" class="col-sm-2 control-label">Content</label>
                    <div class="col-sm-10">
                      <textarea class="ckeditor" cols="50" name="content" rows="10" id="content">
						<?php if(isset($_POST[submit])){ echo $_POST["content"]; }else { echo $baris2["content"]; } ?>
                      </textarea>
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label for="foto" class="col-sm-2 control-label">Foto</label>
                    <div class="col-sm-10">
                      <input type="file" name="img" id="img">
                      <span class="help-block">Ukuran 996x498 Pixel.</span>
                    </div>
                  </div>
				  
				   <div class="form-group">
                    <label for="source_image" class="col-sm-2 control-label">Source Image</label>
                    <div class="col-sm-10">
                      <input name="source_image" type="text" class="form-control" id="source_image" placeholder="source_image" value="<?php if(isset($_POST["submit"])){echo $_POST["source_image"];}?>" />
                    </div>
                  </div>
				  <?php/*
				  <div class="form-group">
                    <label for="watermark" class="col-lg-2 control-label">Watermark Image</label>
                    <div class="col-lg-10">
                      <input name="watermark" type="checkbox" id="watermark" value="Y" <?php if($_POST["sharetwit"]=="Y"){echo "checked";}?> /> Please check this for create watermark image automaticly
                    </div>
                  </div>
				  */?>
				 
				  <div class="form-group">
                    <label for="tags" class="col-sm-2 control-label">Tags</label>
                    <div class="col-sm-10">
					<input type="text" name="tags" placeholder="Tags, dipisahkan oleh ; (semicolon) " class="form-control"/>
					</div>
                  </div>
				  
				  <?php /*
				  <!-- Text input-->
				 <div class="form-group">
				  <label class="col-md-2 control-label" for="wartawan">Wartawan</label>  
				  <div class="col-md-10">
				  <input id="wartawan" name="wartawan" type="text" placeholder="Wartawan" class="form-control input-md" value="<?php if(isset($_POST["submit"])){echo $_POST["wartawan"];}?>">
					
				  </div>
				 </div>
				  
                  <div class="form-group">
                    <label for="hit" class="col-sm-2 control-label">Hit</label>
                    <div class="col-sm-10">
                      <input name="hit" type="text" class="form-control" id="hit" placeholder="Hit" value="<?php if(isset($_POST["submit"])){echo $_POST["hit"];}?>" />
                    </div>
                  </div>  
				  <div class="form-group">
                    <label for="sharetwit" class="col-lg-2 control-label">Share to Twitter</label>
                    <div class="col-lg-10">
                      <input name="sharetwit" type="checkbox" id="sharetwit" value="Y" <?php if($_POST["sharetwit"]=="Y"){echo "checked";}?> />Please check this for share this post to twitter automaticly
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="hit" class="col-sm-2 control-label">Status</label>
                    <div class="col-sm-10">
					  <table>
						  <tr>
						    <td>
							<label>
						      <input type="radio" name="status" value="Show" <?php if($_POST["status"]=="Show"){echo "checked";}?> />
						      Show
							</label>
							</td>
							<td width="10px;">
							</td>
						    <td>
							<label>
						      <input type="radio" name="status" value="Hide" <?php if($_POST["status"]=="Hide"){echo "checked";}?> />
						      Hide
							</label>
							</td>
					    </tr>
					  </table>
					 </div>
                  </div>

                  */?>
				  
                  <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                      <button class="btn btn-default">Cancel</button> 
                      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                      <input name="posting" type="hidden" id="posting" value="save" /> 
                    </div>
                  </div>
                </fieldset>
              </forumahm>
            </div>
          </div>
      
      <?php } else if($_GET[page]=="update") { ?>
      <!-- Forms
      ================================================== -->
      <div class="bs-docs-section">
        <?php 
		include "menu.php";
		$query2="select * from posting where id='$_GET[kode]'";
		$hasil2=mysql_query($query2,$id_mysql);
		$baris2=mysql_fetch_array($hasil2);
		?>

        <p>
            <div class="well">
              <form enctype="multipart/form-data" class="bs-example form-horizontal" method="POST" >
                <fieldset>
                  <legend>Update Data</legend>
                 
                  <div class="form-group">
	                <label for="dtp_input1" class="col-sm-2 control-label">Date</label>
	                <div class="input-group date form_datetime col-sm-3" data-date="" data-date-format="yyyy-mm-dd hh:ii" data-link-field="dtp_input1" style="padding-left:15px;">
						<input class="form-control" type="text" name="date" value="<?php echo $baris2["date"];?>" readonly>
						<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
						<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
					</div>
				  </div>
				  
				  <div class="form-group">
	                <label for="dtp_input1" class="col-sm-2 control-label">Show Dates</label>
	                <div class="input-group date form_datetime col-sm-3" data-date="" data-date-format="yyyy-mm-dd hh:ii" data-link-field="dtp_input1" style="padding-left:15px;">
						<input class="form-control" type="text" name="show_date" value="<?php echo $baris2["show_date"];?>" readonly>
						<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
						<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
					</div>
				  </div>
				  
				  <!-- Select Basic -->
				  <?php/*
				  <div class="form-group">
					  <label class="col-md-2 control-label" for="category">Category</label>
					  <div class="col-md-4">
						<select id="category" name="category" class="form-control">
						  <option value="">All Category</option>
						  <?php
						  $category=mysql_query("select * from category order by title asc");
						  while($dcategory=mysql_fetch_array($category)){
						  ?>
						  <option value="<?php echo $dcategory['alias'];?>" <?php if($dcategory["alias"]==$baris2["id_category"]){echo "selected";}?>><?php echo $dcategory['title'];?></option>
						  <?php
						  }
						  ?>
						</select>
					  </div>
				  </div>
				  */
				  ?>
				  
				  <!-- Select Basic -->
				  <div class="form-group">
				  <label class="col-md-2 control-label" for="region">Region</label>
				  <div class="col-md-4">
					<select id="region" name="region" class="form-control">
					  <option value="">All Region</option>
					  <?php
					  $region=mysql_query("select * from region order by title asc");
					  while($dregion=mysql_fetch_array($region)){
						  ?>
						  <option value="<?php echo $dregion['alias'];?>" <?php if($dregion["alias"]==$baris2["id_region"]){echo "selected";}?>><?php echo $dregion['title'];?></option>
						  <?php
					  }
					  ?>
					</select>
				  </div>
				  </div>
                  
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-10">
                      <input name="title" type="text" class="form-control" id="title" placeholder="title" value="<?php if(isset($_POST["submit"])){echo $_POST["title"];}else{ echo $baris2["title"]; }?>">
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Sub Title</label>
                    <div class="col-sm-10">
                      <input name="subtitle" type="text" class="form-control" id="subtitle" placeholder="subtitle" value="<?php if(isset($_POST["submit"])){echo $_POST["subtitle"];}else{ echo $baris2["subtitle"]; }?>">
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label for="isi" class="col-sm-2 control-label">Short Content</label>
                    <div class="col-sm-10">
                      <textarea class="ckeditor" name="short_content" rows="10" id="short_content"><?php if(isset($_POST[submit])){ echo $_POST["short_content"]; }else { echo $baris2["short_content"]; } ?></textarea>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="isi" class="col-sm-2 control-label">Content</label>
                    <div class="col-sm-10">
                      <textarea class="ckeditor" cols="50" name="content" rows="10" id="content">
						<?php if(isset($_POST[submit])){ echo $_POST["content"]; }else { echo $baris2["content"]; } ?>
                      </textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="foto" class="col-sm-2 control-label">Foto</label>
                    <div class="col-sm-10">
                      <?php
					  if($baris2["img"]==""){?>
						 
					  
					  <img src="../assets/img/null.jpg" class="img-thumbnail responsive" alt="<?php echo $baris2[img];?>">
					  <?php
					  }else{
						  $lokasi="../assets/posting/".$baris2["img"];
						  if(!file_exists($lokasi)){?>
							<img src="../assets/img/notexists.jpg" class="img-thumbnail responsive" alt="<?php echo $baris2[img];?>">
						  <?php
						  }else{?>
							<img src="../assets/posting/<?php echo $baris2["img"];?>" class="img-thumbnail responsive" alt="<?php echo $baris2[img];?>">
						  <?php  
						  }
						
					  }
					  ?>
                      <input type="file" name="img" id="img">
                      <span class="help-block">Ukuran 996x498 Pixel.</span>
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label for="source_image" class="col-sm-2 control-label">Source Image</label>
                    <div class="col-sm-10">
                      <input name="source_image" type="text" class="form-control" id="source_image" placeholder="source_image" value="<?php if(isset($_POST["submit"])){echo $_POST["source_image"];}else{echo $baris2["source_image"];}?>" />
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label for="watermark" class="col-lg-2 control-label">Watermark Image</label>
                    <div class="col-lg-10">
                      <input name="watermark" type="checkbox" id="watermark" value="Y" <?php if($_POST["sharetwit"]=="Y"){echo "checked";}?> /> Please check this check list for create watermark image automaticly
                    </div>
                  </div>
				  
				  <div class="form-group">
                    <label for="tags" class="col-sm-2 control-label">Tags</label>
                    <div class="col-sm-10">
					<input type="text" name="tags" placeholder="Tags, separate by ; (semicolon) " class="form-control" value="<?php if(isset($_POST["submit"])){echo $_POST["tags"];}else{ echo $baris2["tags"];} ?>" />
                    </div>
                  </div>
				  
				  <div class="form-group">
				  <label class="col-md-2 control-label" for="wartawan">Wartawan</label>  
				  <div class="col-md-10">
				  <input id="wartawan" name="wartawan" type="text" placeholder="Wartawan" class="form-control input-md" value="<?php if(isset($_POST["submit"])){echo $_POST["wartawan"];}else{echo $baris2["wartawan"];}?>">
					
				  </div>
				 </div>
				  
                  <div class="form-group">
                    <label for="hit" class="col-sm-2 control-label">Hit</label>
                    <div class="col-sm-10">
                      <input name="hit" type="text" class="form-control" id="hit" placeholder="Hit" value="<?php if(isset($_POST["submit"])){echo $_POST["hit"];}else{echo $baris2["hit"];}?>" />
                    </div>
                  </div>  
		 <?php /*		  
				  <div class="form-group">
                    <label for="sharetwit" class="col-lg-2 control-label">Share to Twitter</label>
                    <div class="col-lg-10">
                      <input name="sharetwit" type="checkbox" id="sharetwit" value="Y" <?php if($_POST["sharetwit"]=="Y"){echo "checked";}?> />Please check this check list for share this post to twitter automaticly
                    </div>
                  </div>
                  */
                  ?>
                  
				  <div class="form-group">
                    <label for="hit" class="col-sm-2 control-label">Status</label>
                    <div class="col-sm-10">
					  <table>
						  <tr>
						    <td>
							<label>
						      <input type="radio" name="status" value="Show" <?php if($baris2["status"]=="Show"){echo "checked";}?> />
						      Show
							</label>
							</td>
							<td width="10px;">
							</td>
						    <td>
							<label>
						      <input type="radio" name="status" value="Hide" <?php if($baris2["status"]=="Hide"){echo "checked";}?> />
						      Hide
							</label>
							</td>
					    </tr>
					  </table>
					 </div>
                  </div>
				  
                  <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                      <button class="btn btn-default">Cancel</button> 
                      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                      <input name="posting" type="hidden" id="posting" value="update" /> 
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
          <?php
		  }
		  ?>
		  
		  <script type="text/javascript" src="assets/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
		  <script type="text/javascript" src="asset/js/bootstrap-tokenfield.js" charset="UTF-8"></script>
		  
          <script type="text/javascript">
				
				//in this line of code, to display the datetimepicker,  we used ‘form_datetime’ as an argument to be 
				//passed in javascript. This is for Date and Time.
					$('.form_datetime').datetimepicker({
						language:  'en',
						weekStart: 1,
						todayBtn:  1,
						autoclose: 1,
						todayHighlight: 1,
						startView: 2,
						forceParse: 0,
						showMeridian: 1
					});
					//this is for Date only	
						$('.form_date').datetimepicker({
							language:  'en',
							weekStart: 1,
							todayBtn:  1,
							autoclose: 1,
							todayHighlight: 1,
							startView: 2,
							minView: 2,
							forceParse: 0
						});
					//this is for Time Only	
						$('.form_time').datetimepicker({
							language:  'en',
							weekStart: 1,
							todayBtn:  1,
							autoclose: 1,
							todayHighlight: 1,
							startView: 1,
							minView: 0,
							maxView: 1,
							forceParse: 0
						});
				// This is a check for the CKEditor class. If not defined, the paths must be checked.
				if ( typeof CKEDITOR == 'undefined' )
				{
					document.write(
						'<strong><span style="color: #ff0000">Error</span>: CKEditor not found</strong>.' +
						'This sample assumes that CKEditor (not included with CKFinder) is installed in' +
						'the "/ckeditor/" path. If you have it installed in a different place, just edit' +
						'this file, changing the wrong paths in the &lt;head&gt; (line 5) and the "BasePath"' +
						'value (line 32).' ) ;
				}
				else
				{
					var editor1 = CKEDITOR.replace( 'content' );
					CKFinder.setupCKEditor( editor1, 'ckfinder/' );
				}
			</script>
			<script type="text/javascript">
				$(window).load(function() { $("#loading").fadeOut("slow"); })
			</script>