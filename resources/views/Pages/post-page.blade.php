@extends('Layout.default')

@section('page_content')
<!-- -->
 <div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Salary Status</header>
								</div>
								<div class="card-body ">
					            <div class = "mdl-tabs mdl-js-tabs">
					               <div class = "mdl-tabs__tab-bar tab-left-side">
					                  <a href = "#tab4-panel" class = "mdl-tabs__tab tabs_three is-active">Managers</a>
					                  <a href = "#tab5-panel" class = "mdl-tabs__tab tabs_three">Housekeeper</a>
					                  <a href = "#tab6-panel" class = "mdl-tabs__tab tabs_three">Other</a>
					               </div>
					               <div class = "mdl-tabs__panel is-active p-t-20" id = "tab4-panel">
					               <div class="table-responsive">
										<table class="table">
											<tbody>
												<tr>
													<th>Image</th>
													<th>Name</th>
													<th>Date</th>
													<th>Status</th>
													<th>Ammount</th>
													<th>Transaction ID</th>
												</tr>
												<tr>
													<td class="patient-img sorting_1">
														<img src="assets/img/user/user6.jpg" alt="">
													</td>
													<td>John Deo</td>
													<td>05-01-2017</td>
													<td><span class="label label-danger">Unpaid</span></td>
													<td>1200$</td>
													<td>#7234486</td>
												</tr>
												<tr>
													<td class="patient-img sorting_1">
														<img src="assets/img/user/user4.jpg" alt="">
													</td>
													<td>Eugine Turner</td>
													<td>04-01-2017</td>
													<td><span class="label label-success">Paid</span></td>
													<td>1400$</td>
													<td>#7234417</td>
												</tr>
												<tr>
													<td class="patient-img sorting_1">
														<img src="assets/img/user/user2.jpg" alt="">
													</td>
													<td>Jacqueline Howell</td>
													<td>03-01-2017</td>
													<td><span class="label label-warning">Pending</span></td>
													<td>1100$</td>
													<td>#7234454</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="text-center">
										<div class="full-width text-center p-t-10" >
											<a href="#" class="btn purple btn-outline btn-circle margin-0">Load More</a>
										</div>
									</div>
					               </div>
					               <div class = "mdl-tabs__panel p-t-20" id = "tab5-panel">
										<div class="table-responsive">
										<table class="table">
											<tbody>
												<tr>
													<th>Image</th>
													<th>Name</th>
													<th>Date</th>
													<th>Status</th>
													<th>Ammount</th>
													<th>Transaction ID</th>
												</tr>
												<tr>
													<td class="patient-img sorting_1">
														<img src="assets/img/user/user1.jpg" alt="">
													</td>
													<td>Eugine Turner</td>
													<td>04-01-2017</td>
													<td><span class="label label-success">Paid</span></td>
													<td>700$</td>
													<td>#7234417</td>
												</tr>
												<tr>
													<td class="patient-img sorting_1">
														<img src="assets/img/user/user4.jpg" alt="">
													</td>
													<td>Jacqueline Howell</td>
													<td>03-01-2017</td>
													<td><span class="label label-warning">Pending</span></td>
													<td>500$</td>
													<td>#7234454</td>
												</tr>
												<tr>
													<td class="patient-img sorting_1">
														<img src="assets/img/user/user5.jpg" alt="">
													</td>
													<td>Jayesh Parmar</td>
													<td>03-01-2017</td>
													<td><span class="label label-danger">Unpaid</span></td>
													<td>400$</td>
													<td>#72544</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="text-center">
										<div class="full-width text-center p-t-10" >
											<a href="#" class="btn purple btn-outline btn-circle margin-0">Load More</a>
										</div>
									</div>
					               </div>
					               <div class = "mdl-tabs__panel p-t-20" id = "tab6-panel">
					               		<div class="table-responsive">
										<table class="table">
											<tbody>
												<tr>
													<th>Image</th>
													<th>Name</th>
													<th>Date</th>
													<th>Status</th>
													<th>Ammount</th>
													<th>Transaction ID</th>
												</tr>
												<tr>
													<td class="patient-img sorting_1">
														<img src="assets/img/user/user8.jpg" alt="">
													</td>
													<td>Jane Elliott</td>
													<td>06-01-2017</td>
													<td><span class="label label-primary">Paid</span></td>
													<td>300$</td>
													<td>#7234421</td>
												</tr>
												<tr>
													<td class="patient-img sorting_1">
														<img src="assets/img/user/user7.jpg" alt="">
													</td>
													<td>Jacqueline Howell</td>
													<td>03-01-2017</td>
													<td><span class="label label-warning">Pending</span></td>
													<td>450$</td>
													<td>#723344</td>
												</tr>
												<tr>
													<td class="patient-img sorting_1">
														<img src="assets/img/user/user9.jpg" alt="">
													</td>
													<td>Jacqueline Howell</td>
													<td>03-01-2017</td>
													<td><span class="label label-primary">Paid</span></td>
													<td>550$</td>
													<td>#7235454</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="text-center">
										<div class="full-width text-center p-t-10" >
											<a href="#" class="btn purple btn-outline btn-circle margin-0">Load More</a>
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
            <!-- end page content -->
@endsection