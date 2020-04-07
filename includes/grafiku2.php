	<div class="chartjs-wrapper" style="position: relative; height:60vh; width:100vw">
		<canvas  id="chartjs-1" ></canvas>
	</div>
	<script>
	new Chart(document.getElementById("chartjs-1"),
	{
	"type":"bar",
	"data":
	{"labels":
	[
	"Brenda rrethit familjar","Fqinjësi/miqësi","Lidhje afektive","Njohje rastesore","Njohje online"],
	"datasets":[{
	"label":"Numri i rasteve",
	"data":[38,60,20,24,6],
	"fill":true,
	"backgroundColor":[
	"rgba(255, 99, 132, 0.2)",
	"rgba(255, 159, 64, 0.2)","rgba(255, 205, 86, 0.2)",
	"rgba(75, 192, 192, 0.2)","rgba(54, 162, 235, 0.2)",
	"rgba(153, 102, 255, 0.2)","rgba(201, 203, 207, 0.2)"],
		}]
	},
	"options":{
					responsive: true,
					maintainAspectRatio:false,
	"legend":{
		display:false
	},

	}
	});
	</script>