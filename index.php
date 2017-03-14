<?php require_once('header.php'); ?>
<?php 
	$str = file_get_contents('data.json'); 
	$data = json_decode($str,true);
?>

  	<div class="container">

  		<div class="row">
  			
  			<div class="columns small-12">
  				
  				<h1>
  					Hope is not a good plan 
  				</h1>
  				<p class="legend">
  					Mouse-over any link for a description&nbsp;&nbsp;
  					| &nbsp;&nbsp;<i class="fa fa-usd" aria-hidden="true"></i> &nbsp;Paid content&nbsp;&nbsp;| &nbsp;&nbsp;
  					<i class="fa fa-check" aria-hidden="true"></i> &nbsp;Highly Recommended
  				</p>

  			</div>

  		</div>

  		<div class="row grid" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": 16 }'>
  			
  			<?php foreach ($data as $c): ?>
  			
	  			<div class="grid-item">
	  				
	  				<div class="subject">
	  					
	  					<h3 <?php echo $c['alt']!=null ? 'title="' . $c['alt'] . '" class="has-description"' : '' ; ?>>

	  						<?php echo $c['title']; ?>

	  					</h3>

	  					<ul class="items">

		  					<?php foreach( $c['links'] as $item ): ?>

		  						<li class="item <?php 
		  							echo $item['price']=='cost' ? 'not-free' : ''; 
		  							echo $item['vet']=='yes' ? ' gi-bill' : ''; 
		  							echo $item['extra']=='recommended' ? ' recommended' : '';
		  						?>">

		  						<?php 
		  							// recommended link icon
		  							echo $item['extra']=='recommended' ? '<i class="fa fa-check" aria-hidden="true"></i>' : ''; 
		  							// icon for courses that cost money
		  							echo $item['price']=='cost' ? '<i class="fa fa-usd" aria-hidden="true"></i>' : ''; 

		  						?>

		  							<a href="<?php echo $item['link']; ?>" target="_blank" title="<?php echo $item['title'];?>" class="has-title">

					  					<?php 
					  						echo $item['name']; 
					  						echo $item['author']!=NULL ? '  <span class="author"> by '.$item['author'].'</span>' : '';
					  					?>

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