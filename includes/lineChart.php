

<div class="container   mb-5"  >
					<h6 class="text-center text-extra-dark-gray alt-font font-weight-600">Trendi i krimeve seksuale në dhjetë vitet e fundit<span class="text-light-gray d-block d-md-inline-block">(2010-2019)</span></h6>

 
							<!-- start message box item -->
                        <div class="alert alert-danger alert-dismissable mt-5">
                            <strong>Shënim:</strong> Grafiku tregon trendin e krimeve seksuale me të mitur nën 14-vjec përgjatë viteve 2010-2019 që janë dhënë me vendim gjykate të shkallës së parë, sipas shtatë neneve të Kodit Penal. Për të parë tendencën e vetëm një ose disa neneve që ju dëshironi, klikoni në legjendën e mëposhtme për të caktivizuar nenet e tjera. 
                        </div>
                        <!-- end message box item -->				
</div>
<div class="container">
 <canvas height="500" id="canvas"></canvas>
</div>
<script>
window.chartColors = {
  red: '#ff0000',
  orange: '#e800ff',
  yellow: '#0cff00',
  green: '#fffb00',
  blue: '#ff7800',
  purple: '#00ffec',
  grey: '#006ba1'
};

var randomScalingFactor = function() {
  return (Math.random() > 0.5 ? 1.0 : 1.0) * Math.round(Math.random() * 100);
};

var line1 = [5, 1, 7, 5,11, 10,9,5,6,15 ];

var line2 = [4,2,1,2,6,4,6,3,3,8 ];

var line3 = [0,0,2,1,0,0,0,0,0,0 ];

var line4 = [4,3,5,11,11,18,15,8,5,16 ];

var line5 = [0,0,0,2,9,5,2,7,3,8 ];

var line6 = [0,0,0,0,0,0,1,0,0,1 ];

var line7 = [0, 0,0,4,6,10,6,8,13,8 ];


var VITI = ["2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019"];
var config = {
  type: 'line',
  data: {
    labels: VITI,
    datasets: [{
      label: "Neni 100",
      backgroundColor: window.chartColors.red,
      borderColor: window.chartColors.red,
      data: line1,
      fill: false,
    }, {
      label: "Neni 101",
      fill: false,
      backgroundColor: window.chartColors.blue,
      borderColor: window.chartColors.blue,
      data: line2,
    },
	{
      label: "Neni 107/a",
      fill: false,
      backgroundColor: window.chartColors.yellow,
      borderColor: window.chartColors.yellow,
      data: line3,
    },
	{
      label: "Neni 108",
      fill: false,
      backgroundColor: window.chartColors.green,
      borderColor: window.chartColors.green,
      data: line4,
    },
	{
      label: "Neni 108/a",
      fill: false,
      backgroundColor: window.chartColors.orange,
      borderColor: window.chartColors.orange,
      data: line5,
    },
	{
      label: "Neni 117",
      fill: false,
      backgroundColor: window.chartColors.purple,
      borderColor: window.chartColors.purple,
      data: line6,
    },
	{
      label: "Neni 121/a/3",
      fill: false,
      backgroundColor: window.chartColors.grey,
      borderColor: window.chartColors.grey,
      data: line7,
    }]
  },
  options: {
    responsive: true,
	maintainAspectRatio:false,
    title:{
      display:false,
      text:'Trendi i krimeve seksuale në dhjetë vitet e fundit'
    },
	legend:{
		display:true,
		position: 'bottom',
	},
    tooltips: {
      mode: 'index',
      intersect: false,
	  position:'average',
    },
   hover: {
      mode: 'nearest',
      intersect: true
    },
    scales: {
      xAxes: [{
        display: true,
        scaleLabel: {
          display: true,
          labelString: 'Viti'
        }
      }],
      yAxes: [{
        display: true,
        scaleLabel: {
          display: true,
        },
      }]
    }
  }
};

var ctx = document.getElementById("canvas").getContext("2d");
var myLine = new Chart(ctx, config);



setTimeout(yourFunction, 250);
function yourFunction()	{
$('.nav-tabs a[href="#tab_sec2"]').tab('show')

}
</script>
