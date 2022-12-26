<?php
$pageActu = "serie";

$request1 = "https://api.jikan.moe/v4/random/anime?sfw";
if(!empty($_GET['id'])){
	$request1 = "https://api.jikan.moe/v4/anime/".$_GET['id']."/full";
}
$contents = file_get_contents($request1);
$obj = json_decode($contents, true)["data"];
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
	<link id="favicon" rel="shortcut icon" type="image/png" href="<?php echo $obj["images"]["jpg"]["small_image_url"] ?>">
    
    
	
	<?php /* ======== CSS ======== */ ?>
	
<!--    <link rel="stylesheet" href="styles/style.css">-->
	<link rel="stylesheet" href="styles/accueil.css">
	<link rel="stylesheet" href="styles/productSlider.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

	<!--Jquery-------------------->
    <script type="text/javascript" src="JS/jquery-3.5.1.js"></script>
    <!--lightslider.js--------------->
    <script type="text/javascript" src="Lightslider_files/lightslider.js"></script>

	<?php /* ======== TITLE ======== */ ?>
    <title><?php if(!empty($obj["title_english"])){echo $obj["title_english"];}else{echo $obj["title"];} ?></title>
	
	<script>
		if(navigator.offline){
			window.location.replace("serie_off.php");
		}
	</script>

	<style>
@charset "utf-8";

/* ======== IMPORTATIONN DE POLICES ======== */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');



/* ======= STYLE GLOBALE ======== */

:root{
    /* ===== Colors ===== */
    --primary-color: #3A3B3C;
    --panel-color: #FFF;
	--panel-color-e: rgba(255, 255, 255, 0.75);
    --text-color: #000;
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
		
*{
	margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
	line-height: 1.5;
	color: var(--text-color);
}	
		
		
		
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 2000; /* Sit on top */
    left: 0;
	top: 0%;
	width: 100%; /* Full width */
	height: 100%; /* Full height */
	overflow: auto; /* Enable scroll if needed */
	background-color: rgb,(0,0,0) !important; /* Fallback color */
	background-color: rgba(0,0,0,0.4) !important; /* Black w/ opacity */
	-webkit-animation-name: fadeIn; /* Fade in the background */
	-webkit-animation-duration: 0.4s;
	animation-name: fadeIn;
	animation-duration: 0.4s;
}
    
/* Modal Content */
.modal-content {
    position: fixed;
	bottom: 0;
	background-color: #fefefe;
	width: 80% !important;
	max-width: 1000px !important;
	height: 80% !important;
	top: 50%;
	right: 50%;
	transform: translateY(-50%) translateX(50%);
	-webkit-animation-name: slideIn;
	-webkit-animation-duration: 0.4s;
	animation-name: slideIn;
	animation-duration: 0.4s;
}
    
/* The Close Button */
.close {
    color: white;
	float: right !important;
	font-size: 50px !important;
	font-weight: bold;
	transition: all .2s ease-in-out;
	width: fit-content !important;
	height: fit-content !important;
	display: flex !important;
	justify-content: flex-end !important;
}
    
.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
	transition: all .2s ease-in-out;
	width: fit-content !important;
	height: fit-content !important;
}
.modal-header {
	padding: 2px 16px;
	background-color: #BF4B0F !important;
	color: white;
	text-align: center;
/*	height: fit-content !important;*/
}

