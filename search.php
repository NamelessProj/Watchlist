<?php
$pageActu = "search";

$maxCarTitle = 30;

$request1 = "https://api.jikan.moe/v4/recommendations/anime?sfw";
if(!empty($_GET['search'])){
	$request1 = "https://api.jikan.moe/v4/anime?q=".$_GET['search']."&page=1&limit=100&sfw";
}
$contents = file_get_contents($request1);
	
$obj = json_decode($contents, true);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    
	<?php /* ======== METADONNÉES ======== */ ?>
	<meta charset="utf-8">
	<meta name="author" content="Kevin Da Silva Pinto">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php /* ======== ICON ======== */ ?>
	<link rel="icon" type="img/png" href="../images/logo.png">
    
    
	
	<?php /* ======== CSS ======== */ ?>
	
<!--    <link rel="stylesheet" href="styles/style.css">-->
	<link rel="stylesheet" href="styles/accueil.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

	<?php /* ======== TITLE ======== */ ?>
    <title>Search</title>
	
	<style>
@charset "utf-8";

/* ======== IMPORTATIONN DE POLICES ======== */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');



/* ======= STYLE GLOBALE ======== */

*{
	margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
	line-height: 1.5;
}

:root{
    /* ===== Colors ===== */
    --primary-color: #3A3B3C;
    --panel-color: #FFF;
    --text-color: #FFF;
    --black-light-color: #707070;
    --border-color: #E6E5E5;
    --toggle-color: #DDD;
	
	--box1-color: #1F2421;
	--box1-color-2: hsl(56, 70%, 48%);
	
	--box1-desaturate: hsl(56, 80%, 48%);
	
	--lien-color: #D35400;
	
	--title-icon-color2: #000;
    
    /* ====== Transition ====== */
    --tran-05: all 0.5s ease;
    --tran-03: all 0.3s ease;
    --tran-03: all 0.2s ease;
}
		
a{
    text-decoration: none;
    color: var(--lien-color);
}

body{
    min-height: 100vh;
	height: 100%;
    background-color: var(--panel-color);
}

body.dark{ /* === gestion du thème sombre === */
    --primary-color: #3A3B3C;
    --panel-color: #242526;
    --text-color: #CCC;
    --black-light-color: #CCC;
    --border-color: #4D4C4C;
    --toggle-color: #FFF;
    --box1-color: #3A3B3C;
	--box1-desaturate: hsl(210, 2%, 30%);
	--box1-color-2: hsl(210, 2%, 50%);
}



/* ======== Custom scroll bar ======== */

::-webkit-scrollbar {
    width: 8px;
}
::-webkit-scrollbar-track {
    background: #f1f1f1;
}
::-webkit-scrollbar-thumb {
    background: var(--primary-color);
    border-radius: 12px;
    transition: all 0.3s ease;
}
::-webkit-scrollbar-thumb:hover {
    background-color: #1B1B1C;
}

body.dark::-webkit-scrollbar-thumb:hover,
body.dark .activity-data::-webkit-scrollbar-thumb:hover{
    background: #3A3B3C;
}

body.dark div.logo-name{
	filter: saturate(0);
}



/* ======== MENU DE NAVIGATION ======== */

nav{
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 250px;
    padding: 10px 14px;
    background-color: var(--panel-color);
    border-right: 1px solid var(--border-color);
    transition: var(--tran-05);
}
nav.close{
    width: 73px;
}
nav .logo-name{
    display: flex;
    align-items: center;
}
nav .logo-image{
    display: flex;
    justify-content: center;
    min-width: 45px;
}
nav .logo-image img{
    width: 40px;
    object-fit: cover;
    border-radius: 50%;
}

