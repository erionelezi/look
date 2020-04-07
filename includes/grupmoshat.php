<div class="container   mb-5"  >
					
					
				<div class="row">
					<div class="col-lg-6 mt-5 ">
					<span class=" mb-5text-medium text-extra-dark-gray alt-font font-weight-600 margin-10px-bottom d-block text-center">Grupmosha e abuzuesve seksual në krimet seksuale me të mitur nën 14-vjec në Shqipëri (2010-2019)</span>
						<div class="tabela">
						
					  <table class="table table-striped">

						<tbody>
						  <tr>
							<td>Mosha</td>
							<td>16-26</td>
							<td>27-37</td>
							<td>38-48</td>
							<td>49-59</td>
							<td>Mbi 60</td>
						  </tr>
						  <tr>
							<td>Rastet</td>
							<td>50</td>
							<td>15</td>
							<td>13</td>
							<td>18</td>
							<td>25</td>
						  </tr>	
						</tbody>
					  </table>
					</div>
					</div>
					
					<div class="col-lg-6">
						<div class="grafiku1 mt-5">
						<span class="text-center mb-5text-medium text-extra-dark-gray alt-font font-weight-600 margin-10px-bottom d-block">Raporti gjinor i viktimave nga krimet seksuale me të mitur nën 14-vjec në Shqipëri (2010-2019)</span>
						<canvas id="oilChart" width="600" height="300"></canvas>
							<script>
							var oilCanvas = document.getElementById("oilChart");

							Chart.defaults.global.defaultFontFamily = "Lato";
							Chart.defaults.global.defaultFontSize = 18;

							var oilData = {
								labels: [
									"Meshkuj",
									"Femra",
								],
								datasets: [
									{
										data: [98.7,2.3],
										backgroundColor: [
											"#FF6384",
											"#007bff",

										]
									}]
							};
							

							var pieChart = new Chart(oilCanvas, {
							  type: 'pie',
							  data: oilData,
							      options: {
									tooltips: {
										  callbacks: {
											// this callback is used to create the tooltip label
											label: function(tooltipItem, data) {
											  // get the data label and data value to display
											  // convert the data value to local string so it uses a comma seperated number
											  var dataLabel = data.labels[tooltipItem.index];
											  var value = ': ' + data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index].toLocaleString() + " %";

											  // make this isn't a multi-line label (e.g. [["label 1 - line 1, "line 2, ], [etc...]])
											  if (Chart.helpers.isArray(dataLabel)) {
												// show value on first line of multiline label
												// need to clone because we are changing the value
												dataLabel = dataLabel.slice();
												dataLabel[0] += value;
											  } else {
												dataLabel += value;
											  }

											  // return the text to display on the tooltip
											  return dataLabel;
											}
										  }
										
									}
								}
							});
							</script>
						</div>
					</div>
				</div>	
				
				
				




				
					
					
</div>