.modal-body {padding: 2px 16px; background-color: #222222; overflow-y: scroll;}

.modal-footer {
	padding: 2px 16px;
	background-color: #BF4B0F !important;
	color: white;
	text-align: center;
	display: flex;
/*	height: fit-content !important;*/
}
.modal-footer h3{
	text-align: center;
	margin: auto;
}

/* Add Animation */
@-webkit-keyframes slideIn {
	from {bottom: -300px; opacity: 0} 
	to {bottom: 0; opacity: 1}
}

@keyframes slideIn {
	from {bottom: -300px; opacity: 0}
	to {bottom: 0; opacity: 1}
}

@-webkit-keyframes fadeIn {
	from {opacity: 0} 
	to {opacity: 1}
}

@keyframes fadeIn {
	from {opacity: 0} 
	to {opacity: 1}
}
		
		
		
		
		
a{
    text-decoration: none;
    color: var(--lien-color);
}

body{
    min-height: 100vh;
	height: 100%;
	background: linear-gradient(0deg, rgba(255,255,255,0.4), rgba(255,255,255,0.4)), url("BG_images/compil.png");
	/*background-image: url("BG_images/SAO.png");*/
	background-position: center;
	background-size: cover;
	background-repeat: no-repeat;
}

body.dark{ /* === gestion du thème sombre === */
    --primary-color: #3A3B3C;
    --panel-color: #242526;
	--panel-color-e: rgba(36, 37, 38, 0.75);
    --text-color: #CCC;
    --black-light-color: #CCC;
    --border-color: #4D4C4C;
    --toggle-color: #FFF;
    --box1-color: #3A3B3C;
	--box1-desaturate: hsl(210, 2%, 30%);
	--box1-color-2: hsl(210, 2%, 50%);
	
	background: linear-gradient(0deg, rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url("BG_images/compil.png");
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
    background-color: var(--panel-color-e);
    border-right: 1px solid var(--border-color);
	backdrop-filter: blur(2px);
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
/*    background-color: var(--panel-color);*/
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
	margin-bottom: 15px;
    background-color: var(--box1-color);
    transition: var(--tran-05);
	overflow: hidden;
	padding-bottom: 10px;
}
.dash-content .boxes .box-note{
	margin-inline: auto;
    width: fit-content;
	height: fit-content;
	overflow: hidden;
	padding-bottom: 0;
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
		
		
		
		
		
		
#add{
	color: #FFF;
	background-color: rgba(0, 0, 0, 0.555);
	border: none;
	border-radius: 5px;
	padding: 5px;
	padding-left: 10px;
	padding-right: 10px;
	transition: .2s ease-in-out;
}
#add:hover{
	background-color: rgba(214, 128, 0);
}
#rope a{
	transition: .2s ease-in-out;
}
#rope a:hover{
	color: rgb(214, 128, 0);
}
#rope span{
	color: rgba(168, 168, 168, 0.999);
}
#backBtn{
	grid-area: bac;
}

#cont-trailer{
	grid-area: tra;
	width: 100%;
	height: 100%;
	display: flex;
	justify-content: center;
}
#cont-trailer video#trailer{
	height: 420px;
	aspect-ratio: 9 / 16;
	margin: auto;
}

.elem-cont{
	width: 100%;
	height: 100%;
}

#titre{
	grid-area: tit;
	padding-left: 15px;
	display: grid;
	grid-template-areas: "tit-jap" "tit-eng";
	grid-template-columns: 1fr;
	grid-auto-rows: minmax(30px, auto);
}
#titre-jap{
	grid-area: tit-jap;
	margin-top: 2em;
}
#titre-eng{
	grid-area: tit-eng;
	margin-top: 0.5em;
}

#header{
	grid-area: hea;

	display: grid;
	grid-template-areas: "he-img he-inf he-aut";
	grid-template-columns: 250px 1fr 1fr;
	grid-auto-rows: minmax(30px, auto);
	grid-gap: 60px;
}
#head-image{
	grid-area: he-img;
	width: 250px;
}
#head-image img{
	width: 250px;
	height: auto;
}
#head-autres{
	grid-area: he-aut;
}
#head-info{
	grid-area: he-inf;
}
#head-titre-studio{
	margin-top: 30px;
}

#cont-genreTheme{
	grid-area: gen;
	display: flex;
	justify-content: space-between;
	width: min(100% - 2rem, 100%);
	margin-inline: auto;
}
.elem-geTh{
	width: 25%;
}
#cont-synopsis{
	grid-area: syn;
	margin-top: 30px;
}
#cont-description{
	grid-area: des;
	margin-top: 30px;
}

#cont-add{
	grid-area: add;
	position: sticky;
	right: 15px;
	bottom: 15px;
}


#info span{
	margin-bottom: 10px;
	width: 100%;
	float: left;
}

#image-serie{
	border-radius: 5px;
}
		
#recommendations{
	width: 80%;
	height: 17em;
	overflow-x: auto;
	overflow-y: hidden;
	margin-inline: auto;
	grid-area: rec;
	display: flex;
}
#recommendations::-webkit-scrollbar-thumb {
    border-radius: 0;
}


