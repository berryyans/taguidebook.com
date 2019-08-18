<div class="container">
    <div class="row">
    	<div class="col-sm-12">
    		<h3>Laporan Transaksi Vendor</h3>
    		<hr>
		    <form method="post" name="frm" action="">
			    <table class="table table-bordered table-responsive">
			    	<tr>
						<td width="150" height="25">Sejak Tanggal</td>
						<td><input type="text" data-format="yyyy-mm-dd" name="start_date" id="start_date" size="30" class="form-control" autocomplete="off" /></td>
					</tr>
					<tr>
						<td width="150" height="25">Sampai Tanggal</td>
						<td><input type="text" data-format="yyyy-mm-dd" name="end_date" id="end_date" size="30"class="form-control" autocomplete="off" /></td>
					<tr>
						<td width="150" height="25">Pilih Vendor</td>
						<td>
						<select name="id_vendor">
							<?php
							foreach ($vendor as $vendor){?>
							<option value="<?=$vendor->id_vendor;?>"><?=$vendor->nama;?></option>
							<?php
							}
							?>
						</select>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
						<input type="submit" name="btnKirim" class="btn btn-md btn-success" value="Kirim"/>
						<input type="reset" name="btnReset" class="btn btn-md btn-warning" value="Reset"/>
						</td>
					</tr>
				</table>
		   	</form>
		   	<script type="text/javascript">
            $(function () {
                $('#start_date').datetimepicker({
                   pickTime: false,
	               format: 'yyyy-dd-mm'
	            });
                $('#end_date').datetimepicker({
                   pickTime: false,
	               format: 'yyyy-dd-mm'
	            });
	        });
        	</script>
		</div>
    </div>
    <?php
    if(!empty($post_data)){?>
    <div class="row">
    	<div class="col-sm-12">
    		<div class="alert alert-success">
    			Hasil Pecarian Transaksi bersadarkan Tanggal <?=$post_data['start_date'];?> s/d <?=$post_data['end_date'];?>, Vendor <?=$vendornya->nama;?>
    		</div>
    	</div>
    </div>
    <?php
	}
	?>
</div>