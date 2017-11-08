<h1>Containerschepen</h1>

<div class="row">
    <div class="btn-group pull-right" style="margin: 0 15px 15px 0;">
        <a href="<?php echo base_url();?>container_ships/create" class="btn btn-primary btn-flat" style="padding: 4px 10px;">
            <i class="fa fa-plus" aria-hidden="true"></i> Schip toevoegen
        </a>
    </div>
</div>

<?php if(isset($ships)): ?>
<div class="table-responsive">
	<table class="table table-striped">
	  <thead>
	    <tr>
	      <th scope="col">IMO nummer</th>
	      <th scope="col">Scheepsaam</th>
	      <th scope="col">Bouwjaar</th>
	      <th scope="col">Thuishaven</th>
	      <th scope="col">Thuisland</th>
	      <th scope="col">MMSI-nummer</th>
	      <th scope="col">Lengte (meter)</th>
	      <th scope="col">Breedte (meter)</th>
	      <th scope="col">Diepte</th>
		  <th scope="col">Draagvermogen (ton)</th>
		  <th scope="col">Lengte ruim (meter)</th>
		  <th scope="col">Breedte ruim (meter)</th>
		  <th scope="col">Hoogte ruim (meter)</th>
		  <th scope="col">Maximaal gevaarlijke stoffen</th>
		  <th scope="col">Maximaal gewicht totaal (ton)</th>
		  <th scope="col">Maximaal gewicht 1 stapel (ton)</th>
		  <th scope="col">Acties</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php foreach ($ships as $row): ?>
	    <tr>
	      <td><?php echo $row['IMO_number']; ?></td>
	      <td><?php echo $row['name']; ?></td>
	      <td><?php echo $row['year_build']; ?></td>
	      <td><?php echo $row['home_port']; ?></td>
	      <td><?php echo $row['home_country']; ?></td>
	      <td><?php echo $row['MMSI_number']; ?></td>
	      <td><?php echo $row['length_m']; ?></td>
	      <td><?php echo $row['width_m']; ?></td>
	      <td><?php echo $row['depth']; ?></td>
	      <td><?php echo $row['load_capacity_ton']; ?></td>
	      <td><?php echo $row['length_hold_m']; ?></td>
	      <td><?php echo $row['width_hold_m']; ?></td>
	      <td><?php echo $row['height_hold_m']; ?></td>
	      <td><?php echo $row['max_hazardous_substances_x']; ?></td>
	      <td><?php echo $row['hold_max_total_floor_load_ton']; ?></td>
	      <td><?php echo $row['hold_max_column_floor_load_ton']; ?></td>
	      <td>
            <div class="btn-group">
                <a href="<?php echo site_url('/container_ships/edit/'.$row['id']); ?>" class="btn btn-default btn-flat"><i class="fa fa-pencil"></i></a>
                <?php if(isset($_SESSION['employeeId']) && $_SESSION['role_id'] == 1): ?>
                	<a href="<?php echo site_url('/container_ships/delete/'.$row['id']); ?>" class="btn btn-default btn-flat" onclick="return confirm('Weet je het zeker?')"><i class="fa fa-trash"></i></a>
            	<?php endif; ?>
            </div>
          </td>
	    </tr>
		<?php endforeach; ?>
	  </tbody>
	</table>
</div>
<?php endif; ?>
