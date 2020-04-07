<div class="container   mb-5"  >
					
					
				<div class="row">
				
				<div class="col-lg-6">
						<div class="grafiku1 mt-5">
						<span class="text-center mb-5text-medium text-extra-dark-gray alt-font font-weight-600 margin-10px-bottom d-block">Raporti gjinor i viktimave nga krimet seksuale me të mitur nën 14-vjec në Shqipëri (2010-2019)</span>
						<canvas id="oilChart2" width="600" height="300"></canvas>
							<script>
							var oilCanvas = document.getElementById("oilChart2");

							Chart.defaults.global.defaultFontFamily = "Lato";
							Chart.defaults.global.defaultFontSize = 18;

							var oilData = {
								labels: [
									"38 Meshkuj",
									"93 Femra",
								],
								datasets: [
									{
										data: [38,93],
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
											  var value = '.';

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
				
				
					<div class="col-lg-6 mt-5 ">
					<span class="text-center mb-5text-medium text-extra-dark-gray alt-font font-weight-600 margin-10px-bottom d-block">Grupmoshat e viktimave në krimet seksuale me të mitur nën 14-vjec në Shqipëri (2010-2019)</span>
						<div class="tabela">
						
					  <table class="table table-striped">

						<tbody>
						  <tr>
							<td>Mosha</td>
							<td>0-4</td>
							<td>5-9</td>
							<td>10-14</td>
						  </tr>
						  <tr>
							<td>Rastet</td>
							<td>2</td>
							<td>48</td>
							<td>109</td>
						  </tr>	
						</tbody>
					  </table>
					</div>
					</div>
					
					
				</div>	
				
				
				




				
					
					
</div>
