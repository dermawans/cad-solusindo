<!--========================= Content Wrapper ==============================-->
 
<!-- start: page -->
<div class="row">
    <section class="panel panel-dark">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a> 
            </div>

            <h2 class="panel-title">Dashboard</h2>
        </header>
        <div class="panel-body">
            <div class="col-md-12 col-lg-12 col-xl-4">
								<div class="row">
									<div class="col-md-6 col-xl-12">
										<section class="panel">
											<div class="panel-body bg-primary">
												<div class="widget-summary">
													<div class="widget-summary-col widget-summary-col-icon">
														<div class="summary-icon">
															<i class="fa fa-life-ring"></i>
														</div>
													</div>
													<div class="widget-summary-col">
														<div class="summary">
															<h4 class="title">Total Lowongan Yang Masih Buka</h4>
															<div class="info">
																<strong class="amount"><?php echo $jumlah_lowongan_aktif ; ?></strong>
															</div>
														</div>
														<div class="summary-footer">
															<a href="<?php base_url();?>lowongan" class="text-uppercase">(view)</a>
														</div>
													</div>
												</div>
											</div>
										</section>
									</div>
									<div class="col-md-6 col-xl-12">
										<section class="panel">
											<div class="panel-body bg-secondary">
												<div class="widget-summary">
													<div class="widget-summary-col widget-summary-col-icon">
														<div class="summary-icon">
															<i class="fa fa-life-ring"></i>
														</div>
													</div>
													<div class="widget-summary-col">
														<div class="summary">
															<h4 class="title">Total Pelamar</h4>
															<div class="info">
																<strong class="amount"><?php echo $jumlah_pelamar ; ?></strong>
															</div>
														</div>
														<div class="summary-footer">
															<a href="<?php base_url();?>pelamar" class="text-uppercase">(view)</a>
														</div>
													</div>
												</div>
											</div>
										</section>
									</div>
								</div>
							</div>
						</div>
        </div>
    </section>
</div>
                    
<!-- end: page -->