nav .logo-name .logo_name{
    font-size: 22px;
    font-weight: 600;
    color: var(--text-color);
    margin-left: 14px;
    transition: var(--tran-05);
}
nav.close .logo_name{
    opacity: 0;
    pointer-events: none;
}
nav .menu-items{
    margin-top: 40px;
    height: calc(100% - 90px);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
.menu-items li{
    list-style: none;
}
.menu-items li a{
    display: flex;
    align-items: center;
    height: 50px;
    text-decoration: none;
    position: relative;
}
.nav-links li a:hover:before{
    content: "";
    position: absolute;
    left: -7px;
    height: 5px;
    width: 5px;
    border-radius: 50%;
    background-color: var(--primary-color);
}
body.dark li a:hover:before{
    background-color: var(--text-color);
}
.menu-items li a i{
    font-size: 24px;
    min-width: 45px;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--black-light-color);
}
.menu-items li a .link-name{
    font-size: 18px;
    font-weight: 400;
    color: var(--black-light-color);    
    transition: var(--tran-05);
}
nav.close li a .link-name{
    opacity: 0;
    pointer-events: none;
}
.nav-links li a:hover i,
.nav-links li a:hover .link-name{
    color: var(--primary-color);
}
body.dark .nav-links li a:hover i,
body.dark .nav-links li a:hover .link-name{
    color: var(--text-color);
}
.menu-items .logout-mode{
    padding-top: 10px;
    border-top: 1px solid var(--border-color);
}
.menu-items .mode{
    display: flex;
    align-items: center;
    white-space: nowrap;
}
.menu-items .mode-toggle{
    position: absolute;
    right: 14px;
    height: 50px;
    min-width: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
}
.mode-toggle .switch{
    position: relative;
    display: inline-block;
    height: 22px;
    width: 40px;
    border-radius: 25px;
    background-color: var(--toggle-color);
}
.switch:before{
    content: "";
    position: absolute;
    left: 5px;
    top: 50%;
    transform: translateY(-50%);
    height: 15px;
    width: 15px;
    background-color: var(--panel-color);
    border-radius: 50%;
    transition: var(--tran-03);
}
body.dark .switch:before{
    left: 20px;
}



/* ======== CONTAINER ======== */

.dashboard{
    position: relative;
    left: 250px;
    background-color: var(--panel-color);
    min-height: 100vh;
	max-height: 100%;
    width: calc(100% - 250px);
    padding: 10px 14px;
    transition: var(--tran-05);
}
nav.close ~ .dashboard{
    left: 73px;
    width: calc(100% - 73px);
}
.dashboard .top{
    position: fixed;
    top: 0;
    left: 250px;
    display: flex;
    width: calc(100% - 250px);
    justify-content: space-between;
    align-items: center;
    padding: 10px 14px;
    background-color: var(--panel-color);
    transition: var(--tran-05);
    z-index: 10;
}
nav.close ~ .dashboard .top{
    left: 73px;
    width: calc(100% - 73px);
}
.dashboard .top .sidebar-toggle{
    font-size: 26px;
    color: var(--text-color);
    cursor: pointer;
}

/* === searchbox (supprimer) */
.dashboard .top .search-box{
    position: relative;
    height: 45px;
    max-width: 600px;
    width: 100%;
    margin: 0 30px;
}
.top .search-box input{
    position: absolute;
    border: 1px solid var(--border-color);
    background-color: var(--panel-color);
    padding: 0 25px 0 50px;
    border-radius: 5px;
    height: 100%;
    width: 100%;
    color: var(--text-color);
    font-size: 15px;
    font-weight: 400;
    outline: none;
}
.top .search-box i{
    position: absolute;
    left: 15px;
    font-size: 22px;
    z-index: 10;
    top: 50%;
    transform: translateY(-50%);
    color: var(--black-light-color);
}

/* === img (supprimer) === */
.top img{
    width: 40px;
    border-radius: 50%;
}

