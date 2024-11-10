@aware(['page'])
@props(['main_header', 'name', 'account', 'number', 'bank'])
<section id="content">
			<div class="py-0 content-wrap">



				<div class="modal-on-load" data-target="#block-modal-request"></div>

				<!-- Modal -->
				<div class="modal1 mfp-hide" id="block-modal-request">
					<div class="modal-dialog modal-dialog-centered modal-lg center">
						<div class="p-4 bg-white rounded modal-content p-md-5">
							<div class="mb-2 d-flex justify-content-between">
								<h3 class="mb-0 text-uppercase ls1"> <strong>{{ $main_header }}</strong></h3>
								<a href="#" onClick="$.magnificPopup.close();return false;" class="mb-0 text-muted h4 h-text-danger"><i class="icon-line-circle-cross"></i></a>
							</div>
							<div class="mt-2 mb-4 line double-line"></div>

							<div class="form-widget">

								<div class="form-result"></div>

								<div class="col-md-8 center">

									<div class="p-5 text-center border pricing-box rounded-5 pricing-simple bg-light text-md-start">
										<div class="mb-4 d-flex flex-column flex-lg-row justify-content-between">
											<div>
												<h3 class="mb-3">{{ $name }}</h3>
												<div class="p-0 m-0 mx-auto line border-width-4 border-dark w-25 mx-md-0"></div>
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
										<div class="text-center">
											<a href="#" class="mb-2 d-block text-dark">View all Features</a>
											<a href="{{ route('getform') }}" class="text-white btn btn-lg" style="background-color: #175C4A">Pay Online</a>
										</div>
									</div>

								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</section><!-- #content end -->
        <div >

             {{-- @include('payment_form') --}}
         </div>
         {{-- @livewireScripts()  --}}


