<h1>Haven toevoegen</h1>

<?php echo form_open('routes/create_port') ?>
	<?php echo validation_errors(); ?>
	  <div class="form-group">
	    <label for="name">Naam:</label>
	    <input type="text" class="form-control" name="name">
	  </div>
	  <div class="form-group">
	    <label for="adress">Adres:</label>
	    <input type="text" class="form-control" name="adress">
	  </div>
	  <div class="form-group">
	    <label for="country">Land:</label>
	    <input type="text" class="form-control" name="country">
	  </div>
	  <div class="form-group">
	    <label for="phone_number">Telefoonnummer:</label>
	    <input type="number" class="form-control" name="phone_number">
	  </div>
	  <input type="submit" class="btn btn-default" value="Toevoegen">
</form>