/* === contenu === */
.dashboard .dash-content{
    padding-top: 50px;
}
.dash-content .title{
    display: flex;
    align-items: center;
    margin: 60px 0 30px 0;
}
.dash-content .title i{
    position: relative;
    height: 35px;
    width: 35px;
	background-color: var(--box1-color);
    border-radius: 6px;
	color: var(--title-icon-color2);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
}
.dash-content .title .text{
    font-size: 24px;
    font-weight: 500;
    color: var(--text-color);
    margin-left: 10px;
}
.dash-content .boxes{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
.dash-content .boxes .box{
    display: flex;
    flex-direction: column;
    align-items: center;
    border-radius: 15px;
    width: calc(100% / 4 - 15px);
/*    padding: 15px 20px;*/
	margin-bottom: 15px;
    background-color: var(--box1-color);
    transition: var(--tran-05);
	overflow: hidden;
	padding-bottom: 10px;
}
.boxes .box i{
    font-size: 35px;
    color: var(--text-color);
}
.boxes .box .text{
    white-space: nowrap;
    font-size: 18px;
    font-weight: 500;
    color: var(--text-color);
}
.boxes .box .number{
    font-size: 40px;
    font-weight: 500;
    color: var(--text-color);
}
.boxes .box.box2{
    background-color: var(--box1-color);
}
.boxes .box.box3{
    background-color: var(--box1-color);
}
.numberInf{
    font-size: 20px !important;
    text-align: center;
}
body.dark .numberInf{
    color: #000;
}
.dash-content .activity .activity-data{
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}
.activity .activity-data{

    display: flex;
}
.activity-data .data{
    display: flex;
    flex-direction: column;
    margin: 0 15px;
}
.activity-data .data-title{
    font-size: 20px;
    font-weight: 500;
    color: var(--text-color);
}
.activity-data .data .data-list{
    font-size: 18px;
    font-weight: 400;
    margin-top: 20px;
    white-space: nowrap;
    color: var(--text-color);
}



/* ======== FORMULAIRE ======== */
		
form#form0{
	display: flex;
	align-content: space-between;
}

input, textarea{
	background: none;
	border: none;
	outline: none;
	
	background-color: #F3F3F3;
	box-shadow: 0px 4px 0px rgba(0, 0, 0, 0.15);
	
	width: 80%;
	max-width: 600px;
	padding: 15px;
	border-radius: 8px;
	
	color: #313131;
	font-size: 20px;
	margin-right: 5px;
	
	transition: 0.4s;
}
input::placeholder, textarea::placeholder{
	color: #AAA;
}
input:focus, textarea:focus, input:valid, textarea:valid, input:hover, textarea:hover{
	color: #FFF;
	background-color: #313131;
	box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.15);
}
input[type="submit"]{
	width: 150px;
	margin-right: 0px;
	margin-left: 5px;
}
		
#more{
    margin-top: 2em;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
}
#btn_more{
    display: none;
    margin: auto;
    padding: 15px;
}
#btn_more.myclass1{
    display: block;
}

#contReset{
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;

}
#reset{
    margin: auto;
	width: fit-content;
	margin-left: 15px;
	color: #830001;
	transition: .2s ease-in-out;
}	
#reset:hover{
	color: #E70001;
	transition: .2s ease-in-out;
}
		
.cardSerie{
    cursor: pointer;
	transition: .1s ease-in;
}
.airedtrue::before{
	position: relative;
	content: 'O';
	display: flex;
	justify-content: center;
	align-items: center;
	top: 15px;
	right: 18px;
	width: 15px;
	height: 15px;
	border-radius: 50%;
	background-color: #07AD00;
	color: #07AD00;
	z-index: 99;
	margin: 0;
}
.lienGlobalSerie{
    text-align: center;
	padding: 5px;
}
.imgSerie{
    width: 100%;
	height: 250px;
	z-index: 1;
	object-fit: cover;
}
		
.add{
    display: flex;
    justify-content: space-between;
	color: var(--text-color);
}

.cardSerie:hover{
    -webkit-transform: scale(1.05);
	-moz-transform: scale(1.05);
	-o-transform: scale(1.05);
	-ms-transform: scale(1.05);
	transform: scale(1.05);
	box-shadow: 2px 2px 5px #888;
	transition: .2s ease-out;
}


/* ======== RESPONSIVE ======== */

