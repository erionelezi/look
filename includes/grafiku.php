
		<div class="chart-container" style="position: relative; height:60vh; width:100vw">
    <canvas id="canvas2"></canvas>
</div>
	<script>
	window.chartColors = {
  red: '#ff0000',
  orange: '#e800ff',
  yellow: '#000cff',
  green: '#fffb00',
  blue: '#00ffec',
  purple: '#006ba1',
  grey: '#0cff00'
};
		var barChartData = {
			labels: ['Brenda rrethit familjar', 'Fqinjësi/Miqësi', 'Lidhje afektive', 'Njohje rastësore', 'Njohje online'],
			datasets: [{
				label: 'Neni 100/1',
				backgroundColor: window.chartColors.red,
				data: [
					6,
					5,
					16,
					2,
					1,

				]
			}, {
				label: 'Neni 100/2',
				backgroundColor: window.chartColors.blue,
				data: [
					5,
					7,
					3,
					2,
					0,

				]
			}, {
				label: 'Neni 108/1',
				backgroundColor: window.chartColors.green,
				data: [
					2,
					2,
					1,
					5,
					0,
				]
			}, {
				label: 'Neni 108/2',
				backgroundColor: window.chartColors.yellow,
				data: [
					9,
					1,
					0,
					2,
					0,

				]
			},
			 {
				label: 'Neni 108/4',
				backgroundColor: window.chartColors.purple,
				data: [
					1,
					5,
					0,
					1,
					0,

				]
			},
			 {
				label: 'Neni 108/a/2',
				backgroundColor: window.chartColors.orange,
				data: [
					2,
					0,
					0,
					1,
					0,

				]
			},
			 {
				label: 'Neni 117',
				backgroundColor: window.chartColors.blue,
				data: [
					0,
					4,
					0,
					0,
					1,

				]
			},
						 {
				label: 'Neni 121/a/3',
				backgroundColor: window.chartColors.grey,
				data: [
					0,
					20,
					0,
					0,
					0,

				]
			},
			
			]

		};
		window.onload = function() {
			var ctx = document.getElementById('canvas2').getContext('2d');
			window.myBar = new Chart(ctx, {
				type: 'bar',
				data: barChartData,
				options: {
					responsive: true,
					maintainAspectRatio:false,

					tooltips: {
						mode: 'index',
						intersect: false
					},
					responsive: true,
					scales: {
						xAxes: [{
							stacked: true,
						}],
						yAxes: [{
							stacked: true
						}]
					}
				}
			});
		};

	</script>