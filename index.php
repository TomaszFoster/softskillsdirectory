<?php require_once('header.php'); ?>
<?php 
	$str = file_get_contents('data.json'); 
	$data = json_decode($str,true);
?>

  	<div class="container">

  		<div class="row">
  			
  			<div class="columns small-12">
  				
  				<h1>Soft Skills Directory</h1>
  				<p>"The chains of habit are too light to be felt until they're too heavy to be broken." - Warren Buffet</p>

  			</div>

  		</div>

  		<div class="row ">
  			
  			<?php foreach ($data as $c): ?>
  			
	  			<div class="columns medium-4 small-12">
	  				
	  				<div class="subject">
	  					
	  					<h3>

	  						<?php echo $c['title']; ?>

	  					</h3>

	  					<ul class="items">

		  					<?php foreach( $c['links'] as $item ): ?>

		  						<li class="item <?php echo $item['price']=='cost'?'not-free':''; echo $item['vet']=='yes'?' gi-bill':''; ?>">

		  							<a href="<?php echo $item['link']; ?>" target="_blank" title="<?php echo $item['title'];?>" class="has-title">

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