@media (max-width: 1000px) {
    nav{

        width: 73px;
    }
    nav.close{
        width: 250px;
    }
    nav .logo_name{
        opacity: 0;
        pointer-events: none;
    }
    nav.close .logo_name{
        opacity: 1;
        pointer-events: auto;
    }
    nav li a .link-name{
        opacity: 0;
        pointer-events: none;
    }
    nav.close li a .link-name{
        opacity: 1;
        pointer-events: auto;
    }
    nav ~ .dashboard{
        left: 73px;
        width: calc(100% - 73px);
    }
    nav.close ~ .dashboard{
        left: 250px;
        width: calc(100% - 250px);
    }
    nav ~ .dashboard .top{
        left: 73px;
        width: calc(100% - 73px);
    }
    nav.close ~ .dashboard .top{
        left: 250px;
        width: calc(100% - 250px);
    }
    .activity .activity-data{
        overflow-X: scroll;
    }
}

@media (max-width: 780px) {
    .dash-content .boxes .box{
        width: calc(100% / 2 - 15px);
        margin-top: 15px;
    }
	
	
	
	/* ======== GLOBALE POUR SM ======== */
	
	img, table, td, blockquote, code, pre, textarea, input, iframe, object, embed, video{
		max-width: 100%;
	}
	
	img{
		height: auto;
	}
	
	textarea, table, td, th, code, pre, samp, p{
		-webkit-hyphens: auto;
		-moz-hyphens: auto;
		word-wrap: break-word;
	}
	
	code, pre, samp{
		white-space: pre-wrap;
	}
}



@media (max-width: 560px) {
    .dash-content .boxes .box{
        width: 100% ;
    }
}



@media (max-width: 500px) {
    nav{
        width: 73px;
    }
    nav.close{
        width: 73px;
    }
    nav .logo_name{
        opacity: 0;
        pointer-events: none;
    }
    nav.close .logo_name{
        opacity: 0;
        pointer-events: none;
    }
    nav li a .link-name{
        opacity: 0;
        pointer-events: none;
    }
    nav.close li a .link-name{
        opacity: 0;
        pointer-events: none;
    }
    nav ~ .dashboard{
        left: 73px;
        width: calc(100% - 73px);
    }
    nav.close ~ .dashboard{
        left: 73px;
        width: calc(100% - 73px);
    }
    nav ~ .dashboard .top{
        left: 73px;
        width: calc(100% - 73px);
    }
    nav.close ~ .dashboard .top{
        left: 73px;
        width: calc(100% - 73px);
    }
    .dashboard .top .sidebar-toggle{
        display: none;
    }
	
	table td.sm-text-overflow{
		white-space: nowrap;
		text-overflow: ellipsis;
	}
	
	.hide-sm{
		display: none;
	}
}



/* ======== SM, mais horizontale ======== */

@media (max-device-width: 780px) and (orientation: landscape){
	html{
		-webkit-text-size-adjust: 100%;
		-ms-text-size-adjust: 100%;
	}
}
	</style>
</head>
<body>
	
	<?php 
//	======== Intégration du menu de navigation ========
	require_once("Additionals/menu.php"); 
	?>
	
	<div class="dashboard">
		<div class="dash-content">
			<div class="overview">
				<br><br>
                <form action="javascript:void(0);" class="formulaire" id="form0" name="form0">
					<input type="search" name="search" id="search" placeholder="Search a serie" minlength="3" required="required" list="list">
					<datalist id="list"></datalist>

					<input type="submit" id="submit" class="btn btn-primary lien" name="submit" value="Search">
					
					<input type="button" id="reset" class="btn btn-primary lien" value="Reset">

					<input type="hidden" id="totalPage" name="totalPage" value="">
					<input type="hidden" id="page" name="page" value="">

					<br>

					<!-- === FILTRES === -->

				</form>
				
				<br>
		
				<div id="contReset">
