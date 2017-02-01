<?php require_once('header.php'); ?>
<?php 
	$str = file_get_contents('data.json'); 
	$data = json_decode($str,true);
?>

  	<div class="container">

  		<div class="row">
  			
  			<div class="columns small-12">
  				
  				<h1>Soft Skills Directory</h1>

  			</div>

  		</div>

  		<div class="row">
  			
  			<?php foreach ($data as $c): ?>
  			
	  			<div class="columns medium-4 small-12">
	  				
	  				<div class="subject">
	  					
	  					<h3>
	  						<?php echo $c['title']; ?>
	  					</h3>
	  					<ul class="items">
		  					<?php foreach( $c['links'] as $item ): ?>
		  						<li class="item">
		  							<a href="//www.nols.edu" target="_blank" title="NOLS is a great resource" class="has-title">
					  					<?php echo $item['name']; ?>
					  				</a>
		  						</li>
							<?php endforeach; ?>
	  					</ul>

	  				</div>

	  			</div>

	  		<?php endforeach; ?>

  		</div>

  	</div>

<?php require_once('footer.php'); ?>