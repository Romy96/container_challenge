<div class="col-md-12">
    <div class="modal-dialog" style="margin-bottom:0">
        <div class="modal-content">
	   		<div class="panel-heading">
	        	<h3 class="panel-title">Inloggen</h3>
	    	</div>
	        <div class="panel-body">
	            <?php echo form_open('login') ?>
					<?php echo validation_errors(); ?>
	                <fieldset>
	                    <div class="form-group">
	                        <input class="form-control" placeholder="E-mail" name="email" type="email">
	                    </div>
	                    <div class="form-group">
	                        <input class="form-control" placeholder="Wachtwoord" name="password" type="password">
	                    </div>
	                        <input class="btn btn-default"  type="submit" name="login" value="Inloggen">
	                </fieldset>
	            </form>
	        </div>
	    </div>
	</div>
</div>