<!--					<input type="button" id="reset" class="btn btn-primary lien" value="Reset">-->
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
							$mal_id1=$obj["data"][$i]["mal_id"];
							
							if(strlen($title) > $maxCarTitle){
								$title_2 = substr($title, 0, $maxCarTitle)."...";
								$title = $title_2;
							}

							$mal_id = explode("-", $mal_id1);

							$url=$obj["data"][$i]["entry"][0]["url"];
							$image_url=$obj["data"][$i]["entry"][0]["images"]["jpg"]["large_image_url"];
					?>
					<div class="cardSerie box box1 box-note" data-name="<?php echo $title; ?>" data-id="<?php echo $mal_id[0]; ?>" title="<?php echo $title; ?>">
						
						<img src="<?php echo $image_url; ?>" alt="Image for <?php echo $title; ?>" loading="lazy" class="imgSerie">
						
						<a href="serie.php?id=<?php echo $mal_id[0]; ?>" class="lienGlobalSerie card_content" id="imageSerie<?php echo $i; ?>" onClick="return serie();">
							<span class="nomSerie"><?php echo $title; ?></span>
						</a>
						<div class="add card_content">
							<button type="button" value="<?php echo $mal_id[0]; ?>" onClick="addWatchlist(this);" title="Add on watchlist">&#x271A;</button>
						</div>
						<div class="mal card_content">
							<a href="<?php echo $url; ?>" target="_blank">&#x279C; MAL</a>
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
							
							if(strlen($title) > $maxCarTitle){
								$title_2 = substr($title, 0, $maxCarTitle)."...";
								$title = $title_2;
							}
					?>
					<div class="cardSerie box box1 box-note" data-name="<?php echo $title; ?>" data-id="<?php echo $mal_id[0]; ?>" title="<?php echo $title; ?>">
						
						<img src="<?php echo $image_url; ?>" alt="Image for <?php echo $title; ?>" loading="lazy" class="imgSerie">
						
						<a href="serie.php?search=<?php echo $search; ?>&amp;id=<?php echo $mal_id; ?>" class="lienGlobalSerie card_content" id="imageSerie<?php echo $i; ?>" onClick="return serie();">
							<span class="nomSerie"><?php echo $title; ?></span>
						</a>
						<div class="type card_content"><?php echo $type; ?></div>
						<div class="add card_content">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="air_<?php echo $airing; ?> bi bi-circle-fill" viewBox="0 0 16 16">
								<circle cx="8" cy="8" r="8"/>
							</svg>
							<button type="button" value="<?php echo $mal_id; ?>" onClick="addWatchlist(this);" title="Add on watchlist">&#x271A;</button>
						</div>
						<div class="mal card_content">
							<a href="<?php echo $url; ?>" target="_blank">&#x279C; MAL</a>
						</div>
					</div>
					<?php } } ?>
                </div>
				
            </div>
		</div>
		<div id="more">
			<input type="button" id="btn_more" class="btn btn-primary lien" value="More">
		</div>
	</div>
	
	<script src="Additionals/menu.js"></script>
	<script>
		document.querySelectorAll(".cardSerie").forEach(i => i.addEventListener("click", e => {
			window.location.replace("serie.php?id="+e.currentTarget.dataset.id);
        }));
	</script>
	<script>
		if(navigator.onLine){
			console.log('online');
			var icon_menu = document.getElementsByClassName("icon_menu");
			for(var i = 1; i <= icon_menu.length; i++){
				icon_menu[i].classList.add("hide");
			}
		}else{
			console.log('offline');
			var icon_menu = document.getElementsByClassName("icon_menu");
			for(var i = 1; i <= icon_menu.length; i++){
				icon_menu[i].classList.add("hide");
			}
		}


		function addWatchlist(e){
			var serie=e.value;
			alert (serie);
		}
		
		function serie(){
			document.cookie = 'serie=1';
			return true;
		}
		
		let resetBtn = document.getElementById("reset"),
			search = document.getElementById("submit"),
			serieSearch = document.getElementById("search");
		
		
		/* === FONCTION de remplacement === */	
		function replaceAll(recherche, remplacement, chaineDeRemplacement){
			var chaine = chaineDeRemplacement.split(recherche).join(remplacement);
			return chaine;
		}
		
		
		/* === AJAX 1 === */
		
		let intervalID_1 = setInterval(() => {
			serieSearch.onfocus = serieSearch.oninput = function(){
//				let intervalID_2 = setInterval(() => {
                var search = document.getElementById("search").value,
                    page = document.getElementById("page").value;
                if(search != "" && search.length > 2){
                    var xhttp,
                        serie = document.getElementById("search"),
                        originSearch = serie.value,
                        searchSerie = replaceAll(" ", "-", originSearch);

                    xhttp = new XMLHttpRequest();

                    xhttp.onreadystatechange = function(){
                        if(this.readyState == 4 && this.status == 200){
                            myFunction(this, originSearch, 1);
                        }
                    };
                    var newUrl = "https://api.jikan.moe/v4/anime?q="+searchSerie+"&page=1&limit=100&sfw";
                    xhttp.open("GET", newUrl, true);
                    xhttp.send();
                }
                page=1;
//				}, 3500);
			}
		}, 1000);
		
		
		
		
		/* ==== BOUTON MORE ==== */
		let more = document.getElementById("btn_more");
		
		/* === AJAX 1 === */
		
        more.onclick = function(){
            var search = document.getElementById("search").value,
				page = document.getElementById("page").value;
			
            if(search != "" && search.length > 2){
                var xhttp,
                    serie = document.getElementById("search"),
                    originSearch = serie.value,
                    searchSerie = replaceAll(" ", "-", originSearch);

                xhttp = new XMLHttpRequest();

                xhttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        myFunction(this, originSearch, 0);
                    }
                };
                var newUrl = "https://api.jikan.moe/v4/anime?q="+searchSerie+"&page="+page+"&limit=100&sfw";
				console.log(newUrl);
                xhttp.open("GET", newUrl, true);
                xhttp.send();
            }
        }
		
		
		
		
		/* ==== RAJOUTER LES RECHERCHES ==== */
		function myFunction(xhttp, search, typeRequete){
			let PageNext = document.getElementById("page");
			
			var response = JSON.parse(xhttp.responseText),
				count = response.pagination.items.count,
				nextPage = response.pagination.has_next_page,
				page = response.pagination.current_page,
				btnMore = document.getElementById("btn_more");
			
			/* === ON VIDE L'AFFICHAGE === */
			if(typeRequete == 1){
				document.getElementById("cont").innerHTML = '';
				document.getElementById("list").innerHTML = '';
			}
			
			document.title = "Search for: "+search;
			
			for(var i = 0; i < count; i++){
				let response = JSON.parse(xhttp.responseText),
					cont = document.getElementById("cont");
				
				var name = response.data[i].title,
					malId = response.data[i].mal_id,
					url = response.data[i].url,
					image = response.data[i].images.jpg.large_image_url,
					airing = response.data[i].airing,
					type = response.data[i].type,
					year = response.data[i].aired.prop.from.year;
				
				if(i < 10){
					document.getElementById("list").innerHTML += '<option value="'+name+'"></option>';
				}
				
				if(name.length > <?php echo $maxCarTitle; ?>){
					var nameSecond = name.substr(0, <?php echo $maxCarTitle; ?>);
					name = nameSecond+'...';
				}
				
				/* === CREATION + REMPLISSAGE DES DIV === */
				cont.innerHTML += '<div class="cardSerie box box1 box-note" data-name="'+name+'" data-id="'+malId+'" data-aired="'+airing+'" title="'+name+'"> <img src="'+image+'" alt="Image for '+name+'" loading="lazy" class="imgSerie"> <a href="serie.php?id='+malId+'" class="lienGlobalSerie card_content" id="imageSerie'+i+'" onClick="return serie();"> <span class="nomSerie aired'+airing+'">'+name+'</span> </a> <div class="add card_content">'+type+'&nbsp;&nbsp;&nbsp;<button type="button" value="'+malId+'" onClick="addWatchlist(this);" title="Add on watchlist">&#x271A;</button>&nbsp;&nbsp;&nbsp;'+year+'</div> <div class="mal card_content"> <a href="'+url+'" target="_blank">&#x279C; MAL</a> </div> </div>';
			}
			
			PageNext.value=page+1;
			
			if(nextPage == true && btnMore.classList.contains("myclass1") == false){
				btnMore.classList.add("myclass1");
			}
			if(nextPage == false && btnMore.classList.contains("myclass1")){
				btnMore.classList.toggle("myclass1");
			}
		}
		
		resetBtn.onclick = function(){
			window.location.replace("search.php");
		}
	</script>
</body>
</html>