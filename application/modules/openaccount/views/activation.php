<div class="row">
	<div class="col-sm-12">
		<div class="text-center">
			<h3>Account Activation</h3>
			<?=$pesan;?>
		</div>
	</div>  
</div>
<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
    <?php echo form_open('dasboard_member/verifyLogin', 'class="form-signin text-center"'); ?>
        <div class="form-group col-sm-12">
            <input red-so-email="" class="form-control" name="email" placeholder="Email" type="text">
        </div>
        <div class="form-group col-sm-12">
            <input red-so-pass="" class="form-control" name="password" placeholder="Password" type="password">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 login-icon-box">
            <button type="submit" class="btn btn-block login_btn">Go !</button>
        </div>
    </form>
    </div>
    <div class="col-sm-4"></div>
</div>