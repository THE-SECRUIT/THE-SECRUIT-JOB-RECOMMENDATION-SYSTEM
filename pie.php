<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script>
window.onload = function () {

var chart1 = new CanvasJS.Chart("chartContainer1", {
	backgroundColor: "#d8ac29",
	animationEnabled: true,
	title:{
		text: "JOB CATEGORIES",
		horizontalAlign: "center"
	},
	data: [{
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: [
			{ y: 478, label: "Applications Developer" },
			{ y: 475, label: "Business Intelligence Analyst" },
			{ y: 511, label: "Business Systems Analyst" },
			{ y: 505, label: "CRM Business Analyst"},
			{ y: 502, label: "CRM Technical Developer"},
			{ y: 486, label: "Data Architect"},
			{ y: 500, label: "Database Administrator"},
			{ y: 487, label: "Database Developer" },
			{ y: 486, label: "Database Manager" },
			{ y: 499, label: "Design & UX" },
			{ y: 473, label: "E-Commerce Analyst"},
			{ y: 467, label: "Information Security Analyst"},
			{ y: 480, label: "Information Technology Auditor"},
			{ y: 521, label: "Information Technology Manager"},
			{ y: 467, label: "Mobile Applications Developer" },
			{ y: 535, label: "Network Engineer" },
			{ y: 944, label: "Network Security Administrator" },
			{ y: 539, label: "Network Security Engineer"},
			{ y: 512, label: "Portal Administrator"},
			{ y: 444, label: "Programmer Analyst"},
			{ y: 503, label: "Project Manager"},
			{ y: 494, label: "Quality Assurance Associate" },
			{ y: 511, label: "Software Developer" },
			{ y: 504, label: "Software Engineer" },
			{ y: 478, label: "Software Quality Assurance (QA) / Testing"},
			{ y: 494, label: "Software Systems Engineer"},
			{ y: 503, label: "Solutions Architect"},
			{ y: 490, label: "Systems Analyst"},
			{ y: 488, label: "Systems Security Administrator" },
			{ y: 473, label: "Technical Engineer" },
			{ y: 497, label: "Technical Services/Help Desk/Tech Support" },
			{ y: 485, label: "Technical Support"},
			{ y: 502, label: "UX Designer"},
			{ y: 483, label: "Web Developer"},
		]
	}]
});

var chart2 = new CanvasJS.Chart("chartContainer2", {
	backgroundColor: "#000000",
	animationEnabled: true,
	title:{
		text: "CERTIFICATIONS",
		horizontalAlign: "center",
		fontColor: "#d8ac29"
	},
	data: [{
		indexLabelFontColor: "#d8ac29",
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: [
			{ y: 1885, label: "App Developement" },
			{ y: 1847, label: "Distro Making" },
			{ y: 1930, label: "Full Stack" },
			{ y: 1910, label: "Hadoop"},
			{ y: 1944, label: "Information Security"},
			{ y: 1950, label: "Machine Learning"},
			{ y: 1857, label: "Python"},
			{ y: 1945, label: "R-Programming" },
			{ y: 1949, label: "Shell Programming" },
		]
	}]
});

var chart3 = new CanvasJS.Chart("chartContainer3", {
	backgroundColor: "#000000",
	animationEnabled: true,
	title:{
		text: "WORKSHOPS",
		horizontalAlign: "center",
		fontColor: "#d8ac29"
	},
	data: [{
		indexLabelFontColor: "#d8ac29",
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: [
			{ y: 2055, label: "Cloud Computing" },
			{ y: 2227, label: "Data Science" },
			{ y: 2152, label: "Database Security" },
			{ y: 2167, label: "Game Developement"},
			{ y: 2138, label: "Hacking"},
			{ y: 2156, label: "System Designing"},
			{ y: 2118, label: "Testing"},
			{ y: 2204, label: "Web Technologies" },
		]
	}]
});


var chart4 = new CanvasJS.Chart("chartContainer4", {
	backgroundColor: "#d8ac29",
	animationEnabled: true,
	title:{
		text: "INTERESTED SUBJECTS",
		horizontalAlign: "center",
	},
	data: [{
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: [
			{ y: 1741, label: "Cloud Computing" },
			{ y: 1716, label: "Computer Architecture" },
			{ y: 1737, label: "Data Engineering" },
			{ y: 1777, label: "Internet of Things"},
			{ y: 1732, label: "Ethical Hacking"},
			{ y: 1662, label: "Management"},
			{ y: 1798, label: "Computer Networks"},
			{ y: 1674, label: "Parallel Computing" },
			{ y: 1704, label: "Programming" },
			{ y: 1676, label: "Software Engineering" },
		]
	}]
});

var chart5 = new CanvasJS.Chart("chartContainer5", {
	backgroundColor: "#d8ac29",
	animationEnabled: true,
	title:{
		text: "INTERESTED CARRIER AREA",
		horizontalAlign: "center"
	},
	data: [{
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: [
			{ y: 2887, label: "Buisness Process Analyst" },
			{ y: 2845, label: "Cloud Computing" },
			{ y: 2825, label: "Developer" },
			{ y: 2870, label: "Security"},
			{ y: 2892, label: "System Developer"},
			{ y: 2897, label: "Testing"},
		]
	}]
});


var chart6 = new CanvasJS.Chart("chartContainer6", {
	backgroundColor: "#000000",
	animationEnabled: true,
	title:{
		text: "INTERESTED JOB FARMS",
		horizontalAlign: "center",
		fontColor: "#d8ac29"
	},
	data: [{
		indexLabelFontColor: "#d8ac29",
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: [
			{ y: 1797, label: "BPA" },
			{ y: 1728, label: "Cloud Services" },
			{ y: 1694, label: "Finance" },
			{ y: 1713, label: "Product Based"},
			{ y: 1672, label: "Product Developement"},
			{ y: 1667, label: "SaaS Services"},
			{ y: 1686, label: "Sales and Marketing"},
			{ y: 1762, label: "Service Based"},
			{ y: 1779, label: "Testing and Maintanence Services"},
			{ y: 1718, label: "Web Services"},
		]
	}]
});

var chart7 = new CanvasJS.Chart("chartContainer7", {
	backgroundColor: "#000000",
	animationEnabled: true,
	title:{
		text: "READING INTERESTS",
		horizontalAlign: "center",
		fontColor: "#d8ac29"
	},
	data: [{
		indexLabelFontColor: "#d8ac29",
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: [
			{ y: 514, label: "Anthology" },
			{ y: 475, label: "Action and Adventure" },
			{ y: 500, label: "Art" },
			{ y: 524, label: "Autobiographies"},
			{ y: 505, label: "Biographies"},
			{ y: 484, label: "Childrens"},
			{ y: 503, label: "Comics"},
			{ y: 477, label: "Cookbooks" },
			{ y: 490, label: "Diaries" },
			{ y: 492, label: "Dictionaries" },
			{ y: 485, label: "Drama"},
			{ y: 499, label: "Encyclopedias"},
			{ y: 531, label: "Fantasy"},
			{ y: 997, label: "Guide"},
			{ y: 1002, label: "Health" },
			{ y: 499, label: "History" },
			{ y: 964, label: "Horror" },
			{ y: 478, label: "Journals"},
			{ y: 457, label: "Math"},
			{ y: 497, label: "Mystery"},
			{ y: 517, label: "Poetry"},
			{ y: 506, label: "Prayer Books" },
			{ y: 478, label: "Religion-Spirituality" },
			{ y: 478, label: "Romance" },
			{ y: 500, label: "Satire"},
			{ y: 467, label: "Science"},
			{ y: 505, label: "Science Fiction"},
			{ y: 984, label: "Self-help"},
			{ y: 470, label: "Series" },
			{ y: 472, label: "Travel" },
			{ y: 467, label: "Trilogy" },
		]
	}]
});

var chart8 = new CanvasJS.Chart("chartContainer8", {
	backgroundColor: "#d8ac29",
	animationEnabled: true,
	title:{
		text: "WORKING HOURS/DAY",
		horizontalAlign: "center"
	},
	data: [{
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: [
			{ y: 1932, label: "4" },
			{ y: 1950, label: "5" },
			{ y: 1895, label: "6" },
			{ y: 1941, label: "7"},
			{ y: 1895, label: "8"},
			{ y: 1888, label: "9"},
			{ y: 1886, label: "10"},
			{ y: 1886, label: "11"},
			{ y: 1944, label: "12"},
		]
	}]
});

var chart9 = new CanvasJS.Chart("chartContainer9", {
	backgroundColor: "#d8ac29",
	animationEnabled: true,
	title:{
		text: "IQ SCORE(out of 10)",
		horizontalAlign: "center"
	},
	data: [{
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: [
			{ y: 1891, label: "1" },
			{ y: 1943, label: "2" },
			{ y: 1897, label: "3" },
			{ y: 1929, label: "4"},
			{ y: 1971, label: "5"},
			{ y: 1888, label: "6"},
			{ y: 1895, label: "7"},
			{ y: 1900, label: "8"},
			{ y: 1903, label: "9"},
		]
	}]
});

var chart10 = new CanvasJS.Chart("chartContainer10", {
	backgroundColor: "#000000",
	animationEnabled: true,
	title:{
		text: "HACKATHONS ATTAINED",
		horizontalAlign: "center",
		fontColor: "#d8ac29"
	},
	data: [{
		indexLabelFontColor: "#d8ac29",
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: [
			{ y: 2501, label: "0" },
			{ y: 2439, label: "1" },
			{ y: 2491, label: "2" },
			{ y: 2490, label: "3" },
			{ y: 2371, label: "4"},
			{ y: 2440, label: "5"},
			{ y: 2485, label: "6"},
		]
	}]
});

var chart11 = new CanvasJS.Chart("chartContainer11", {
	backgroundColor: "#000000",
	animationEnabled: true,
	title:{
		text: "CODING SKILLS RATING",
		horizontalAlign: "center",
		fontColor: "#d8ac29"
	},
	data: [{
		indexLabelFontColor: "#d8ac29",
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: [
			{ y: 1835, label: "1" },
			{ y: 1982, label: "2" },
			{ y: 1926, label: "3" },
			{ y: 1899, label: "4"},
			{ y: 1902, label: "5"},
			{ y: 1917, label: "6"},
			{ y: 1921, label: "7"},
			{ y: 1916, label: "8"},
			{ y: 1919, label: "9"},
		]
	}]
});

var chart12 = new CanvasJS.Chart("chartContainer12", {
	backgroundColor: "#d8ac29",
	animationEnabled: true,
	title:{
		text: "PUBLIC SPEAKING CAPABILITY",
		horizontalAlign: "center"
	},
	data: [{
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: [
			{ y: 1923, label: "1" },
			{ y: 1903, label: "2" },
			{ y: 1864, label: "3" },
			{ y: 1987, label: "4"},
			{ y: 1866, label: "5"},
			{ y: 1917, label: "6"},
			{ y: 1967, label: "7"},
			{ y: 1868, label: "8"},
			{ y: 1922, label: "9"},
		]
	}]
});

var chart13 = new CanvasJS.Chart("chartContainer13", {
	backgroundColor: "#d8ac29",
	animationEnabled: true,
	title:{
		text: "HIGH-WORKING CAPABILITY",
		horizontalAlign: "center"
	},
	data: [{
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: [
			{ y: 8588, label: "No" },
			{ y: 8629, label: "Yes" },
		]
	}]
});

var chart14 = new CanvasJS.Chart("chartContainer14", {
	backgroundColor: "#000000",
	animationEnabled: true,
	title:{
		text: "SELF_LEARNING CAPABILITY",
		horizontalAlign: "center",
		fontColor: "#d8ac29"
	},
	data: [{
		indexLabelFontColor: "#d8ac29",
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: [
			{ y: 8538, label: "No" },
			{ y: 8679, label: "Yes" },
		]
	}]
});


var chart15 = new CanvasJS.Chart("chartContainer15", {
	backgroundColor: "#000000",
	animationEnabled: true,
	title:{
		text: "EXTRA_COURSES DONE:",
		horizontalAlign: "center",
		fontColor: "#d8ac29",
	},
	data: [{
		indexLabelFontColor:"#d8ac29",
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: [
			{ y: 8644, label: "No" },
			{ y: 8573, label: "Yes" },
		]
	}]
});


var chart16 = new CanvasJS.Chart("chartContainer16", {
	backgroundColor: "#d8ac29",
	animationEnabled: true,
	title:{
		text: "TALENT-TESTS TAKEN",
		horizontalAlign: "center"
	},
	data: [{
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: [
			{ y: 8523, label: "No" },
			{ y: 8694, label: "Yes" },
		]
	}]
});

var chart17 = new CanvasJS.Chart("chartContainer17", {
	backgroundColor: "#d8ac29",
	animationEnabled: true,
	title:{
		text: "OLYMPIADS TAKEN",
		horizontalAlign: "center"
	},
	data: [{
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: [
			{ y: 8553, label: "No" },
			{ y: 8664, label: "Yes" },
		]
	}]
});

var chart18 = new CanvasJS.Chart("chartContainer18", {
	backgroundColor: "#000000",
	animationEnabled: true,
	title:{
		text: "COMPREHENSIVE SKILLS",
		horizontalAlign: "center",
		fontColor: "#d8ac29"
	},
	data: [{
		indexLabelFontColor:"#d8ac29",
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: [
			{ y: 5748, label: "Excellent" },
			{ y: 5717, label: "Medium" },
			{ y: 5752, label: "Poor" },
		]
	}]
});

var chart19 = new CanvasJS.Chart("chartContainer19", {
	backgroundColor:"#000000",
	animationEnabled: true,
	title:{
		text: "JOBS/HIGHER-STUDIES",
		horizontalAlign: "center",
		fontColor: "#d8ac29"
	},
	data: [{
		indexLabelFontColor:"#d8ac29",
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: [
			{ y: 8574, label: "Job" },
			{ y: 8642, label: "Higherstudies" },
		]
	}]
});

var chart20 = new CanvasJS.Chart("chartContainer20", {
	backgroundColor:"#d8ac29",
	animationEnabled: true,
	title:{
		text: "SENIORPEER INTERACTION",
		horizontalAlign: "center"
	},
	data: [{
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: [
			{ y: 8573, label: "No" },
			{ y: 8643, label: "Yes" },
		]
	}]
});

var chart21 = new CanvasJS.Chart("chartContainer21", {
	backgroundColor: "#d8ac29",
	animationEnabled: true,
	title:{
		text: "INTEREST IN GAMES",
		horizontalAlign: "center"
	},
	data: [{
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: [
			{ y: 8614, label: "No" },
			{ y: 8602, label: "Yes" },
		]
	}]
});

var chart22 = new CanvasJS.Chart("chartContainer22", {
	backgroundColor: "#000000",
	animationEnabled: true,
	title:{
		text: "BEHAVIOUR",
		horizontalAlign: "center",
		fontColor: "#d8ac29",
	},
	data: [{
		indexLabelFontColor:"#d8ac29",
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: [
			{ y: 8647, label: "Gentle" },
			{ y: 8569, label: "Stubborn" },
		]
	}]
});

var chart23 = new CanvasJS.Chart("chartContainer23", {
	backgroundColor:"#000000",
	animationEnabled: true,
	title:{
		text: "WORKER TYPE",
		horizontalAlign: "center",
		fontColor: "#d8ac29"
	},
	data: [{
		indexLabelFontColor: "#d8ac29",
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: [
			{ y: 8596, label: "Hard Worker" },
			{ y: 8620, label: "Smart Worker" },
		]
	}]
});

var chart24 = new CanvasJS.Chart("chartContainer24", {
	backgroundColor: "#d8ac29",
	animationEnabled: true,
	title:{
		text: "TEAM-WORKER",
		horizontalAlign: "center"
	},
	data: [{
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: [
			{ y: 8663, label: "No" },
			{ y: 8553, label: "Yes" },
		]
	}]
});

chart1.render();
chart2.render();
chart3.render();
chart4.render();
chart5.render();
chart6.render();
chart7.render();
chart8.render();
chart9.render();
chart10.render();
chart11.render();
chart12.render();
chart13.render();
chart14.render();
chart15.render();
chart16.render();
chart17.render();
chart18.render();
chart19.render();
chart20.render();
chart21.render();
chart22.render();
chart23.render();
chart24.render();
}

