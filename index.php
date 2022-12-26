<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
	<link rel="stylesheet" href="styles/style.css">
	<link rel="stylesheet" href="styles/menu.css">
</head>
<body>
	<?php 
//	======== Intégration du menu de navigation ========
	require_once("Additionals/menu.php"); 
	?>
	
	<section id="dashboard">
		<!--<div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
        </div>-->
		
		<div class="dash-content">
			<div class="overview">
                <form action="javascript:void(0);" class="formulaire" id="form0" name="form0">
					<input type="search" name="search" id="search" placeholder="Search a serie" minlength="3" required="required" list="list">
					<datalist id="list"></datalist>

					<input type="submit" id="submit" class="btn btn-primary lien" name="submit" value="Search">

					<input type="hidden" id="totalPage" name="totalPage" value="">
					<input type="hidden" id="page" name="page" value="">

					<br>

					<!-- === FILTRES === -->

				</form>
				
				<br>
		
				<div id="contReset">
					<button type="button" id="reset" class="btn btn-primary lien">Reset</button>
				</div>

				<br><br><br>
				
            </div>
			
			<div class="overview">
                <!--<div class="title">
                    <i class="uil uil-info-circle"></i>
                    <span class="text">Note: </span>
                </div>-->
                <div class="boxes" id="cont"><!-- Dans le div.boxes, on met les box des séries -->
<!--                    <div class="box box1 box-note" id="note-1"></div>-->
					<?php
					if(empty($_GET['search'])){
						for($i=0; $i<=99; $i++){

						$title=$obj["data"][$i]["entry"][0]["title"];
						$mal_id=$obj["data"][$i]["mal_id"];
						$url=$obj["data"][$i]["entry"][0]["url"];
						$image_url=$obj["data"][$i]["entry"][0]["images"]["jpg"]["large_image_url"];
					?>
					<div class="cardSerie box box1 box-note">
						<a href="serie.php?id=<?php echo $mal_id; ?>" class="lienGlobalSerie card_content" id="imageSerie<?php echo $i; ?>" onClick="return serie();">
							<span class="nomSerie"><?php echo $title; ?></span>
						</a>
						<div class="add card_content">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="air bi bi-circle-fill" viewBox="0 0 16 16">
								<circle cx="8" cy="8" r="8"/>
							</svg>
							<button type="button" value="<?php echo $mal_id; ?>" onClick="addWatchlist(this);" title="Add on watchlist">+ Add</button>
						</div>
						<div class="mal card_content">
							<a href="<?php echo $url; ?>" target="_blank">on MAL</a>
						</div>
					</div>
					<?php 
						} 
					}else{
						$search = $_GET['search'];
						$countElem = $obj["pagination"]["items"]["count"];
						
						for($i=0; $i<=$countElem; $i++){
							$title=$obj["data"][$i]["title"];
							$mal_id=$obj["data"][$i]["mal_id"];
							$url=$obj["data"][$i]["url"];
							$image_url=$obj["data"][$i]["images"]["jpg"]["large_image_url"];
							$airing=$obj["data"][$i]["airing"];
							$type=$obj["data"][$i]["type"];
							$episodes=$obj["data"][$i]["episodes"];
							$score=$obj["data"][$i]["score"];
					?>
					<style>
						#imageSerie<?php echo $i; ?>{
							background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("<?php echo $image_url; ?>");
						}
						#imageSerie<?php echo $i; ?>:hover{
							background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("<?php echo $image_url; ?>");
						}
					</style>
					
					<div class="cardSerie box box1 box-note">
						<a href="serie.php?search=<?php echo $search; ?>&amp;id=<?php echo $mal_id; ?>" class="lienGlobalSerie card_content" id="imageSerie<?php echo $i; ?>" onClick="return serie();">
							<span class="nomSerie"><?php echo $title; ?></span>
						</a>
						<div class="type card_content"><?php echo $type; ?></div>
						<div class="add card_content">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="air_<?php echo $airing; ?> bi bi-circle-fill" viewBox="0 0 16 16">
								<circle cx="8" cy="8" r="8"/>
							</svg>
							<button type="button" value="<?php echo $mal_id; ?>" onClick="addWatchlist(this);" title="Add on watchlist">+ Add</button>
						</div>
						<div class="mal card_content">
							<a href="<?php echo $url; ?>" target="_blank">on MAL</a>
						</div>
					</div>
					<?php } } ?>
                </div>
				
            </div>
		</div>
		<div id="more">
			<button type="button" id="btn_more">More</button>
		</div>
	</section>
</body>
</html>