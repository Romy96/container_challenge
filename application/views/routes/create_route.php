<h1>Schip toevoegen</h1>

<?php echo form_open('routes/create_route') ?>
	<?php echo validation_errors(); ?>
	  <div class="form-group">
	    <label for="name_ship">Scheepsnaam:</label>
	    <select class="form-control" name="name_ship">
	    	<?php if(isset($ships)): ?>
	    		<?php foreach($ships as $row): ?>
		    		<option name="name_ship" value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
		    	<?php endforeach; ?>
		    <?php endif; ?>
		</select>
	  </div>
	  <div class="form-group">
	    <label for="start_port">Start haven:</label>
	    <select class="form-control" name="start_port">
	    	<?php if(isset($ports)): ?>
	    		<?php foreach($ports as $row): ?>
		    		<option name="start_port" value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
		    	<?php endforeach; ?>
		    <?php endif; ?>
		</select>
	  </div>
	  <div class="form-group">
	    <label for="destination_port">Bestemming haven:</label>
	    <select class="form-control" name="destination_port">
	    	<?php if(isset($ports)): ?>
	    		<?php foreach($ports as $row): ?>
		    		<option name="destination_port" value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
		    	<?php endforeach; ?>
		    <?php endif; ?>
		</select>
	  </div>
	  <div class="form-group">
	    <label for="cargo">Lading:</label>
	    <textarea type="text" rows="2" class="form-control" name="cargo"></textarea>
	  </div>
	  <div class="form-group">
	    <label for="date_time_departure">Datum en tijd vertrek:</label>
	    <input type="datetime-local" class="form-control" name="date_time_departure">
	  </div>
	  <input type="submit" class="btn btn-default" value="Toevoegen">
</form>