</script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<img src="images.jfif" width="30" height="30" alt="" style="border-radius: 45px;">
		&nbsp;&nbsp;&nbsp;&nbsp;
	<a class="navbar-brand" href="particle.php" style="color: #d8ac29">SECRUIT</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="1STPAGE.html" style="color: #d8ac29">JobAssist<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="pie.php" style="color: #d8ac29">Analysis</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="my_account.php" style="color: #d8ac29">My Profile</a>
			</li>
		</ul>
		<div id="session" style="background-color: #d8ac29;font-size: 20px;border-radius: 5px;">
		</div>
	</nav>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<div id="chartContainer1" style="width: 49%; height: 250px;display: inline-block;"></div>
<div id="chartContainer2" style="width: 49%; height: 250px;display: inline-block;"></div><br>
<div id="chartContainer3" style="width: 49%; height: 250px;display: inline-block;"></div>
<div id="chartContainer4" style="width: 49%; height: 250px;display: inline-block;"></div><br>
<div id="chartContainer5" style="width: 49%; height: 250px;display: inline-block;"></div>
<div id="chartContainer6" style="width: 49%; height: 250px;display: inline-block;"></div><br>
<div id="chartContainer7" style="width: 49%; height: 250px;display: inline-block;"></div>
<div id="chartContainer8" style="width: 49%; height: 250px;display: inline-block;"></div><br>
<div id="chartContainer9" style="width: 49%; height: 250px;display: inline-block;"></div>
<div id="chartContainer10" style="width: 49%; height: 250px;display: inline-block;"></div><br>
<div id="chartContainer11" style="width: 49%; height: 250px;display: inline-block;"></div>
<div id="chartContainer12" style="width: 49%; height: 250px;display: inline-block;"></div><br>
<div id="chartContainer13" style="width: 49%; height: 250px;display: inline-block;"></div>
<div id="chartContainer14" style="width: 49%; height: 250px;display: inline-block;"></div><br>
<div id="chartContainer15" style="width: 49%; height: 250px;display: inline-block;"></div>
<div id="chartContainer16" style="width: 49%; height: 250px;display: inline-block;"></div><br>
<div id="chartContainer17" style="width: 49%; height: 250px;display: inline-block;"></div>
<div id="chartContainer18" style="width: 49%; height: 250px;display: inline-block;"></div><br>
<div id="chartContainer19" style="width: 49%; height: 250px;display: inline-block;"></div>
<div id="chartContainer20" style="width: 49%; height: 250px;display: inline-block;"></div><br>
<div id="chartContainer21" style="width: 49%; height: 250px;display: inline-block;"></div>
<div id="chartContainer22" style="width: 49%; height: 250px;display: inline-block;"></div><br>
<div id="chartContainer23" style="width: 49%; height: 250px;display: inline-block;"></div>
<div id="chartContainer24" style="width: 49%; height: 250px;display: inline-block;"></div><br>
</body>
</html>
