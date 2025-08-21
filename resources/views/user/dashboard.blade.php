	<!--**********************************
            Content body start
        ***********************************-->
	<div class="content-body">
		<!-- row -->
		<div class="container-fluid">

			<div class="row">
				<div class="col-xl-12">
					<div class="row">
						<div class="col-xl-6">
							<div class="row">
								<div class="col-xl-12">
									<div class="card tryal-gradient">
										<div class="card-body tryal row">
											<div class="col-xl-7 col-sm-6">
												<h2>Manage your project in one touch</h2>
												<span>Let Fillow manage your project automatically with our best AI systems </span>
												<a href="javascript:void(0);" class="btn btn-rounded  fs-18 font-w500">Try Free Now</a>
											</div>
											<div class="col-xl-5 col-sm-6">
												<img src="{{asset('')}}users/images/chart.png" alt="" class="sd-shape">
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-12">
									<div class="row">


										<div class="col-xl-6 col-sm-6">
											<div class="card">
												<div class="card-body px-4 pb-0">
													<div>
														<h4 class="fs-18 font-w600 mb-4 text-nowrap">Salary Income</h4>
														<div class="d-flex align-items-center">
															<h2 class="fs-32 font-w700 mb-2">{{ currency() }} {{ number_format(Auth::user()->salaryBonus->sum('comm'), 2) }} </h2>

														</div>
													</div>
													<div class="progress default-progress">


														<div class="progress-bar bg-gradient1 progress-animated" style="width: 30%; height:10px;" role="progressbar">
															<span class="sr-only">45% Complete</span>
														</div>
													</div>
													<div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
														<span>76 left from target</span>
														<h4 class="mb-0">42</h4>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-sm-6">
											<div class="card">
												<div class="card-body px-4 pb-0">
													<div>
														<h4 class="fs-18 font-w600 mb-4 text-nowrap">Contract Profit Sharing</h4>
														<div class="d-flex align-items-center">
															<h2 class="fs-32 font-w700 mb-2">{{ currency() }} {{ number_format(Auth::user()->contractpBonus->sum('comm'), 2) }}</h2>

														</div>
													</div>
													<div class="progress default-progress">


														<div class="progress-bar bg-gradient1 progress-animated" style="width: 20%; height:10px;" role="progressbar">
															<span class="sr-only">45% Complete</span>
														</div>
													</div>
													<div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
														<span>76 left from target</span>
														<h4 class="mb-0">42</h4>
													</div>
												</div>
											</div>
										</div>

										<!-- <div class="col-xl-6 col-sm-6">
											<div class="card">
												<div class="card-body d-flex px-4  justify-content-between">
													<div>
														<div class="">
															<h2 class="fs-32 font-w700">892</h2>
															<span class="fs-18 font-w500 d-block">New Projects</span>
															<span class="d-block fs-16 font-w400"><small class="text-success">-2%</small> than last month</span>
														</div>
													</div>
													<div id="NewCustomers1"></div>
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-sm-6">
											<div class="card">
												<div class="card-body d-flex px-4  justify-content-between">
													<div>
														<div class="">
															<h2 class="fs-32 font-w700">562</h2>
															<span class="fs-18 font-w500 d-block">Total Clients</span>
															<span class="d-block fs-16 font-w400"><small class="text-danger">-2%</small> than last month</span>
														</div>
													</div>
													<div id="NewCustomers"></div>
												</div>
											</div>
										</div> -->
									</div>

								</div>
								<div class="col-md-12">
									<div class="card radius-15 card radius-10 ">
										<div class="card-body text-center">
											<div class="p-4 radius-15">
												<img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" width="150" height="150" class="rounded-circle shadow p-1  tryal-gradient" alt="">
												<h5 class="mb-0 mt-5 text-white fs-20 font-w700">{{ Auth::user()->name }}</h5>
												<p class="mb-3 text-white mx-text">{{ Auth::user()->username }}</p>
												<div class="list-inline contacts-social mt-3 mb-3">


													<p>DOJ : {{ Auth::user()->created_at->format('d-m-Y H:i:s') }}
														<!-- <br>DOA : 2024-07-06 15:53:43 -->
													</p>

												</div>
												<div class="d-grid"> <a href="#" class="btn btn-white radius-15">Rank : </a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- <div class="col-xl-12">
									<div class="card">
										<div class="card-header border-0 flex-wrap">
											<h4 class="fs-20 font-w700 mb-2">Project Statistics</h4>
											<div class="d-flex align-items-center project-tab mb-2">
												<div class="card-tabs mt-3 mt-sm-0 mb-3 ">
													<ul class="nav nav-tabs" role="tablist">
														<li class="nav-item">
															<a class="nav-link active" data-bs-toggle="tab" href="#monthly" role="tab">Monthly</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" data-bs-toggle="tab" href="#Weekly" role="tab">Weekly</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" data-bs-toggle="tab" href="#Today" role="tab">Today</a>
														</li>
													</ul>
												</div>
												<div class="dropdown ms-2">
													<div class="btn-link" data-bs-toggle="dropdown">
														<svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
															<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
															<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
														</svg>
													</div>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="javascript:void(0)">Delete</a>
														<a class="dropdown-item" href="javascript:void(0)">Edit</a>
													</div>
												</div>
											</div>
										</div>
										<div class="card-body">
											<div class="d-flex justify-content-between align-items-center flex-wrap">
												<div class="d-flex">
													<div class="d-inline-block position-relative donut-chart-sale mb-3">
														<span class="donut1" data-peity='{ "fill": ["rgba(136,108,192,1)", "rgba(241, 234, 255, 1)"],   "innerRadius": 20, "radius": 15}'>5/8</span>
													</div>
													<div class="ms-3">
														<h4 class="fs-24 font-w700 ">246</h4>
														<span class="fs-16 font-w400 d-block">Total Projects</span>
													</div>
												</div>
												<div class="d-flex">
													<div class="d-flex me-5">
														<div class="mt-2">
															<svg width="13" height="13" viewbox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
																<circle cx="6.5" cy="6.5" r="6.5" fill="#FFCF6D"></circle>
															</svg>
														</div>
														<div class="ms-3">
															<h4 class="fs-24 font-w700 ">246</h4>
															<span class="fs-16 font-w400 d-block">On Going</span>
														</div>
													</div>
													<div class="d-flex">
														<div class="mt-2">
															<svg width="13" height="13" viewbox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
																<circle cx="6.5" cy="6.5" r="6.5" fill="#FFA7D7"></circle>
															</svg>

														</div>
														<div class="ms-3">
															<h4 class="fs-24 font-w700 ">28</h4>
															<span class="fs-16 font-w400 d-block">Unfinished</span>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-content">
												<div class="tab-pane fade active show" id="monthly">
													<div id="chartBar" class="chartBar"></div>
												</div>
												<div class="tab-pane fade" id="Weekly">
													<div id="chartBar1" class="chartBar"></div>
												</div>
												<div class="tab-pane fade" id="Today">
													<div id="chartBar2" class="chartBar"></div>
												</div>
											</div>
											<div class="d-flex align-items-center">
												<label class="form-check-label font-w400 fs-16 mb-0" for="flexSwitchCheckChecked1">Number</label>
												<div class="form-check form-switch toggle-switch">
													<input class="form-check-input custome" type="checkbox" id="flexSwitchCheckChecked1" checked="">

												</div>
												<label class="form-check-label font-w400 fs-16 mb-0 ms-3" for="flexSwitchCheckChecked2">Analytics</label>
												<div class="form-check form-switch toggle-switch">
													<input class="form-check-input custome" type="checkbox" id="flexSwitchCheckChecked2" checked="">
												</div>
											</div>
										</div>
									</div>
								</div> -->
								<div class="col-xl-12 col-lg-12">
									<div class="card">
										<table class="table table-hover">
											<thead>
												<tr>
													<th>Income</th>
													<th class="text-right">Daily</th>
													<th class="text-right">Totals</th>
												</tr>
											</thead>
											<tbody>

												<tr>
													<td scope="row"><img src="https://ui-avatars.com/api/?name=DI" class="rounded-circle mr-2" width="30" alt=""> <a href="javascript:;">Farming Profit</a></td>
													<td class="text-right">₹0.00</td>
													<td class="text-right" id="col1">{{currency()}}{{ number_format(Auth::user()->level_bonus->sum('comm'), 2) }}</td>
												</tr>







												<tr>
													<td scope="row"><img src="https://ui-avatars.com/api/?name=SI" class="rounded-circle mr-2" width="30" alt=""> <a href="javascript:;">Direct Income</a></td>
													<td class="text-right">₹0.00</td>
													<td class="text-right" id="col2">{{ currency() }}
														{{ number_format(Auth::user()->refer_bonus->sum('comm'), 2) }}
													</td>
												</tr>







												<!-- <tr>
													<td scope="row"><img src="https://ui-avatars.com/api/?name=PI" class="rounded-circle mr-2" width="30" alt=""> <a href="javascript:;">Level Income</a></td>
													<td class="text-right">₹0.00</td>
													<td class="text-right">₹113660.9308</td>
												</tr> -->


												<tr>
													<td scope="row"><img src="https://ui-avatars.com/api/?name=RC" class="rounded-circle mr-2" width="30" alt=""> <a href="javascript:;">Rank Income</a></td>
													<td class="text-right">₹0.00</td>
													<td class="text-right" id="col3">{{ currency() }} {{ number_format(Auth::user()->samerankBonus->sum('comm'), 2) }} </td>
												</tr>

												<tr>
													<td scope="row"><img src="https://ui-avatars.com/api/?name=RD" class="rounded-circle mr-2" width="30" alt=""> <a href="javascript:;">Contract Profit</a></td>
													<td class="text-right">₹0.00</td>
													<td class="text-right" id="col4">{{ currency() }} {{ number_format(Auth::user()->contractpBonus->sum('comm'), 2) }}</td>
												</tr>


												<tr>
													<td scope="row"><img src="https://ui-avatars.com/api/?name=RI" class="rounded-circle mr-2" width="30" alt=""> <a href="javascript:;">Reward Income</a></td>
													<td class="text-right">₹0.00</td>
													<td class="text-right" id="col5">{{ currency() }} {{ number_format(Auth::user()->dailyIncentive->sum('comm'), 2) }}</td>
												</tr>

												<tr>
													<td scope="row"><img src="https://ui-avatars.com/api/?name=SI" class="rounded-circle mr-2" width="30" alt=""> <a href="javascript:;">Salary Income</a></td>
													<td class="text-right">₹0.00</td>
													<td class="text-right" id="col6">{{ currency() }} {{ number_format(Auth::user()->salaryBonus->sum('comm'), 2) }}</td>
												</tr>

												<tr>
													<td scope="row"><img src="https://ui-avatars.com/api/?name=TOTAL" class="rounded-circle mr-2" width="30" alt=""> <a href="javascript:;" style="font-weight:bold;font-size:19px;">Total</a></td>
													<td class="text-right" style="color:#1e9f07;font-weight:bold;font-size:21px;">₹0</td>
													<td class="text-right"  style="font-weight:bold;font-size:19px;">{{currency() }}{{ number_format(Auth::user()->getTotalBonus(), 2) }}</td>
												</tr>

											</tbody>
										</table>
									</div>
								</div>



								<!-- <div class="col-xl-12">
									<div class="card">
										<div class="card-header border-0 pb-0">
											<h4 class="fs-20 font-w700 mb-0">Completion Project Rate</h4>
											<div class="dropdown ">
												<div class="btn-link" data-bs-toggle="dropdown">
													<svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
														<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
														<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="javascript:void(0)">Delete</a>
													<a class="dropdown-item" href="javascript:void(0)">Edit</a>
												</div>
											</div>
										</div>
										<div class="card-body pb-0">
											<div id="revenueMap" class="revenueMap"></div>
										</div>
									</div>
								</div>
								<div class="col-xl-12">
									<div class="card">
										<div class="card-header border-0">
											<div>
												<h4 class="fs-20 font-w700">Recent Emails</h4>
												<span class="fs-14 font-w400">Lorem ipsum dolor sit amet</span>
											</div>
											<div>
												<a href="javascript:void(0);" class="btn btn-outline-primary btn-rounded fs-18">View More</a>
											</div>
										</div>
										<div class="card-body px-0">
											<div class="d-flex justify-content-between recent-emails">
												<div class="d-flex">
													<div class="profile-k">
														<span class="bg-success">K</span>
													</div>
													<div class="ms-3">
														<h4 class="fs-18 font-w500">How to improve project management flows</h4>
														<span class="font-w400 d-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br> eiusmod tempor incididunt ut labore et dolore magna aliqua...</span>
													</div>
												</div>
												<div class="email-check">
													<label class="like-btn mb-0">
														<input type="checkbox">
														<span class="checkmark"></span>
													</label>
												</div>
											</div>
											<div class="d-flex justify-content-between recent-emails">
												<div class="d-flex">
													<div class="profile-k">
														<img src="images/profile/small/pic6.jpg" alt="">
													</div>
													<div class="ms-3">
														<h4 class="fs-18 font-w500">Fillow Final UseCase Diagram</h4>
														<span class="font-w400 d-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br> eiusmod tempor incididunt ut labore et dolore magna aliqua...</span>
														<div class="final-badge">
															<span class="badge text-black border"><i class="far fa-file-alt me-3"></i>Master_file.fig</span>
															<span class="badge text-black border"><i class="fas fa-image me-2"></i>CoverPreview.jpg</span>
															<span class="badge border bgl-primary font-w700">4 files more</span>
														</div>
													</div>
												</div>
												<div class="email-check">
													<label class="like-btn mb-0">
														<input type="checkbox">
														<span class="checkmark"></span>
													</label>
												</div>
											</div>
											<div class="d-flex justify-content-between recent-emails">
												<div class="d-flex">
													<div class="profile-k">
														<span class="bg-warning">G</span>
													</div>
													<div class="ms-3">
														<h4 class="fs-18 font-w500">Weekly Design Inspirations by Envato</h4>
														<span class="font-w400 d-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br> eiusmod tempor incididunt ut labore et dolore magna aliqua...</span>
													</div>
												</div>
												<div class="email-check">
													<label class="like-btn mb-0">
														<input type="checkbox">
														<span class="checkmark"></span>
													</label>
												</div>
											</div>
											<div class="d-flex justify-content-between recent-emails">
												<div class="d-flex">
													<div class="profile-k">
														<img src="images/profile/small/pic8.jpg" alt="">
													</div>
													<div class="ms-3">
														<h4 class="fs-18 font-w500">How to improve project management flows</h4>
														<span class="font-w400 d-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br> eiusmod tempor incididunt ut labore et dolore magna aliqua...</span>
													</div>
												</div>
												<div class="email-check">
													<label class="like-btn mb-0">
														<input type="checkbox">
														<span class="checkmark"></span>
													</label>
												</div>
											</div>
										</div>
									</div>
								</div> -->
							</div>

						</div>
						<div class="col-xl-6">
							<div class="row">
								<div class="col-xl-12">
									<div class="row">


										<div class="col-xl-6 col-sm-6">
											<div class="card">
												<div class="card-body px-4 pb-0">
													<div>
														<h4 class="fs-18 font-w600 mb-4 text-nowrap">Available Balance</h4>
														<div class="d-flex align-items-center">
															<h2 class="fs-32 font-w700 mb-2">{{ currency() }}{{ number_format(Auth::user()->available_balance(), 2) }}</h2>

														</div>
													</div>
													<div class="progress default-progress">


														<div class="progress-bar bg-gradient1 progress-animated" style="width: 40%; height:10px;" role="progressbar">
															<span class="sr-only">45% Complete</span>
														</div>
													</div>
													<div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
														<span>76 left from target</span>
														<h4 class="mb-0">42</h4>
													</div>
												</div>
											</div>
										</div>


										<div class="col-xl-6 col-sm-6">
											<div class="card">
												<div class="card-body px-4 pb-0">
													<div>
														<h4 class="fs-18 font-w600 mb-4 text-nowrap">Total Deposit</h4>
														<div class="d-flex align-items-center">
															<h2 class="fs-32 font-w700 mb-2">{{ currency() }} {{ Auth::user()->investments->sum('amount') }} </h2>

														</div>
													</div>
													<div class="progress default-progress">


														<div class="progress-bar bg-gradient1 progress-animated" style="width: 40%; height:10px;" role="progressbar">
															<span class="sr-only">45% Complete</span>
														</div>
													</div>
													<div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
														<span>76 left from target</span>
														<h4 class="mb-0">42</h4>
													</div>
												</div>
											</div>
										</div>


										<div class="col-xl-6 col-sm-6">
											<div class="card">
												<div class="card-body px-4 pb-0">
													<div>
														<h4 class="fs-18 font-w600 mb-4 text-nowrap">Top Up Balance</h4>
														<div class="d-flex align-items-center">
															<h2 class="fs-32 font-w700 mb-2">{{ currency() }} {{ number_format(Auth::user()->FundBalance(), 2) }}</h2>

														</div>
													</div>
													<div class="progress default-progress">


														<div class="progress-bar bg-gradient1 progress-animated" style="width: 40%; height:10px;" role="progressbar">
															<span class="sr-only">45% Complete</span>
														</div>
													</div>
													<div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
														<span>76 left from target</span>
														<h4 class="mb-0">42</h4>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-sm-6">
											<div class="card">
												<div class="card-body px-4 pb-0">
													<div>
														<h4 class="fs-18 font-w600 mb-4 text-nowrap">Refferal Income</h4>
														<div class="d-flex align-items-center">
															<h2 class="fs-32 font-w700 mb-2">{{ currency() }}
																{{ number_format(Auth::user()->refer_bonus->sum('comm'), 2) }}
															</h2>

														</div>
													</div>
													<div class="progress default-progress">


														<div class="progress-bar bg-gradient1 progress-animated" style="width: 60%; height:10px;" role="progressbar">
															<span class="sr-only">45% Complete</span>
														</div>
													</div>
													<div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
														<span>76 left from target</span>
														<h4 class="mb-0">42</h4>
													</div>
												</div>
											</div>
										</div>




									</div>

								</div>
								<div class="col-xl-12">
									<div class="row">


										<div class="col-xl-6 col-sm-6">
											<div class="card">
												<div class="card-body px-4 pb-0">
													<div>
														<h4 class="fs-18 font-w600 mb-4 text-nowrap">Farming Income</h4>
														<div class="d-flex align-items-center">
															<h2 class="fs-32 font-w700 mb-2">{{ currency() }} {{ number_format(Auth::user()->level_bonus->sum('comm'), 2) }}</h2>

														</div>
													</div>
													<div class="progress default-progress">


														<div class="progress-bar bg-gradient1 progress-animated" style="width: 60%; height:10px;" role="progressbar">
															<span class="sr-only">45% Complete</span>
														</div>
													</div>
													<div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
														<span>76 left from target</span>
														<h4 class="mb-0">42</h4>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-sm-6">
											<div class="card">
												<div class="card-body px-4 pb-0">
													<div>
														<h4 class="fs-18 font-w600 mb-4 text-nowrap">Reccuring Income</h4>
														<div class="d-flex align-items-center">
															<h2 class="fs-32 font-w700 mb-2">{{ currency() }} {{ number_format(Auth::user()->dailyIncentive->sum('comm'), 2) }} </h2>

														</div>
													</div>
													<div class="progress default-progress">


														<div class="progress-bar bg-gradient1 progress-animated" style="width: 60%; height:10px;" role="progressbar">
															<span class="sr-only">45% Complete</span>
														</div>
													</div>
													<div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
														<span>76 left from target</span>
														<h4 class="mb-0">42</h4>
													</div>
												</div>
											</div>
										</div>



										<!-- <div class="col-xl-6 col-sm-6">
											<div class="card">
												<div class="card-body d-flex px-4  justify-content-between">
													<div>
														<div class="">
															<h2 class="fs-32 font-w700">892</h2>
															<span class="fs-18 font-w500 d-block">New Projects</span>
															<span class="d-block fs-16 font-w400"><small class="text-success">-2%</small> than last month</span>
														</div>
													</div>
													<div id="NewCustomers" style="min-height: 50px;">
														<div id="apexcharts81txw3pt" class="apexcharts-canvas apexcharts81txw3pt apexcharts-theme-light" style="width: 100px; height: 50px;"><svg id="SvgjsSvg2532" width="100" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
																<g id="SvgjsG2534" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
																	<defs id="SvgjsDefs2533">
																		<clipPath id="gridRectMask81txw3pt">
																			<rect id="SvgjsRect2537" width="110" height="56" x="-5" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
																		</clipPath>
																		<clipPath id="gridRectMarkerMask81txw3pt">
																			<rect id="SvgjsRect2538" width="104" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
																		</clipPath>
																	</defs>
																	<g id="SvgjsG2544" class="apexcharts-xaxis" transform="translate(0, 0)">
																		<g id="SvgjsG2545" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
																	</g>
																	<g id="SvgjsG2553" class="apexcharts-grid">
																		<g id="SvgjsG2554" class="apexcharts-gridlines-horizontal" style="display: none;">
																			<line id="SvgjsLine2556" x1="0" y1="0" x2="100" y2="0" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line>
																			<line id="SvgjsLine2557" x1="0" y1="10" x2="100" y2="10" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line>
																			<line id="SvgjsLine2558" x1="0" y1="20" x2="100" y2="20" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line>
																			<line id="SvgjsLine2559" x1="0" y1="30" x2="100" y2="30" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line>
																			<line id="SvgjsLine2560" x1="0" y1="40" x2="100" y2="40" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line>
																			<line id="SvgjsLine2561" x1="0" y1="50" x2="100" y2="50" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line>
																		</g>
																		<g id="SvgjsG2555" class="apexcharts-gridlines-vertical" style="display: none;"></g>
																		<line id="SvgjsLine2563" x1="0" y1="50" x2="100" y2="50" stroke="transparent" stroke-dasharray="0"></line>
																		<line id="SvgjsLine2562" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0"></line>
																	</g>
																	<g id="SvgjsG2539" class="apexcharts-line-series apexcharts-plot-series">
																		<g id="SvgjsG2540" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0">
																			<path id="SvgjsPath2543" d="M 0 47.5C 7 47.5 13 22.5 20 22.5C 27 22.5 33 47.5 40 47.5C 47 47.5 53 10 60 10C 67 10 73 35 80 35C 87 35 93 10 100 10" fill="none" fill-opacity="1" stroke="var(--primary)" stroke-opacity="1" stroke-linecap="butt" stroke-width="6" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask81txw3pt)" pathTo="M 0 47.5C 7 47.5 13 22.5 20 22.5C 27 22.5 33 47.5 40 47.5C 47 47.5 53 10 60 10C 67 10 73 35 80 35C 87 35 93 10 100 10" pathFrom="M -1 60L -1 60L 20 60L 40 60L 60 60L 80 60L 100 60"></path>
																			<g id="SvgjsG2541" class="apexcharts-series-markers-wrap" data:realIndex="0"></g>
																		</g>
																		<g id="SvgjsG2542" class="apexcharts-datalabels" data:realIndex="0"></g>
																	</g>
																	<line id="SvgjsLine2564" x1="0" y1="0" x2="100" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
																	<line id="SvgjsLine2565" x1="0" y1="0" x2="100" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
																	<g id="SvgjsG2566" class="apexcharts-yaxis-annotations"></g>
																	<g id="SvgjsG2567" class="apexcharts-xaxis-annotations"></g>
																	<g id="SvgjsG2568" class="apexcharts-point-annotations"></g>
																</g>
																<g id="SvgjsG2552" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
																<g id="SvgjsG2535" class="apexcharts-annotations"></g>
															</svg>
															<div class="apexcharts-legend" style="max-height: 25px;"></div>
														</div>
													</div>
												</div>
											</div>
										</div> -->
										<!-- <div class="col-xl-6 col-sm-6">
											<div class="card">
												<div class="card-body d-flex px-4  justify-content-between">
													<div>
														<div class="">
															<h2 class="fs-32 font-w700">562</h2>
															<span class="fs-18 font-w500 d-block">Total Clients</span>
															<span class="d-block fs-16 font-w400"><small class="text-danger">-2%</small> than last month</span>
														</div>
													</div>
													<div id="NewCustomers"></div>
												</div>
											</div>
										</div> -->
									</div>

								</div>
								<div class="col-xl-12">
									<div class="row">


										<div class="col-xl-6 col-sm-6">
											<div class="card">
												<div class="card-body px-4 pb-0">
													<div>
														<h4 class="fs-18 font-w600 mb-4 text-nowrap">Direct Team</h4>
														<div class="d-flex align-items-center">
															<h2 class="fs-32 font-w700 mb-2">{{ $user_direct }}</h2>

														</div>
													</div>
													<div class="progress default-progress">


														<div class="progress-bar bg-gradient1 progress-animated" style="width: 60%; height:10px;" role="progressbar">
															<span class="sr-only">45% Complete</span>
														</div>
													</div>
													<div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
														<span>76 left from target</span>
														<h4 class="mb-0">42</h4>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-sm-6">
											<div class="card">
												<div class="card-body px-4 pb-0">
													<div>
														<h4 class="fs-18 font-w600 mb-4 text-nowrap">Level Team</h4>
														<div class="d-flex align-items-center">
															<h2 class="fs-32 font-w700 mb-2">{{$totalTeam}} </h2>

														</div>
													</div>
													<div class="progress default-progress">


														<div class="progress-bar bg-gradient1 progress-animated" style="width: 60%; height:10px;" role="progressbar">
															<span class="sr-only">45% Complete</span>
														</div>
													</div>
													<div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
														<span>76 left from target</span>
														<h4 class="mb-0">42</h4>
													</div>
												</div>
											</div>
										</div>

									</div>

								</div>

								<div class=" col-xl-12 col-lg-12">
									<div class="card radius-10 tryal-gradien">
										<div class="card-body">
											<label class="form--label">Referral Link</label>
											<div class="input-group style-left" id="myLink">
												<input type="text" name="text"
													class="form-control form--control md-style referralURL"
													value="{{ url('/register') }}?ref={{ auth()->user()->username }}"
													readonly>
												<button class="input-group-text copytext copyBoard" onclick="copyLink()"> <i
														class="fa fa-copy"></i> </button>
											</div>
										</div>
									</div>
								</div>
								<!-- <div class="col-xl-12 col-lg-12">
									<div class="card">
										<div class="card-header border-0">
											<div>
												<h4 class="fs-20 font-w700">Messages</h4>
												<span>Lorem ipsum dolor sit amet</span>
											</div>
											<div>
												<a href="javascript:void(0);" class="btn btn-primary btn-rounded">+New Messages</a>
											</div>
										</div>
										<div class="card-body px-0">
											<div class="msg-bx d-flex justify-content-between align-items-center">
												<div class="msg d-flex align-items-center w-100">
													<div class="image-box">
														<img src="{{asset('')}}users/images/profile/small/pic6.jpg" alt="">
													</div>
													<div class="ms-3 w-100 ">
														<h4 class="fs-18 font-w600">Maren Rosser</h4>
														<div class="d-flex justify-content-between">
															<span class="me-auto">Hei, dont forget to clear server cache!</span>
															<span class="me-4 fs-12">25min ago</span>
														</div>
													</div>

												</div>
												<div class="dropdown">
													<div class="btn-link" data-bs-toggle="dropdown">
														<svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
															<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
															<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
														</svg>
													</div>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="javascript:void(0)">Delete</a>
														<a class="dropdown-item" href="javascript:void(0)">Edit</a>
													</div>
												</div>
											</div>
											<div class="msg-bx d-flex justify-content-between align-items-center">
												<div class="msg d-flex align-items-center w-100">
													<div class="image-box">
														<img src="{{asset('')}}users/images/profile/small/pic7.jpg" alt="">
													</div>
													<div class="ms-3 w-100">
														<h4 class="fs-18 font-w600">Kaiya Bergson</h4>
														<div class="d-flex justify-content-between">
															<span class="me-auto">I remember that project due is tomorrow.</span>
															<span class="me-4 fs-12">Yesterday, 8:24 AM</span>
														</div>
													</div>
												</div>
												<div class="dropdown">
													<div class="btn-link" data-bs-toggle="dropdown">
														<svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
															<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
															<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
														</svg>
													</div>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="javascript:void(0)">Delete</a>
														<a class="dropdown-item" href="javascript:void(0)">Edit</a>
													</div>
												</div>
											</div>
											<div class="msg-bx d-flex justify-content-between align-items-center">
												<div class="msg d-flex align-items-center w-100">
													<div class="image-box ">
														<img src="{{asset('')}}users/images/profile/small/pic4.jpg" alt="">
													</div>
													<div class="ms-3 w-100">
														<h4 class="fs-18 font-w600">Ruben Press</h4>
														<div class="d-flex justify-content-between">
															<span class="me-auto">Ok sir. I will fix it as soon as possible</span>
															<span class="me-4 fs-12">December 12th, 2020 10:24 AM</span>
														</div>
													</div>
												</div>
												<div class="dropdown">
													<div class="btn-link" data-bs-toggle="dropdown">
														<svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
															<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
															<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
														</svg>
													</div>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="javascript:void(0)">Delete</a>
														<a class="dropdown-item" href="javascript:void(0)">Edit</a>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div> -->

								<div class=" col-xl-12 col-lg-12">
									<div class="card radius-10 tryal-gradien">
										<div class="card-body">
											<div class="d-flex align-items-center">
												<div>
													<h6 class="mb-0">Latest News</h6>
												</div>
												<div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
												</div>
											</div>
											<div class="">
												<div class="card mb-4">

													<div class="card-body">

														<marquee direction="up" onmouseout="this.start();" onmouseover="this.stop();" style="height:281px;">
															<center>


																<h5>WITHDRAWAL AND KYC</h5>
																<p>Dear All,

																	As previously notified, completing your Know Your Customer (KYC) process is now mandatory for all withdrawals. If you haven’t already completed your KYC, please do so as soon as possible.

																	We have successfully processed all withdrawal requests, including auto-withdrawals. However, accounts with pending or non-approved KYC status have not received their withdrawals.

																	Thank you for your cooperation.
																	Team
																	Generation of farming</p>



																<h5>GENERATION OF FARMING SUPPORT NO. 83600-91530</h5>
																<p>97797-17726</p>



																<h5>INFORMATION ABOUT WITHDRAWAL</h5>
																<p>DUE TO COMPANY ANNOUNCEMENT GOF MINIMUM WITHDRAWAL PAYOUT AMOUNT IS RS.💷1000💷</p>



																<h5>IMPORTANT ANNOUNCEMENT</h5>
																<p>ID capping will be applied from 16 august so kindly topup your ids with proper fund</p>


															</center>
														</marquee>
													</div>
												</div>

											</div>
										</div>
									</div>
								</div>


							</div>
						</div>
					</div>
				</div>
			</div>



			<!-- 
			<div class="row">
				<div class="col-xl-12">
					<div class="row">
						<div class="col-xl-6">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-6 col-sm-6">
											<div class=" ">
												<div class="items">
													<h4 class="fs-20 font-w700 mb-4">Boost Status</h4>
												</div>

											</div>
										</div>
										<div class="card-body">
											<div id="redial"></div>
											<span class="text-center d-block fs-18 font-w600">Current ROI </span>
										</div>
										<div class="msg-bx d-flex justify-content-between align-items-center">
											<div class="msg d-flex align-items-center w-100">

												<div class="ms-3 w-100">
													<h4 class="fs-18 font-w600">Total Sponsor</h4>
													<div class="d-flex justify-content-between">
														<span class="me-auto">0</span>
														<span class="me-4 fs-12">Equal & Above of First Pack</span>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					
					</div>
				</div>
			</div> -->
		</div>
	</div>
	<!--**********************************
            Content body end
        ***********************************-->




	<!-- लिंक जिसे कॉपी करना है -->
	<!-- <a id="myLink" href="https://example.com">https://example.com</a> -->

	<!-- कॉपी के लिए बटन -->
	<!-- <button onclick="copyLink()">Copy Link</button> -->

	<script>
		function copyLink() {
			const inputElement = document.querySelector('input[name="text"]');
			inputElement.select();
			document.execCommand('copy');
			console.log('Link copied to clipboard!');
		}
	</script>

	<script>
		function calculateTotal() {
			let total = 0;
			let i = 1;

			while (true) {
				const el = document.getElementById('col' + i);
				if (!el) break;

				const val = parseFloat(el.innerText) || 0;
				console.log
				total += val;
				i++;
			}

			document.getElementById('total').innerText = `Total ${total}`;
		}

		window.addEventListener('DOMContentLoaded', calculateTotal);
	</script>