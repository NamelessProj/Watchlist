<section class="slider">
    <ul id="autoWidth" class="cs-hidden" style="width: 100%;">
        <?php
		$request2 = "https://api.jikan.moe/v4/recommendations/anime";
		$contents2 = file_get_contents($request2);
		$obj2 = json_decode($contents2, true)["data"];
	
		for($i=0; $i<=10; $i++){
		    $title=$obj2[$i]["entry"][0]["title"];
			$mal_id1=$obj2[$i]["mal_id"];
	
			$mal_id = explode("-", $mal_id1);
	
			$url=$obj2[$i]["entry"][0]["url"];
			$image_url=$obj2[$i]["entry"][0]["images"]["jpg"]["large_image_url"];
		?>
		<li class="item-a">
			<!--box-slider--------------->
			<div class="box">
				<!--img-box---------->
				<div class="slide-img">
					<img alt="<?php echo $i; ?>" src="<?php echo $image_url; ?>">
					<!--overlayer---------->
					<div class="overlay">
						<!--buy-btn------>	
						<a href="serie.php?id=<?php echo $mal_id[0]; ?>" class="buy-btn">See more</a>	
					</div>
				</div>
				<!--detail-box--------->
				<div class="detail-box">
					<!--type-------->
					<div class="type">
						<a href="serie.php?id=<?php echo $mal_id[0]; ?>"><?php echo $title; ?></a>
						<span>
							<a href="<?php echo $url; ?>">View on MAL</a>
						</span>
					</div>
					<!--price-------->
					<a href="serie.php?id=<?php echo $mal_id[0]; ?>" class="price">More</a>
				</div>
			</div>		
	    </li>
		<?php } ?>
	</ul>
</section>