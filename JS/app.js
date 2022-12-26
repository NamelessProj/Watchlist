/*
var mysql = require('mysql');

var con = mysql.createConnection({
	host: "localhost",
	user: "root",
	password: "",
	database: "watchlist_2"
});

function addWatch(e){
    var serie = e.id;
//	alert (serie);
	
	con.connect(function(err) {
		if (err) throw err;
		con.query("SELECT * FROM watchlists", function (err, result, fields) {
			if (err) throw err;
			console.log(result);
		});
	});
	event.stopPropagation();
}
*/

//function addWatch(e){
//    var serie = e.id;
//	alert (serie);
//}


/* function closePopup(){
	var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
} */

function popup(){
    var popup = document.getElementById("myPopup");
	var bodie = document.body;
    popup.classList.toggle("show");
	bodie.classList.toggle("overflowY");
	Event.stopPropagation();
}