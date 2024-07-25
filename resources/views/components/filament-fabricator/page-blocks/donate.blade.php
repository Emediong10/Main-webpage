@aware(['page'])
@props(['main_header', 'name', 'account', 'number', 'bank'])
<section id="content">
			<div class="content-wrap py-0">



				<div class="modal-on-load" data-target="#block-modal-request"></div>

				<!-- Modal -->
				<div class="modal1 mfp-hide" id="block-modal-request">
					<div class="modal-dialog modal-dialog-centered modal-lg">
						<div class="modal-content bg-white p-4 p-md-5 rounded">
							<div class="d-flex justify-content-between mb-2">
								<h3 class="mb-0 text-uppercase ls1">{{ $main_header }}</h3>
								<a href="#" onClick="$.magnificPopup.close();return false;" class="text-muted h4 mb-0 h-text-danger"><i class="icon-line-circle-cross"></i></a>
							</div>
							<div class="line double-line mt-2 mb-4"></div>

							<div class="form-widget">

								<div class="form-result"></div>

								<div class="col-md-8">

									<div class="pricing-box rounded-5 pricing-simple p-5 bg-light border text-center text-md-start">
										<div class="d-flex flex-column flex-lg-row justify-content-between mb-4">
											<div>
												<h3 class="mb-3">{{ $name }}</h3>
												<div class="line border-width-4 border-dark p-0 m-0 w-25 mx-auto mx-md-0"></div>
											</div>

										</div>
										<div class="pricing-features">
											<h5 class="mb-2 fw-semibold">{{ $bank }}</h5>
											<ul class="iconlist">
                                                @foreach ($account as $item)

												<li><i class="icon-check text-smaller"></i>{{ $item['number'] }}</li>
                                                @endforeach

											</ul>
										</div>
										{{-- <div class="text-center">
											<a href="#" class="d-block text-dark mb-2">View all Features</a>
											<a href="#" class="btn text-white btn-lg" style="background-color: #175C4A">Free Trail for 30 Days</a>
										</div> --}}
									</div>

								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</section><!-- #content end -->
        <div >

             <livewire:donation/>
         </div>
         @livewireScripts()


