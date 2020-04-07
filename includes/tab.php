 <!-- start tab style 01 section -->
        <section id="dbPedofilise" class="wow fadeIn">
            <div class="tab-style2">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-7 text-center margin-100px-bottom sm-margin-40px-bottom">
                        <div class="position-relative overflow-hidden w-100">
                            <span class="text-small text-outside-line-full alt-font font-weight-600 text-uppercase">Databaza e pedofilisë</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- start tab navigation -->
                        <ul class="nav nav-tabs alt-font text-uppercase text-small text-center font-weight-600 justify-content-center">
                            <li class="nav-item"><a class="nav-link active" href="#tab_sec1" data-toggle="tab">Krimet seksuale</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tab_sec2" data-toggle="tab">Harta Kombëtare</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tab_sec3" data-toggle="tab">Gjinia & Grupmoshat</a></li>
                        </ul>
                        <!-- end tab navigation -->
                    </div>
                </div>                                
                <div class="tab-content">
                    <!-- start tab content -->
                    <div class="tab-pane med-text fade in active show" id="tab_sec1">
                        <div class="row align-items-center">
							<?php require 'lineChart.php' ?>

                        </div>
                    </div>
                    <!-- end tab content -->
                    <!-- start tab content -->
                    <div class="tab-pane fade in" id="tab_sec2">
                        <div class="row align-items-center">
							<?php require 'harta.php' ?>
                        </div>
                    </div>
                    <!-- end tab content -->
                    <!-- start tab content -->
                    <div class="tab-pane fade in" id="tab_sec3">
						<div class="container">
								<h6 class="text-center text-extra-dark-gray alt-font font-weight-600">Raporti gjinor i abuzuesve për krime seksuale me të mitur nën 14-vjec në Shqipëri <span class="text-light-gray d-block d-md-inline-block">(2010-2019)</span></h6>
						</div>
                        <div class="row align-items-center bg-light-gray ">
							<?php require 'grupmoshat.php' ?>
                        </div>
						
							<div class="separator-line-horrizontal-full bg-extra-light-gray margin-50px-tb height-2px width-80 mx-auto"></div>	
						
						<div class="row align-items-center bg-light-gray ">
							<?php require 'grupmoshat2.php' ?>
                        </div>
                    </div>
                    <!-- end tab content -->
                </div>       
            </div>
        </section>
        <!-- end tab style 01 section -->