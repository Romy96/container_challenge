<h1>Routes</h1>

<div class="row">
    <div class="btn-group pull-right" style="margin: 0 15px 15px 0;">
        <a href="<?php echo base_url();?>routes/create_route" class="btn btn-primary btn-flat" style="padding: 4px 10px;">
            <i class="fa fa-plus" aria-hidden="true"></i> Route toevoegen
        </a>
    </div>
    <div class="btn-group pull-right" style="margin: 0 15px 15px 0;">
        <a href="<?php echo base_url();?>routes/create_port" class="btn btn-primary btn-flat" style="padding: 4px 10px;">
            <i class="fa fa-plus" aria-hidden="true"></i> Haven toevoegen
        </a>
    </div>
</div>

<?php if(isset($routes)): ?>
<div class="table">
	<table class="table table-striped">
	  <thead>
	    <tr>
	      <th scope="col">Naam schip</th>
	      <th scope="col">Start haven</th>
	      <th scope="col">Bestemming haven</th>
	      <th scope="col">Vracht</th>
	      <th scope="col">Datum en tijd vertrek</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php foreach ($routes as $row): ?>
	    <tr>
	      <td><?php echo $row['name_ship']; ?></td>
	      <td><?php echo $row['start_port']; ?></td>
	      <td><?php echo $row['destination_port']; ?></td>
	      <td><?php echo $row['cargo']; ?></td>
	      <td><?php echo $row['date_time_departure']; ?></td>
	    </tr>
		<?php endforeach; ?>
	  </tbody>
	</table>
</div>
<?php endif; ?>