.titre-1{
	font-weight: bold;
	font-size: 22px;
	border-left: 3px solid #BF4B0F;
	border-radius: 2px;
	padding-left: 10px;
	padding-top: 10px;
	padding-bottom: 10px;
	background: linear-gradient(90deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
	margin-bottom: 15px;
	backdrop-filter: blur(2px);
	color: rgb(255,255,255);
	text-shadow: 0px 0px 10px #000;
}
body.dark .titre-1{
	color: rgb(211,84,0);
	text-shadow: none;
}

.genres_lien{
	background-color: rgba(0,0,0,0.8);
	border-radius: 20px;
	margin-right: 15px;
	margin-bottom: 15px;
	padding: 10px;
	word-break: keep-all;
	float: left;
	transition: .2s ease-in-out;
}
.genres_lien:hover{
	background-color: rgba(214, 128, 0, 0.8);
	color: #fff;
	transition: .2s ease-in-out;
}

.texte{
	text-align: justify;
}

.cont-text-elem{
	width: 90%;
	margin-inline: auto;
}

h1, h2, h3{
	margin: 0;
}

#cont-recommendations{
	margin-top: 2em;
}
		
		
		
		
		
		
.contCardSerie{
	float: left;
	margin-right: 30px;
	display: inline-block;
	margin-top: 1em;
	margin-bottom: 1em;
}		
.cardSerie{
	height: 15em;
	width: 10em;
	display: grid;
	grid-template-areas: "img";
    grid-template-columns: 1fr;
    grid-auto-rows: 15em;
	border-radius: 15px 15px 0px 0px;
	overflow: hidden;
	transition: .1s ease-in;
}
.contCardSerie .cardSerie:hover{
	-webkit-transform: scale(1.05);
	-moz-transform: scale(1.05);
	-o-transform: scale(1.05);
	-ms-transform: scale(1.05);
	transform: scale(1.05);
	box-shadow: 2px 2px 5px #888;
	transition: .2s ease-out;
}
.lienGlobalSerie{
    grid-area: img;
	width: 100%;
	height: 100%:
    background-repeat: no-repeat !important;
    background-size: cover !important;
    background-position: center !important;
    text-align: center;
    display: flex;
    margin: auto;
    vertical-align: middle;
    color: #C5E3E3;
    font-weight: bold;
    text-shadow: 0px 0px 5px black;
    display: grid;
    grid-template-areas: 	"nom nom nom"
                            "nom nom nom"
                            "nom nom nom";
    grid-template-columns: 1fr 1fr 1fr;
    grid-auto-rows: 5em;
    transition: all 0.2s ease-in-out;
}
.lienGlobalSerie:hover{transition: all 0.2s ease-in-out;}
.nomSerie{
    grid-area: nom;
    margin: auto;
    width: 95%;
    height: 100%;
    text-align: center;
    vertical-align: middle;
    position: relative;
    top: 50%;
    transform: translateY(-25%);
}
.mal{
	position: relative;
	left: 50%;
	top: -15%;
	transform: translateX(-25%);
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
	
	
	<!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Add to a watchlist</h2>
            </div>
            <div class="modal-body">
                <br>

                <form action="javascript:null(0);" method="post" name="createNewWatchlist">
                    <table>
						<?php
						$listeWatch = file_get_contents('BD/listesWatchlist.json');
						$objet = json_decode($listeWatch, true);
						$nbWa = count($objet);
						
						for($p=1; $p<=$nbWa; $p++){
							$tabl = json_decode(file_get_contents('BD/watchlist_'.$p.'.json'), true);
							$serieExist = false;
							$btnAddSym = '&#x271A;';
							if(in_array($_GET['id'], $tabl)){
								$serieExist = true;
								$btnAddSym = '&#x2714;';
							}
						?>
						<tr>
							<td><button type="button" class="addSerie<?php if($serieExist){echo ' disabledBtn'; } ?>" data-namewatch="<?php echo $objet[$p]["id"]; ?>"><?php echo $btnAddSym; ?></button></td>
							<td><?php echo $objet[$p]["nom"]; ?></td>
						</tr>
						<?php } ?>
					</table>
					
<!--                    <input type="submit" id="Create" name="Create" value="Create" onclick="addWatchlist()">-->
                </form>

                <br>
            </div>
            <div class="modal-footer">
                <h3 id="newWatchName">Select a Watchlist</h3>
            </div>
        </div>
    </div>
	
	
	<div class="dashboard">
		<div class="dash-content">
			<div class="overview">
				<span id="rope">
					<a href="">Home</a> / <a href="search.php">Anime</a> / <span id="ropeLien"><?php echo $obj["title"]; ?></span>
				</span>
				<br>
				<a href="" id="backBtn">Back</a>
            </div>
			
			<div class="overview">
                <div class="boxes" id="cont">
					<div id="titre" class="elem-cont">
						<h2 id="titre-jap"><?php echo $obj["title_japanese"]; ?></h2>
						<h1 id="titre-eng"><?php echo $obj["title_english"]; ?></h1>
					</div>
					
					<div class="cardSerie box box1 box-note" data-name="<?php echo $title; ?>" data-id="<?php echo $mal_id[0]; ?>" title="<?php echo $title; ?>">
						<iframe id="trailer" width="746" height="420" src="<?php echo $obj["trailer"]["embed_url"]; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; picture-in-picture" allowfullscreen autoplay="true"></iframe>
					</div>
					
					<div id="header" class="elem-cont"><!-- Séparer en 3 colonnes -->
						<div id="head-image">
							<img src="<?php echo $obj["images"]["jpg"]["large_image_url"] ?>" alt="" id="image-serie">
						</div>
						<div id="head-info">
							<div class="titre-1" id="head-titre-infos">
								Infos
							</div>
							<div id="info">
								<span id="type">Type: <?php echo $obj["type"]; ?></span>
								<span id="status">Status: <?php echo $obj["status"]; ?></span>
								<span id="aired">Aired: <?php echo $obj["aired"]["string"]; ?></span>
								<span id="episodes">Episodes: <?php echo $obj["episodes"]; ?></span>
								<span id="duration">Duration: <?php echo $obj["duration"]; ?></span>
								<span id="rating">Rating: <?php echo $obj["rating"]; ?></span>
							</div>
						</div>
						<div id="head-autres">
							<div class="titre-1" id="head-titre-score">
								Score
							</div>
							<span id="score">
								<?php
								$note = $obj["score"];
								$note_51 = round($note * 100 / 2, 2);
								$note_5 = round($note_51 / 100, 2);
								?>
								<span id="stars" title="<?php echo $note_5 ?> / 5">
									<?php
									for($i=1, $m=0; $i<=5; $i++, $m++){
										$n = $m+0.25;
										$j = $i-0.25;

										$path = "M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"; // ==== NULL

										if($note_5 >= $j){
											$path = "M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"; // ==== FULL
										}
										if($note_5 > $n && $note_5 < $j){
											$path = "M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z"; // ==== HALF
										}
										?>
									<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#F0C228" class="bi-star" viewBox="0 0 16 16" id="star-1">
										<path id="path-star-<?php echo $i; ?>" data-id="path-star-<?php echo $i; ?>" class="score-path" d="<?php echo $path; ?>"/>
									</svg>
										<?php
									}

									?>
								</span>
								<span id="scoreSerie"><?php echo $note; ?></span>
							</span>

							<div class="titre-1" id="head-titre-studio">
								Studios
							</div>
							<span id="studio" class="cont-flex">
								<?php
								$nbStudios = count($obj["studios"]);
								for($i=0; $i<$nbStudios; $i++){
									?>
								<a href="<?php echo $obj["studios"][$i]["url"]; ?>" id="<?php echo $obj["studios"][$i]["mal_id"]; ?>/<?php echo $obj["studios"][$i]["name"]; ?>" class="studio_lien genres_lien"><?php echo $obj["studios"][$i]["name"]; ?></a>
								<?php } ?>
							</span>

						</div>
					</div>

					<div id="cont-genreTheme">
						<div id="cont-genres" class="elem-cont elem-geTh">
							<div class="titre-1">
								Genres
							</div>
							<div id="genres" class="cont-flex">
								<?php
								$nbStudios = count($obj["genres"]);
								for($i=0; $i<$nbStudios; $i++){
									?>
								<a href="<?php echo $obj["genres"][$i]["url"]; ?>" id="<?php echo $obj["genres"][$i]["mal_id"]; ?>/<?php echo $obj["genres"][$i]["name"]; ?>" class="genres_lien"><?php echo $obj["genres"][$i]["name"]; ?></a>
								<?php } ?>
							</div>
						</div>
						<div id="cont-themes" class="elem-con elem-geTht">
							<div class="titre-1">
								Themes
							</div>
							<div id="themes" class="cont-flex">
								<?php
								$nbStudios = count($obj["themes"]);
								for($i=0; $i<$nbStudios; $i++){
									?>
								<a href="<?php echo $obj["themes"][$i]["url"]; ?>" id="<?php echo $obj["themes"][$i]["mal_id"]; ?>/<?php echo $obj["themes"][$i]["name"]; ?>" class="genres_lien"><?php echo $obj["themes"][$i]["name"]; ?></a>
								<?php } ?>
							</div>
						</div>
						<div id="cont-licensors" class="elem-con elem-geTht">
							<div class="titre-1">
								Licensors
							</div>
							<div id="licensors" class="cont-flex">
								<?php
								$nbStudios = count($obj["licensors"]);
								for($i=0; $i<$nbStudios; $i++){
									?>
								<a href="<?php echo $obj["licensors"][$i]["url"]; ?>" id="<?php echo $obj["licensors"][$i]["mal_id"]; ?>/<?php echo $obj["licensors"][$i]["name"]; ?>" class="genres_lien"><?php echo $obj["licensors"][$i]["name"]; ?></a>
								<?php } ?>
							</div>
						</div>
					</div>

					<div id="cont-synopsis" class="elem-cont cont-text-elem">
						<div class="titre-1">
							Synopsis
						</div>
						<div id="synopsis" class="texte">
							<?php echo $obj["synopsis"]; ?>
						</div>
					</div>

					<div id="cont-description" class="elem-cont cont-text-elem">
						<div class="titre-1">
							Description
						</div>
						<div id="description" class="texte">
							<?php echo $obj["background"]; ?>
						</div>
					</div>

					<div id="cont-recommendations" class="elem-cont cont-text-elem">
						<div class="titre-1">
							Recommendations
						</div>



						<div id="recommendations">
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
							<style>
								#imageSerie<?php echo $i; ?>{
									background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("<?php echo $image_url; ?>");
								}
								#imageSerie<?php echo $i; ?>:hover{
									background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("<?php echo $image_url; ?>");
								}
							</style>

							<div class="contCardSerie">
								<div class="cardSerie" title="<?php echo $title; ?>">
									<a href="serie.php?id=<?php echo $mal_id[0]; ?>" class="lienGlobalSerie card_content" id="imageSerie<?php echo $i; ?>" onClick="return serie();">
										<span class="nomSerie"><?php echo $title; ?></span>
									</a>
									<div class="mal card_content">
										<a href="<?php echo $url; ?>" target="_blank">on MAL</a>
									</div>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>

					<div id="cont-add" class="elem-cont"><!-- Le bouton nous suit lors du scroll -->
						<button type="button" id="add" title="Add &#34;<?php if(!empty($obj["title_english"])){echo $obj["title_english"];}else{echo $obj["title"];} ?>&#34; to a watchlist" data-value="<?php echo $obj["mal_id"]; ?>">Add to a Watchlist</button>
					</div>
                </div>
				
            </div>
		</div>
	</div>
	
	<script type="text/javascript" src="JS/script.js"></script>
	<script src="Additionals/menu.js"></script>
	<script>
		document.querySelectorAll(".cardSerie").forEach(i => i.addEventListener("click", e => {
			window.location.replace("serie.php?id="+e.currentTarget.dataset.id);
        }));
		
		/*document.querySelectorAll(".addSerie").forEach(i => i.addEventListener("click", e => {
			var nameWatch = e.currentTarget.dataset.namewatch,
				idSerie = <?php echo $_GET['id']; ?>;
			$.ajax({
				url: 'addSerieWatch.php',
				type: "POST",
				data: {
					watchlist: nameWatch,
					serie: idSerie
					  } 
			}).done(function( msg ) {
				alert(msg);
			});
        }));*/
		
		
		document.querySelectorAll(".addSerie").forEach(i => i.addEventListener("click", e => {
			var nameWatch = e.currentTarget.dataset.namewatch,
				xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("newWatchName").innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET", "addSerieWatch.php?serie=<?php echo $_GET['id']; ?>&type=<?php echo $obj["type"]; ?>&rated=<?php echo $obj["rating"]; ?>&name=<?php echo $title; ?>&image=<?php echo $obj["images"]["jpg"]["large_image_url"] ?>&watch=" + nameWatch, true);
			xmlhttp.send();
		}));
	</script>
	<script>
			window.onclick = function(event) {
				var modal = document.getElementById("myModal");
				if (event.target == modal) {
					modal.style.display = "none";
				}
			}

			function nameNewWatch() {
				var span3 = document.getElementById("newWatchName"),
					inputElems = document.getElementsByTagName("input"),
					count = 0,
					affPlur = "";
				for (var i=0; i<inputElems.length; i++) {       
					if (inputElems[i].type == "checkbox" && inputElems[i].checked == true){
						count++;
					}
				}
				if(count>1){affPlur="s";}
//				alert(count);
				if(count==0){
					span3.innerHTML="Select all watchlists you want to add this series to";
				}else{
					span3.innerHTML="You have selected: "+count+" watchlist"+affPlur;
				}
			}
			
			function saveSerie(){
				var watchlist='<?php echo $mal_id; ?>';
			}
	</script>
</body>
</html>