<h1>Schip toevoegen</h1>

<?php echo form_open('container_ships/create') ?>
	<?php echo validation_errors(); ?>
	  <div class="form-group">
	    <label for="IMO_number">IMO nummer:</label>
	    <input type="number" class="form-control" name="IMO_number">
	  </div>
	  <div class="form-group">
	    <label for="name">Scheepsnaam:</label>
	    <input type="text" class="form-control" name="name">
	  </div>
	  <div class="form-group">
	    <label for="year_build">Bouwjaar:</label>
	    <input type="number" class="form-control" name="year_build">
	  </div>
	  <div class="form-group">
	    <label for="home_port">Thuishaven:</label>
	    <input type="text" class="form-control" name="home_port">
	  </div>
	  <div class="form-group">
	    <label for="home_country">Thuisland:</label>
	    <input type="text" class="form-control" name="home_country">
	  </div>
	  <div class="form-group">
	    <label for="MMSI_number">MMSI-nummer:</label>
	    <input type="number" class="form-control" name="MMSI_number">
	  </div>
	  <div class="form-group">
	    <label for="length_m">Lengte (in meters):</label>
	    <input type="number" class="form-control" name="length_m">
	  </div>
	  <div class="form-group">
	    <label for="width_m">Breedte (in meters):</label>
	    <input type="number" class="form-control" name="width_m">
	  </div>
	  <div class="form-group">
	    <label for="depth">Diepte:</label>
	    <input type="number" class="form-control" name="depth">
	  </div>
	  <div class="form-group">
	    <label for="load_capacity_ton">Draagvermogen (in ton):</label>
	    <input type="number" class="form-control" name="load_capacity_ton">
	  </div>
	  <div class="form-group">
	    <label for="length_hold_m">Lengte ruim (in meters):</label>
	    <input type="number" class="form-control" name="length_hold_m">
	  </div>
	  <div class="form-group">
	    <label for="width_hold_m">Breedte ruim (in meters):</label>
	    <input type="number" class="form-control" name="width_hold_m">
	  </div>
	  <div class="form-group">
	    <label for="height_hold_m">Hoogte ruim (in meters):</label>
	    <input type="number" class="form-control" name="height_hold_m">
	  </div>
	  <div class="form-group">
	    <label for="max_hazardous_substances_x">Maximaal gevaarlijke stoffen:</label>
	    <input type="number" class="form-control" name="max_hazardous_substances_x">
	  </div>
	  <div class="form-group">
	    <label for="hold_max_total_floor_load_ton">Maximaal gewicht totaal (in ton):</label>
	    <input type="number" class="form-control" name="hold_max_total_floor_load_ton">
	  </div>
	  <div class="form-group">
	    <label for="hold_max_column_floor_load_ton">Maximaal gewicht 1 stapel (in ton):</label>
	    <input type="number" class="form-control" name="hold_max_column_floor_load_ton">
	  </div>
	  <input type="submit" class="btn btn-default" value="Toevoegen">
</form>

