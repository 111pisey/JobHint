<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page1</title>
    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
    <style>
		
        .fb_iframe_widget iframe {
                height:unset;
                position: absolute !important;
            }
            iframe.fb_customer_chat_bounce_in_v2 {
                position: fixed !important;
            }
            
            .card-title{
                font-size: 150%;
            }
            body{
                font-size: 80%;
            }
    
        </style>
</head>
<body>

	
    
    <section>
		<div class="page-header d-flex justify-content-around bg-light">
		<h4 class="page-title"><b>Position List</b></h4>
			<ol class="breadcrumb bg-light">
				<li class="breadcrumb-item"><a href="">Home</a></li>
                                                                                        <li class="breadcrumb-item"><a href="">Position</a></li>
                                                                                                <li class="breadcrumb-item active" aria-current="page">List</li>
                                      
																																															</ol>
		</div>
		<hr>
		</section>
		
  
		<section class="sptb">
	<div class="container ">
		<div class="row row-no-gutters">
			<div class="col-xl-3 col-lg-4 col-md-12 ">
				<form method="GET" action="" accept-charset="UTF-8" class="frm-search-side-bar">
					<div class="card">
						<div class="card-body m-p-2">
							<h5 class="font-weight-bold text-primary">Filter &amp; Refine</h5>
						</div>
						<div class="card-body m-p-2">
							<div class="input-group">
								<input class="form-control br-tl-3 br-bl-3" placeholder="Search" name="search" type="text" value="">
								<button type="button" id="btn_filter" aria-controls="wrap_filter_data" aria-expanded="false" data-toggle="collapse" data-target="#wrap_filter_data" class="border col-3 btn btn-default p-0 mw-15 mr-0" style="border-left: 0 !important; margin: 0 auto;">
									<i class="fa fa-filter mr-1"></i>Filter
								</button>
								<div class="input-group-append ">
									<button type="submit" class="btn btn-primary br-tr-3 br-br-3">
										Apply
									</button>
								</div>
							</div>
						</div>
					</div>
<hr>
					<div class="card collapse-show" id="wrap_filter_data">
						<input class="hidden_sort" name="sort_by" type="hidden" value="">
						
						
						<div class="card-header">
		<h3 class="card-title">Locations</h3>
	</div>
	<div class="card-body">
		<div class="show_more_collapse" id="show_more_collapse" style="height: auto; overflow: hidden;">
			<div class="filter-product-checkboxs" id="filter-product-checkboxs">
																																																																																																																																																																																																																																																																																																																																																																																													<label class="custom-control custom-checkbox mb-3">

							<input class="custom-control-input location-1" onclick="filterJob(this)" data-id="1" name="location[]" type="checkbox" value="1">
							<span class="custom-control-label">
																<a class="text-dark" style="font-size: 14px" onclick="filterJob(this)" data-id="1">Phnom Penh<span class="label label-secondary float-right">155</span></a>
							</span>
						</label>
																																				<label class="custom-control custom-checkbox mb-3">

							<input class="custom-control-input location-23" onclick="filterJob(this)" data-id="23" name="location[]" type="checkbox" value="23">
							<span class="custom-control-label">
																<a class="text-dark" style="font-size: 14px" onclick="filterJob(this)" data-id="23">Preah Sihanouk<span class="label label-secondary float-right">9</span></a>
							</span>
						</label>
																																																																																																																																																																																																																																													</div>
		</div>
	</div>
						<div class="card-header">
		<h3 class="card-title">Job Type</h3>
	</div>
	<div class="card-body">
		<div class="show_more_collapse1">
			<div class="filter-product-checkboxs">
																									<label class="custom-control custom-checkbox mb-3">

						<input class="custom-control-input jobshift-1" onclick="filterJob(this)" data-id="1" name="jobshift[]" type="checkbox" value="1">
						<span class="custom-control-label">
																						<a class="text-dark" style="font-size: 14px" onclick="filterJob(this)" data-id="1">Freelancer<span class="label label-secondary float-right"></span></a>
													</span>
					</label>
																									<label class="custom-control custom-checkbox mb-3">

						<input class="custom-control-input jobshift-4" onclick="filterJob(this)" data-id="4" name="jobshift[]" type="checkbox" value="4">
						<span class="custom-control-label">
																						<a class="text-dark" style="font-size: 14px" onclick="filterJob(this)" data-id="4">Full Time<span class="label label-secondary float-right"></span></a>
													</span>
					</label>
																									<label class="custom-control custom-checkbox mb-3">

						<input class="custom-control-input jobshift-2" onclick="filterJob(this)" data-id="2" name="jobshift[]" type="checkbox" value="2">
						<span class="custom-control-label">
																						<a class="text-dark" style="font-size: 14px" onclick="filterJob(this)" data-id="2">Internship</a>
													</span>
					</label>
																									<label class="custom-control custom-checkbox mb-3">

						<input class="custom-control-input jobshift-6" onclick="filterJob(this)" data-id="6" name="jobshift[]" type="checkbox" value="6">
						<span class="custom-control-label">
																						<a class="text-dark" style="font-size: 14px" onclick="filterJob(this)" data-id="6">Other</a>
													</span>
					</label>
																									<label class="custom-control custom-checkbox mb-3">

						<input class="custom-control-input jobshift-3" onclick="filterJob(this)" data-id="3" name="jobshift[]" type="checkbox" value="3">
						<span class="custom-control-label">
																						<a class="text-dark" style="font-size: 14px" onclick="filterJob(this)" data-id="3">Part Time<span class="label label-secondary float-right"></span></a>
													</span>
					</label>
																									<label class="custom-control custom-checkbox mb-3">

						<input class="custom-control-input jobshift-5" onclick="filterJob(this)" data-id="5" name="jobshift[]" type="checkbox" value="5">
						<span class="custom-control-label">
																						<a class="text-dark" style="font-size: 14px" onclick="filterJob(this)" data-id="5">Volunteer</a>
													</span>
					</label>
							</div>
		</div>
	</div>
	
	<div class="card-header">
	<h3 class="card-title">Salary Range</h3>
</div>
<div class="card-body">
	<div class="show_more_collapse1">
		<div class="filter-product-checkboxs">
			<div class="row">
				<div class="col-md-6">
					<label>From</label>
					<input class="form-control" onkeypress="return isNumberKey(event)" name="from" type="number" value="">
				</div>
				<div class="col-md-6">
					<label>To</label>
					<input class="form-control" onkeypress="return isNumberKey(event)" name="to" type="number" value="">
				</div>
			</div>
		</div>
	</div>
</div>						<div class="card-footer">
							<button type="submit" class="btn btn-primary btn-block apply_filter">Apply</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-xl-9 col-lg-8 col-md-12 wrap-side-bar">
				<div class=" mb-lg-0">
					<div class="">
						<div class="item2-gl">
							<div class=" mb-0">
								<div class="product-tags bg-white clearfix p-15 m-p-2">
					
	</div>

	<div class="count_header">
									<div class="p-5 bg-white item2-gl-nav d-flex m-p-2">
	<h6 class="mb-0 mt-3 m-text-left">Showing <b>1 to 12</b> of 164 Positions</h6>
	<ul class="nav item2-gl-menu mt-1 ml-auto">
		<li class="">
			<a href="#tab-list" class="active show" data-toggle="tab" title="List style"><i class="fa fa-list"></i></a>
		</li>
		<li>
			<a href="#tab-grid" data-toggle="tab" class="" title="Grid"><i class="fa fa-th"></i></a>
		</li>
	</ul>
	<div class="d-flex sort-by">
		<label class="mr-4 mt-1 mb-sm-5 m-text-left">Sort By:</label>
		<select class="form-control select2-no-search w-70" onchange="jobSort(this)" name="sort_by"><option value="0">Default</option><option value="latest">Latest Job</option><option value="close_date">Close Date</option></select>
	</div>
</div>								</div>

							<div class="tab-content">
								<div class="tab-pane active" id="tab-list">
									<div class="card overflow-hidden br-0 overflow-hidden shadow-lg p-3 mb-5 bg-white rounded">

						<div class="d-md-flex" id="wrap_job_post">
				<div class="p-0 m-0 item-card9-img">
					<div class="item-card9-imgs p-3 position-page">
						<a href="javasctipt:void(0)"></a>
																									<img style="width:90%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtOIV_SWwOC7zVayHXcQjJYB6MiwBsbZQ1q7o3R8Jmia9kGAl5w8orVuaS_opvS3lfUzQ&usqp=CAU" alt="Solution Fiber Technician" class="h-auto p-0 image-size-company rounded-circle1 border-0">
					</div>
				</div>

				
				<div class="card overflow-hidden border-0 box-shadow-0 border-left br-0 mb-0" style="border-left: 0 !important;">
					<div class="card-body pt-0 pt-md-3 pl-lg-0">
						<div class="item-card9 fz-11 cursor-click" data-url="" onclick="jobClick(this)">
							<a href="javasctipt:void(0)" class="text-dark">
								<h4 class="font-weight-semibold mt-1">Solution Fiber Technician</h4>
							</a>
							
								<div class="mt-2 mb-2 rsp-detail-hearticon1">
																			<a href="javascript:void(0);" class="mt-0 mr-4 cursor-default">
											<span>
												<i class="fa fa-folder text-muted mr-1"></i>
												Engineering 
											</span>
										</a>
																																					<a href="javascript:void(0);" class="mr-4 cursor-default">
											<span>
												<i class="fa fa-map-marker text-muted mr-1"></i>
													Phnom Penh 
											</span>
										</a>
																			
									<a href="javascript:void(0);" class="mr-4 cursor-default">
										<span>
											<i class="fa fa-calendar-check-o text-muted mr-1"></i>
											2 week ago
										</span>
									</a>
									<a href="javascript:void(0);" class="cursor-default">
										<div class="rating-stars d-inline-flex">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center sm  lg-icon-35 hearticon-l cursor-default  ">
				<i class="fa fa-heart fa-heart-6052   "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

					<span class="line-h-text count_favourite sm_count_favourite_6052 text-primary "> 0 Favourite(s)</span>
		
	</div>
									</a>
								</div>
							
							<p class="mb-0 leading-tight leading-tight-min-h">
								1. Verify on ticket open, pending, Follow up ticket, critical urgently case onsite.2. Conducts site surveys for Condominium, Apartment and SME customers.3. Prepare BoM after survey and submit to team...
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="card-footer pt-0 pb-0 pl-0 m-pr-3">
				<div class="item-card9-footer d-flex">
					<div class="col-9 d-flex mt-0 align-items-center pt-3 mb-md-0 mt-auto posted">
						<div class="fz-11 h-info-b">
															<a href="" class="text-muted fs-11 mb-1 col-4 m-text-limit-cha">
									<i class="fa fa-building-o text-muted mr-1"></i>
									Cogetel Ltd
								</a>
														<a href="javascript:void(0);" class="text-muted fs-12 mb-1 col-4 cursor-default">
								<small class="fz-11 d-block text-muted ml-3"> 
									<i class="fa fa-calendar-times-o text-muted mr-1"></i> Closing Date: 
									21-08-2022
								</small>
							</a>
						</div>
					</div>
					<div class="col-3 text-right ml-auto pr-0">
						<div class="rating-stars d-inline-flex" onclick="addDeleteFavorite(this)" data-url="" data-id="6052" data-type="position" data-method="post" data-method6052="post">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center lg  ">
				<i class="fa fa-heart fa-heart-6052  "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

		
	</div>
					</div>
				</div>
			</div>
		</div>
			<div class="card overflow-hidden br-0 overflow-hidden shadow-lg p-3 mb-5 bg-white rounded">
							
						<div class="d-md-flex" id="wrap_job_post">
				<div class="p-0 m-0 item-card9-img">
					<div class="item-card9-imgs p-3 position-page">
						<a href="javasctipt:void(0)"></a>
																									<img style="width:60%;" src="https://timesamui.com/upload/places/85/29/the-pizza-company-1112.jpg?1580311443" alt="Senior Java" class="h-auto p-0 image-size-company rounded-circle1 border-0">
					</div>
				</div>
				<div class="card overflow-hidden border-0 box-shadow-0 border-left br-0 mb-0" style="border-left: 0 !important;">
					<div class="card-body pt-0 pt-md-3 pl-lg-0">
						<div class="item-card9 fz-11 cursor-click">
							<a href="javasctipt:void(0)" class="text-dark">
								<h4 class="font-weight-semibold mt-1">Senior Java</h4>
							</a>
							
								<div class="mt-2 mb-2 rsp-detail-hearticon1">
																			<a href="javascript:void(0);" class="mt-0 mr-4 cursor-default">
											<span>
												<i class="fa fa-folder text-muted mr-1"></i>
												Computer Programming 
											</span>
										</a>
																																					<a href="javascript:void(0);" class="mr-4 cursor-default">
											<span>
												<i class="fa fa-map-marker text-muted mr-1"></i>
													Phnom Penh 
											</span>
										</a>
																			
									<a href="javascript:void(0);" class="mr-4 cursor-default">
										<span>
											<i class="fa fa-calendar-check-o text-muted mr-1"></i>
											2 week ago
										</span>
									</a>
									<a href="javascript:void(0);" class="cursor-default">
										<div class="rating-stars d-inline-flex">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center sm  lg-icon-35 hearticon-l cursor-default  ">
				<i class="fa fa-heart fa-heart-6053   "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

					<span class="line-h-text count_favourite sm_count_favourite_6053 text-primary "> 0 Favourite(s)</span>
		
	</div>
									</a>
								</div>
							
							<p class="mb-0 leading-tight leading-tight-min-h">
								• Design, build and maintain high-performance and reliable API platform.• Work with internal and external teams to support on API integration.• Develop backend apps, microservice and other API as requ...
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="card-footer pt-0 pb-0 pl-0 m-pr-3">
				<div class="item-card9-footer d-flex">
					<div class="col-9 d-flex mt-0 align-items-center pt-3 mb-md-0 mt-auto posted">
						<div class="fz-11 h-info-b">
															<a href=""class="text-muted fs-11 mb-1 col-4 m-text-limit-cha">
									<i class="fa fa-building-o text-muted mr-1"></i>
									Cogetel Ltd
								</a>
														<a href="javascript:void(0);" class="text-muted fs-12 mb-1 col-4 cursor-default">
								<small class="fz-11 d-block text-muted ml-3"> 
									<i class="fa fa-calendar-times-o text-muted mr-1"></i> Closing Date: 
									21-08-2022
								</small>
							</a>
						</div>
					</div>
					<div class="col-3 text-right ml-auto pr-0">
						<div class="rating-stars d-inline-flex" onclick="addDeleteFavorite(this)" data-url="" data-id="6053" data-type="position" data-method="post" data-method6053="post">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center lg  ">
				<i class="fa fa-heart fa-heart-6053  "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

		
	</div>
					</div>
				</div>
			</div>
		</div>
			<div class="card overflow-hidden br-0 overflow-hidden shadow-lg p-3 mb-5 bg-white rounded">
							
						<div class="d-md-flex" id="wrap_job_post">
				<div class="p-0 m-0 item-card9-img">
					<div class="item-card9-imgs p-3 position-page">
						<a href="javasctipt:void(0)"></a>
																									<img style="width:60%;" src="https://m.young.hyundai.com:444/upload/oldUnvs/uploadFiles/HLM/_vVlgmYHwvsajZbtsvC75.jpg" alt="ទីប្រឹក្សាផ្នែកលក់" class="h-auto p-0 image-size-company rounded-circle1 border-0">
					</div>
				</div>
				<div class="card overflow-hidden border-0 box-shadow-0 border-left br-0 mb-0" style="border-left: 0 !important;">
					<div class="card-body pt-0 pt-md-3 pl-lg-0">
						<div class="item-card9 fz-11 cursor-click" data-url="https://jobboom.asia/position/cogetel-ltd" onclick="jobClick(this)">
							<a href="javasctipt:void(0)" class="text-dark">
								<h4 class="font-weight-semibold mt-1">ទីប្រឹក្សាផ្នែកលក់</h4>
							</a>
							
								<div class="mt-2 mb-2 rsp-detail-hearticon1">
																			<a href="javascript:void(0);" class="mt-0 mr-4 cursor-default">
											<span>
												<i class="fa fa-folder text-muted mr-1"></i>
												Sales / Marketing 
											</span>
										</a>
																																					<a href="javascript:void(0);" class="mr-4 cursor-default">
											<span>
												<i class="fa fa-map-marker text-muted mr-1"></i>
													Phnom Penh 
											</span>
										</a>
																			
									<a href="javascript:void(0);" class="mr-4 cursor-default">
										<span>
											<i class="fa fa-calendar-check-o text-muted mr-1"></i>
											2 week ago
										</span>
									</a>
									<a href="javascript:void(0);" class="cursor-default">
										<div class="rating-stars d-inline-flex">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center sm  lg-icon-35 hearticon-l cursor-default  ">
				<i class="fa fa-heart fa-heart-6054   "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

					<span class="line-h-text count_favourite sm_count_favourite_6054 text-primary "> 0 Favourite(s)</span>
		
	</div>
									</a>
								</div>
							
							<p class="mb-0 leading-tight leading-tight-min-h">
								ទំនួលខុសត្រូវ៖• ផ្សព្វផ្សាយ និងលក់សេវាអ៊ីនធឺណិតដល់អតិថិជន• ប្តេជ្ញាបំពេញតាមគោលដៅលក់ និង KPI• ណែនាំអតិថិជនអំពីការទទួលបានការដំឡើងសេវាកម្ម ឬរបៀបប្រើប្រាស់សេវាកម្មល្អបំផុតដែលបានទិញ• ពិពណ៌នា និងពន្យល់ពីផលិ...
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="card-footer pt-0 pb-0 pl-0 m-pr-3">
				<div class="item-card9-footer d-flex">
					<div class="col-9 d-flex mt-0 align-items-center pt-3 mb-md-0 mt-auto posted">
						<div class="fz-11 h-info-b">
															<a href="https://jobboom.asia/company/cogetel-ltd" class="text-muted fs-11 mb-1 col-4 m-text-limit-cha">
									<i class="fa fa-building-o text-muted mr-1"></i>
									Cogetel Ltd
								</a>
														<a href="javascript:void(0);" class="text-muted fs-12 mb-1 col-4 cursor-default">
								<small class="fz-11 d-block text-muted ml-3"> 
									<i class="fa fa-calendar-times-o text-muted mr-1"></i> Closing Date: 
									21-08-2022
								</small>
							</a>
						</div>
					</div>
					<div class="col-3 text-right ml-auto pr-0">
						<div class="rating-stars d-inline-flex" onclick="addDeleteFavorite(this)" data-url="" data-id="6054" data-type="position" data-method="post" data-method6054="post">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center lg  ">
				<i class="fa fa-heart fa-heart-6054  "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

		
	</div>
					</div>
				</div>
			</div>
		</div>
			<div class="card overflow-hidden br-0 overflow-hidden shadow-lg p-3 mb-5 bg-white rounded">
							
						<div class="d-md-flex" id="wrap_job_post">
				<div class="p-0 m-0 item-card9-img">
					<div class="item-card9-imgs p-3 position-page">
						<a href="javasctipt:void(0)"></a>
																									<img style="width:70%;" src="https://dcassetcdn.com/design_img/2907801/517402/517402_15988983_2907801_61082ab5_image.jpg" alt="ទីប្រឹក្សាដំណោះស្រាយផ្នែកលក់" class="h-auto p-0 image-size-company rounded-circle1 border-0">
					</div>
				</div>
				<div class="card overflow-hidden border-0 box-shadow-0 border-left br-0 mb-0" style="border-left: 0 !important;">
					<div class="card-body pt-0 pt-md-3 pl-lg-0">
						<div class="item-card9 fz-11 cursor-click" data-url="https://jobboom.asia/position/cogetel-ltd-1" onclick="jobClick(this)">
							<a href="javasctipt:void(0)" class="text-dark">
								<h4 class="font-weight-semibold mt-1">ទីប្រឹក្សាដំណោះស្រាយផ្នែកលក់</h4>
							</a>
							
								<div class="mt-2 mb-2 rsp-detail-hearticon1">
																			<a href="javascript:void(0);" class="mt-0 mr-4 cursor-default">
											<span>
												<i class="fa fa-folder text-muted mr-1"></i>
												Sales / Marketing 
											</span>
										</a>
																																					<a href="javascript:void(0);" class="mr-4 cursor-default">
											<span>
												<i class="fa fa-map-marker text-muted mr-1"></i>
													Phnom Penh 
											</span>
										</a>
																			
									<a href="javascript:void(0);" class="mr-4 cursor-default">
										<span>
											<i class="fa fa-calendar-check-o text-muted mr-1"></i>
											2 week ago
										</span>
									</a>
									<a href="javascript:void(0);" class="cursor-default">
										<div class="rating-stars d-inline-flex">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center sm  lg-icon-35 hearticon-l cursor-default  ">
				<i class="fa fa-heart fa-heart-6055   "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

					<span class="line-h-text count_favourite sm_count_favourite_6055 text-primary "> 0 Favourite(s)</span>
		
	</div>
									</a>
								</div>
							
							<p class="mb-0 leading-tight leading-tight-min-h">
								ទំនួលខុសត្រូវ• ផ្សព្វផ្សាយ និងលក់ផលិតផល និងសេវាកម្មរបស់ក្រុមហ៊ុន (Network Solution, Security Camera Solution, VoIP Solution, Software and Hardware Solution, Internet Solution etc and Maintenance Servi...
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="card-footer pt-0 pb-0 pl-0 m-pr-3">
				<div class="item-card9-footer d-flex">
					<div class="col-9 d-flex mt-0 align-items-center pt-3 mb-md-0 mt-auto posted">
						<div class="fz-11 h-info-b">
															<a href="" class="text-muted fs-11 mb-1 col-4 m-text-limit-cha">
									<i class="fa fa-building-o text-muted mr-1"></i>
									Cogetel Ltd
								</a>
														<a href="javascript:void(0);" class="text-muted fs-12 mb-1 col-4 cursor-default">
								<small class="fz-11 d-block text-muted ml-3"> 
									<i class="fa fa-calendar-times-o text-muted mr-1"></i> Closing Date: 
									21-08-2022
								</small>
							</a>
						</div>
					</div>
					<div class="col-3 text-right ml-auto pr-0">
						<div class="rating-stars d-inline-flex" onclick="addDeleteFavorite(this)" data-url="" data-id="6055" data-type="position" data-method="post" data-method6055="post">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center lg  ">
				<i class="fa fa-heart fa-heart-6055  "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

		
	</div>
					</div>
				</div>
			</div>
		</div>
			<div class="card overflow-hidden br-0 overflow-hidden shadow-lg p-3 mb-5 bg-white rounded">
							
						<div class="d-md-flex" id="wrap_job_post">
				<div class="p-0 m-0 item-card9-img">
					<div class="item-card9-imgs p-3 position-page">
						<a href="javasctipt:void(0)"></a>
																									<img style="width:80%;" src="https://www.online.com.kh/wp-content/uploads/2019/06/onlineisp.png" alt="ជំនួយការត្រួតពិនិត្យឥណទាន" class="h-auto p-0 image-size-company rounded-circle1 border-0">
					</div>
				</div>
				<div class="card overflow-hidden border-0 box-shadow-0 border-left br-0 mb-0" style="border-left: 0 !important;">
					<div class="card-body pt-0 pt-md-3 pl-lg-0">
						<div class="item-card9 fz-11 cursor-click" data-url="https://jobboom.asia/position/cogetel-ltd-2" onclick="jobClick(this)">
							<a href="javasctipt:void(0)" class="text-dark">
								<h4 class="font-weight-semibold mt-1">ជំនួយការត្រួតពិនិត្យឥណទាន</h4>
							</a>
							
								<div class="mt-2 mb-2 rsp-detail-hearticon1">
																			<a href="javascript:void(0);" class="mt-0 mr-4 cursor-default">
											<span>
												<i class="fa fa-folder text-muted mr-1"></i>
												Accounting/Audit/Taxation 
											</span>
										</a>
																																					<a href="javascript:void(0);" class="mr-4 cursor-default">
											<span>
												<i class="fa fa-map-marker text-muted mr-1"></i>
													Phnom Penh 
											</span>
										</a>
																			
									<a href="javascript:void(0);" class="mr-4 cursor-default">
										<span>
											<i class="fa fa-calendar-check-o text-muted mr-1"></i>
											2 week ago
										</span>
									</a>
									<a href="javascript:void(0);" class="cursor-default">
										<div class="rating-stars d-inline-flex">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center sm  lg-icon-35 hearticon-l cursor-default  ">
				<i class="fa fa-heart fa-heart-6056   "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

					<span class="line-h-text count_favourite sm_count_favourite_6056 text-primary "> 0 Favourite(s)</span>
		
	</div>
									</a>
								</div>
							
							<p class="mb-0 leading-tight leading-tight-min-h">
								ទំនួលខុសត្រូវ៖• របាយការណ៍ធនាគារត្រួតពិនិត្យប្រចាំថ្ងៃ• Post Reply Reply Billing Ticket និងជំនួយក្នុងការពិនិត្យមើលការផ្ទេរប្រាក់តាមធនាគាររបស់អតិថិជនជាមួយសាជីវកម្មធនាគារ• ផ្សះផ្សា និងបញ្ជាក់ចំនួនទឹកប្រា...
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="card-footer pt-0 pb-0 pl-0 m-pr-3">
				<div class="item-card9-footer d-flex">
					<div class="col-9 d-flex mt-0 align-items-center pt-3 mb-md-0 mt-auto posted">
						<div class="fz-11 h-info-b">
															<a href="https://jobboom.asia/company/cogetel-ltd" class="text-muted fs-11 mb-1 col-4 m-text-limit-cha">
									<i class="fa fa-building-o text-muted mr-1"></i>
									Cogetel Ltd
								</a>
														<a href="javascript:void(0);" class="text-muted fs-12 mb-1 col-4 cursor-default">
								<small class="fz-11 d-block text-muted ml-3"> 
									<i class="fa fa-calendar-times-o text-muted mr-1"></i> Closing Date: 
									21-08-2022
								</small>
							</a>
						</div>
					</div>
					<div class="col-3 text-right ml-auto pr-0">
						<div class="rating-stars d-inline-flex" onclick="addDeleteFavorite(this)" data-url="" data-id="6056" data-type="position" data-method="post" data-method6056="post">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center lg  ">
				<i class="fa fa-heart fa-heart-6056  "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

		
	</div>
					</div>
				</div>
			</div>
		</div>
			<div class="card overflow-hidden br-0 overflow-hidden shadow-lg p-3 mb-5 bg-white rounded">
							
						<div class="d-md-flex" id="wrap_job_post">
				<div class="p-0 m-0 item-card9-img">
					<div class="item-card9-imgs p-3 position-page">
						<a href="javasctipt:void(0)"></a>
																									<img style="width:70%;" src="https://cdn.logojoy.com/wp-content/uploads/2018/05/01104710/1267.png" alt="Support Engineer" class="h-auto p-0 image-size-company rounded-circle1 border-0">
					</div>
				</div>
				<div class="card overflow-hidden border-0 box-shadow-0 border-left br-0 mb-0" style="border-left: 0 !important;">
					<div class="card-body pt-0 pt-md-3 pl-lg-0">
						<div class="item-card9 fz-11 cursor-click" data-url="https://jobboom.asia/position/cogetel-ltd-support-engineer" onclick="jobClick(this)">
							<a href="javasctipt:void(0)" class="text-dark">
								<h4 class="font-weight-semibold mt-1">Support Engineer</h4>
							</a>
							
								<div class="mt-2 mb-2 rsp-detail-hearticon1">
																			<a href="javascript:void(0);" class="mt-0 mr-4 cursor-default">
											<span>
												<i class="fa fa-folder text-muted mr-1"></i>
												Computer Networking 
											</span>
										</a>
																																					<a href="javascript:void(0);" class="mr-4 cursor-default">
											<span>
												<i class="fa fa-map-marker text-muted mr-1"></i>
													Phnom Penh 
											</span>
										</a>
																			
									<a href="javascript:void(0);" class="mr-4 cursor-default">
										<span>
											<i class="fa fa-calendar-check-o text-muted mr-1"></i>
											2 week ago
										</span>
									</a>
									<a href="javascript:void(0);" class="cursor-default">
										<div class="rating-stars d-inline-flex">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center sm  lg-icon-35 hearticon-l cursor-default  ">
				<i class="fa fa-heart fa-heart-6057   "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

					<span class="line-h-text count_favourite sm_count_favourite_6057 text-primary "> 0 Favourite(s)</span>
		
	</div>
									</a>
								</div>
							
							<p class="mb-0 leading-tight leading-tight-min-h">
								• Make sure about the ability to manage team when the team leader was absent• Provide best technical and communication skill to help retain customers.• Share the working experience to team for improve...
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="card-footer pt-0 pb-0 pl-0 m-pr-3">
				<div class="item-card9-footer d-flex">
					<div class="col-9 d-flex mt-0 align-items-center pt-3 mb-md-0 mt-auto posted">
						<div class="fz-11 h-info-b">
															<a href="https://jobboom.asia/company/cogetel-ltd" class="text-muted fs-11 mb-1 col-4 m-text-limit-cha">
									<i class="fa fa-building-o text-muted mr-1"></i>
									Cogetel Ltd
								</a>
														<a href="javascript:void(0);" class="text-muted fs-12 mb-1 col-4 cursor-default">
								<small class="fz-11 d-block text-muted ml-3"> 
									<i class="fa fa-calendar-times-o text-muted mr-1"></i> Closing Date: 
									21-08-2022
								</small>
							</a>
						</div>
					</div>
					<div class="col-3 text-right ml-auto pr-0">
						<div class="rating-stars d-inline-flex" onclick="addDeleteFavorite(this)" data-url="" data-id="6057" data-type="position" data-method="post" data-method6057="post">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center lg  ">
				<i class="fa fa-heart fa-heart-6057  "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

		
	</div>
					</div>
				</div>
			</div>
		</div>
			<div class="card overflow-hidden br-0 overflow-hidden shadow-lg p-3 mb-5 bg-white rounded">
							
						<div class="d-md-flex" id="wrap_job_post">
				<div class="p-0 m-0 item-card9-img">
					<div class="item-card9-imgs p-3 position-page">
						<a href="javasctipt:void(0)"></a>
																									<img style="width:60%;" src="https://media.istockphoto.com/vectors/construction-building-logo-icon-design-vector-vector-id1312188095?k=20&m=1312188095&s=612x612&w=0&h=dylpID6h1WzrOcse-dLHumaqT1QP4lUi1htL5Ezhqsg=" alt="Planning Engineer" class="h-auto p-0 image-size-company rounded-circle1 border-0">
					</div>
				</div>
				<div class="card overflow-hidden border-0 box-shadow-0 border-left br-0 mb-0" style="border-left: 0 !important;">
					<div class="card-body pt-0 pt-md-3 pl-lg-0">
						<div class="item-card9 fz-11 cursor-click" data-url="https://jobboom.asia/position/cogetel-ltd-planning-engineer" onclick="jobClick(this)">
							<a href="javasctipt:void(0)" class="text-dark">
								<h4 class="font-weight-semibold mt-1">Planning Engineer</h4>
							</a>
							
								<div class="mt-2 mb-2 rsp-detail-hearticon1">
																			<a href="javascript:void(0);" class="mt-0 mr-4 cursor-default">
											<span>
												<i class="fa fa-folder text-muted mr-1"></i>
												Computer Networking 
											</span>
										</a>
																																					<a href="javascript:void(0);" class="mr-4 cursor-default">
											<span>
												<i class="fa fa-map-marker text-muted mr-1"></i>
													Phnom Penh 
											</span>
										</a>
																			
									<a href="javascript:void(0);" class="mr-4 cursor-default">
										<span>
											<i class="fa fa-calendar-check-o text-muted mr-1"></i>
											2 week ago
										</span>
									</a>
									<a href="javascript:void(0);" class="cursor-default">
										<div class="rating-stars d-inline-flex">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center sm  lg-icon-35 hearticon-l cursor-default  ">
				<i class="fa fa-heart fa-heart-6059   "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

					<span class="line-h-text count_favourite sm_count_favourite_6059 text-primary "> 0 Favourite(s)</span>
		
	</div>
									</a>
								</div>
							
							<p class="mb-0 leading-tight leading-tight-min-h">
								•&nbsp;&nbsp; &nbsp;Survey Fiber Optic Cable running•&nbsp;&nbsp; &nbsp;On Site Installation•&nbsp;&nbsp; &nbsp;Other tasks assigned by Supervisor
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="card-footer pt-0 pb-0 pl-0 m-pr-3">
				<div class="item-card9-footer d-flex">
					<div class="col-9 d-flex mt-0 align-items-center pt-3 mb-md-0 mt-auto posted">
						<div class="fz-11 h-info-b">
															<a href="https://jobboom.asia/company/cogetel-ltd" class="text-muted fs-11 mb-1 col-4 m-text-limit-cha">
									<i class="fa fa-building-o text-muted mr-1"></i>
									Cogetel Ltd
								</a>
														<a href="javascript:void(0);" class="text-muted fs-12 mb-1 col-4 cursor-default">
								<small class="fz-11 d-block text-muted ml-3"> 
									<i class="fa fa-calendar-times-o text-muted mr-1"></i> Closing Date: 
									21-08-2022
								</small>
							</a>
						</div>
					</div>
					<div class="col-3 text-right ml-auto pr-0">
						<div class="rating-stars d-inline-flex" onclick="addDeleteFavorite(this)" data-url="" data-id="6059" data-type="position" data-method="post" data-method6059="post">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center lg  ">
				<i class="fa fa-heart fa-heart-6059  "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

		
	</div>
					</div>
				</div>
			</div>
		</div>
			<div class="card overflow-hidden br-0 overflow-hidden shadow-lg p-3 mb-5 bg-white rounded">
							
						<div class="d-md-flex" id="wrap_job_post">
				<div class="p-0 m-0 item-card9-img">
					<div class="item-card9-imgs p-3 position-page">
						<a href="javasctipt:void(0)"></a>
																									<img style="width:80%;" src="https://images-platform.99static.com/OZ56YyeDcYTEbyVkpf8W63FEWTY=/216x96:984x864/500x500/top/smart/99designs-contests-attachments/62/62621/attachment_62621885" alt="Project Engineer" class="h-auto p-0 image-size-company rounded-circle1 border-0">
					</div>
				</div>
				<div class="card overflow-hidden border-0 box-shadow-0 border-left br-0 mb-0" style="border-left: 0 !important;">
					<div class="card-body pt-0 pt-md-3 pl-lg-0">
						<div class="item-card9 fz-11 cursor-click" data-url="https://jobboom.asia/position/cogetel-ltd-project-engineer" onclick="jobClick(this)">
							<a href="javasctipt:void(0)" class="text-dark">
								<h4 class="font-weight-semibold mt-1">Project Engineer</h4>
							</a>
							
								<div class="mt-2 mb-2 rsp-detail-hearticon1">
																			<a href="javascript:void(0);" class="mt-0 mr-4 cursor-default">
											<span>
												<i class="fa fa-folder text-muted mr-1"></i>
												Computer Networking 
											</span>
										</a>
																																					<a href="javascript:void(0);" class="mr-4 cursor-default">
											<span>
												<i class="fa fa-map-marker text-muted mr-1"></i>
													Phnom Penh 
											</span>
										</a>
																			
									<a href="javascript:void(0);" class="mr-4 cursor-default">
										<span>
											<i class="fa fa-calendar-check-o text-muted mr-1"></i>
											2 week ago
										</span>
									</a>
									<a href="javascript:void(0);" class="cursor-default">
										<div class="rating-stars d-inline-flex">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center sm  lg-icon-35 hearticon-l cursor-default  ">
				<i class="fa fa-heart fa-heart-6058   "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

					<span class="line-h-text count_favourite sm_count_favourite_6058 text-primary "> 0 Favourite(s)</span>
		
	</div>
									</a>
								</div>
							
							<p class="mb-0 leading-tight leading-tight-min-h">
								•&nbsp;&nbsp; &nbsp;Verify on ticket open, pending, Follow up ticket, critical urgently case onsite•&nbsp;&nbsp; &nbsp;Conducts site surveys for Condominium, Apartment and SME customers•&nbsp;&nbsp; &nbsp;Prepare BoM after survey and submit to t...
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="card-footer pt-0 pb-0 pl-0 m-pr-3">
				<div class="item-card9-footer d-flex">
					<div class="col-9 d-flex mt-0 align-items-center pt-3 mb-md-0 mt-auto posted">
						<div class="fz-11 h-info-b">
															<a href="https://jobboom.asia/company/cogetel-ltd" class="text-muted fs-11 mb-1 col-4 m-text-limit-cha">
									<i class="fa fa-building-o text-muted mr-1"></i>
									Cogetel Ltd
								</a>
														<a href="javascript:void(0);" class="text-muted fs-12 mb-1 col-4 cursor-default">
								<small class="fz-11 d-block text-muted ml-3"> 
									<i class="fa fa-calendar-times-o text-muted mr-1"></i> Closing Date: 
									21-08-2022
								</small>
							</a>
						</div>
					</div>
					<div class="col-3 text-right ml-auto pr-0">
						<div class="rating-stars d-inline-flex" onclick="addDeleteFavorite(this)" data-url="" data-id="6058" data-type="position" data-method="post" data-method6058="post">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center lg  ">
				<i class="fa fa-heart fa-heart-6058  "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

		
	</div>
					</div>
				</div>
			</div>
		</div>
			<div class="card overflow-hidden br-0 overflow-hidden shadow-lg p-3 mb-5 bg-white rounded">
							
						<div class="d-md-flex" id="wrap_job_post">
				<div class="p-0 m-0 item-card9-img">
					<div class="item-card9-imgs p-3 position-page">
						<a href="javasctipt:void(0)"></a>
																									<img style="width:90%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtOIV_SWwOC7zVayHXcQjJYB6MiwBsbZQ1q7o3R8Jmia9kGAl5w8orVuaS_opvS3lfUzQ&usqp=CAU" alt="អ្នកបច្ចេកទេសដំឡើង" class="h-auto p-0 image-size-company rounded-circle1 border-0">
					</div>
				</div>
				<div class="card overflow-hidden border-0 box-shadow-0 border-left br-0 mb-0" style="border-left: 0 !important;">
					<div class="card-body pt-0 pt-md-3 pl-lg-0">
						<div class="item-card9 fz-11 cursor-click" data-url="https://jobboom.asia/position/cogetel-ltd-3" onclick="jobClick(this)">
							<a href="javasctipt:void(0)" class="text-dark">
								<h4 class="font-weight-semibold mt-1">អ្នកបច្ចេកទេសដំឡើង</h4>
							</a>
							
								<div class="mt-2 mb-2 rsp-detail-hearticon1">
																			<a href="javascript:void(0);" class="mt-0 mr-4 cursor-default">
											<span>
												<i class="fa fa-folder text-muted mr-1"></i>
												Maintenance 
											</span>
										</a>
																																					<a href="javascript:void(0);" class="mr-4 cursor-default">
											<span>
												<i class="fa fa-map-marker text-muted mr-1"></i>
													Phnom Penh 
											</span>
										</a>
																			
									<a href="javascript:void(0);" class="mr-4 cursor-default">
										<span>
											<i class="fa fa-calendar-check-o text-muted mr-1"></i>
											2 week ago
										</span>
									</a>
									<a href="javascript:void(0);" class="cursor-default">
										<div class="rating-stars d-inline-flex">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center sm  lg-icon-35 hearticon-l cursor-default  ">
				<i class="fa fa-heart fa-heart-6060   "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

					<span class="line-h-text count_favourite sm_count_favourite_6060 text-primary "> 0 Favourite(s)</span>
		
	</div>
									</a>
								</div>
							
							<p class="mb-0 leading-tight leading-tight-min-h">
								• ដំណើរការខ្សែបណ្តាញ ខ្សែ CCTV ខ្សែកាបអុបទិក• ភ្ជាប់ខ្សែបណ្តាញទៅឧបករណ៍ ភ្ជាប់ខ្សែខ្សែកាបអុបទិក• ដំឡើងកាមេរ៉ាសុវត្ថិភាព និងបណ្តាញ• ការងារផ្សេងទៀតដែលត្រូវបានចាត់តាំងដោយប្រធានក្រុម ឬអ្នកគ្រប់គ្រង
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="card-footer pt-0 pb-0 pl-0 m-pr-3">
				<div class="item-card9-footer d-flex">
					<div class="col-9 d-flex mt-0 align-items-center pt-3 mb-md-0 mt-auto posted">
						<div class="fz-11 h-info-b">
															<a href="https://jobboom.asia/company/cogetel-ltd" class="text-muted fs-11 mb-1 col-4 m-text-limit-cha">
									<i class="fa fa-building-o text-muted mr-1"></i>
									Cogetel Ltd
								</a>
														<a href="javascript:void(0);" class="text-muted fs-12 mb-1 col-4 cursor-default">
								<small class="fz-11 d-block text-muted ml-3"> 
									<i class="fa fa-calendar-times-o text-muted mr-1"></i> Closing Date: 
									21-08-2022
								</small>
							</a>
						</div>
					</div>
					<div class="col-3 text-right ml-auto pr-0">
						<div class="rating-stars d-inline-flex" onclick="addDeleteFavorite(this)" data-url="" data-id="6060" data-type="position" data-method="post" data-method6060="post">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center lg  ">
				<i class="fa fa-heart fa-heart-6060  "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

		
	</div>
					</div>
				</div>
			</div>
		</div>
			<div class="card overflow-hidden br-0 overflow-hidden shadow-lg p-3 mb-5 bg-white rounded">
							
						<div class="d-md-flex" id="wrap_job_post">
				<div class="p-0 m-0 item-card9-img">
					<div class="item-card9-imgs p-3 position-page">
						<a href="javasctipt:void(0)"></a>
																									<img style="width:90%;" src="https://images-platform.99static.com//IVv_cKIZ2kPAMfjqhurBf1fyz-c=/380x98:1012x730/fit-in/500x500/99designs-contests-attachments/78/78990/attachment_78990762" alt="ជំនួយការគណនេយ្យ" class="h-auto p-0 image-size-company rounded-circle1 border-0">
					</div>
				</div>
				<div class="card overflow-hidden border-0 box-shadow-0 border-left br-0 mb-0" style="border-left: 0 !important;">
					<div class="card-body pt-0 pt-md-3 pl-lg-0">
						<div class="item-card9 fz-11 cursor-click" data-url="https://jobboom.asia/position/cogetel-ltd-4" onclick="jobClick(this)">
							<a href="javasctipt:void(0)" class="text-dark">
								<h4 class="font-weight-semibold mt-1">ជំនួយការគណនេយ្យ</h4>
							</a>
							
								<div class="mt-2 mb-2 rsp-detail-hearticon1">
																			<a href="javascript:void(0);" class="mt-0 mr-4 cursor-default">
											<span>
												<i class="fa fa-folder text-muted mr-1"></i>
												Accounting/Audit/Taxation 
											</span>
										</a>
																																					<a href="javascript:void(0);" class="mr-4 cursor-default">
											<span>
												<i class="fa fa-map-marker text-muted mr-1"></i>
													Phnom Penh 
											</span>
										</a>
																			
									<a href="javascript:void(0);" class="mr-4 cursor-default">
										<span>
											<i class="fa fa-calendar-check-o text-muted mr-1"></i>
											2 week ago
										</span>
									</a>
									<a href="javascript:void(0);" class="cursor-default">
										<div class="rating-stars d-inline-flex">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center sm  lg-icon-35 hearticon-l cursor-default  ">
				<i class="fa fa-heart fa-heart-6066   "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

					<span class="line-h-text count_favourite sm_count_favourite_6066 text-primary "> 0 Favourite(s)</span>
		
	</div>
									</a>
								</div>
							
							<p class="mb-0 leading-tight leading-tight-min-h">
								1. ទំនួលខុសត្រូវ (ជំនួយការគណនេយ្យ)• ពិនិត្យមើលការប្រមូលសាច់ប្រាក់ប្រចាំថ្ងៃ និងសមតុល្យសាច់ប្រាក់តិចតួច• ដំណើរ​ការ​ទូទាត់​ប្រាក់​បន្ថែម​សម្រាប់​សាខា​ខេត្ត• បញ្ជាក់ និងតាមដានបុគ្គលិកប្រចាំខែជាមុន• ពិនិត...
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="card-footer pt-0 pb-0 pl-0 m-pr-3">
				<div class="item-card9-footer d-flex">
					<div class="col-9 d-flex mt-0 align-items-center pt-3 mb-md-0 mt-auto posted">
						<div class="fz-11 h-info-b">
															<a href="https://jobboom.asia/company/cogetel-ltd" class="text-muted fs-11 mb-1 col-4 m-text-limit-cha">
									<i class="fa fa-building-o text-muted mr-1"></i>
									Cogetel Ltd
								</a>
														<a href="javascript:void(0);" class="text-muted fs-12 mb-1 col-4 cursor-default">
								<small class="fz-11 d-block text-muted ml-3"> 
									<i class="fa fa-calendar-times-o text-muted mr-1"></i> Closing Date: 
									22-08-2022
								</small>
							</a>
						</div>
					</div>
					<div class="col-3 text-right ml-auto pr-0">
						<div class="rating-stars d-inline-flex" onclick="addDeleteFavorite(this)" data-url="" data-id="6066" data-type="position" data-method="post" data-method6066="post">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center lg  ">
				<i class="fa fa-heart fa-heart-6066  "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

		
	</div>
					</div>
				</div>
			</div>
		</div>
			<div class="card overflow-hidden br-0 overflow-hidden shadow-lg p-3 mb-5 bg-white rounded">
							
						<div class="d-md-flex" id="wrap_job_post">
				<div class="p-0 m-0 item-card9-img">
					<div class="item-card9-imgs p-3 position-page">
						<a href="javasctipt:void(0)"></a>
																									<img style="width:90%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtOIV_SWwOC7zVayHXcQjJYB6MiwBsbZQ1q7o3R8Jmia9kGAl5w8orVuaS_opvS3lfUzQ&usqp=CAU" alt="Graphic Designer" class="h-auto p-0 image-size-company rounded-circle1 border-0">
					</div>
				</div>
				<div class="card overflow-hidden border-0 box-shadow-0 border-left br-0 mb-0" style="border-left: 0 !important;">
					<div class="card-body pt-0 pt-md-3 pl-lg-0">
						<div class="item-card9 fz-11 cursor-click" data-url="https://jobboom.asia/position/cogetel-ltd-graphic-designer" onclick="jobClick(this)">
							<a href="javasctipt:void(0)" class="text-dark">
								<h4 class="font-weight-semibold mt-1">Graphic Designer</h4>
							</a>
							
								<div class="mt-2 mb-2 rsp-detail-hearticon1">
																			<a href="javascript:void(0);" class="mt-0 mr-4 cursor-default">
											<span>
												<i class="fa fa-folder text-muted mr-1"></i>
												Arts / Graphic Design 
											</span>
										</a>
																																					<a href="javascript:void(0);" class="mr-4 cursor-default">
											<span>
												<i class="fa fa-map-marker text-muted mr-1"></i>
													Phnom Penh 
											</span>
										</a>
																			
									<a href="javascript:void(0);" class="mr-4 cursor-default">
										<span>
											<i class="fa fa-calendar-check-o text-muted mr-1"></i>
											2 week ago
										</span>
									</a>
									<a href="javascript:void(0);" class="cursor-default">
										<div class="rating-stars d-inline-flex">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center sm  lg-icon-35 hearticon-l cursor-default  ">
				<i class="fa fa-heart fa-heart-6067   "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

					<span class="line-h-text count_favourite sm_count_favourite_6067 text-primary "> 0 Favourite(s)</span>
		
	</div>
									</a>
								</div>
							
							<p class="mb-0 leading-tight leading-tight-min-h">
								1.&nbsp;&nbsp; Responsibilities·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Plan and schedule projects design to meet date line·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Work closely with the team to design marketing material, 2D, 3D, interior design and other related projects·...
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="card-footer pt-0 pb-0 pl-0 m-pr-3">
				<div class="item-card9-footer d-flex">
					<div class="col-9 d-flex mt-0 align-items-center pt-3 mb-md-0 mt-auto posted">
						<div class="fz-11 h-info-b">
															<a href="https://jobboom.asia/company/cogetel-ltd" class="text-muted fs-11 mb-1 col-4 m-text-limit-cha">
									<i class="fa fa-building-o text-muted mr-1"></i>
									Cogetel Ltd
								</a>
														<a href="javascript:void(0);" class="text-muted fs-12 mb-1 col-4 cursor-default">
								<small class="fz-11 d-block text-muted ml-3"> 
									<i class="fa fa-calendar-times-o text-muted mr-1"></i> Closing Date: 
									22-08-2022
								</small>
							</a>
						</div>
					</div>
					<div class="col-3 text-right ml-auto pr-0">
						<div class="rating-stars d-inline-flex" onclick="addDeleteFavorite(this)" data-url="" data-id="6067" data-type="position" data-method="post" data-method6067="post">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center lg  ">
				<i class="fa fa-heart fa-heart-6067  "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

		
	</div>
					</div>
				</div>
			</div>
		</div>
			<div class="card overflow-hidden br-0 overflow-hidden shadow-lg p-3 mb-5 bg-white rounded">
							
						<div class="d-md-flex" id="wrap_job_post">
				<div class="p-0 m-0 item-card9-img">
					<div class="item-card9-imgs p-3 position-page">
						<a href="javasctipt:void(0)"></a>
																									<img style="width:90%;" src="https://i.pinimg.com/736x/c5/d5/24/c5d524050a24be0d275f4e3f3fe57f4d.jpg" alt="Backend Team Leader" class="h-auto p-0 image-size-company rounded-circle1 border-0">
					</div>
				</div>
				<div class="card overflow-hidden border-0 box-shadow-0 border-left br-0 mb-0" style="border-left: 0 !important;">
					<div class="card-body pt-0 pt-md-3 pl-lg-0">
						<div class="item-card9 fz-11 cursor-click" data-url="https://jobboom.asia/position/cogetel-ltd-backend-team-leader" onclick="jobClick(this)">
							<a href="javasctipt:void(0)" class="text-dark">
								<h4 class="font-weight-semibold mt-1">Backend Team Leader</h4>
							</a>
							
								<div class="mt-2 mb-2 rsp-detail-hearticon1">
																			<a href="javascript:void(0);" class="mt-0 mr-4 cursor-default">
											<span>
												<i class="fa fa-folder text-muted mr-1"></i>
												Computer Programming 
											</span>
										</a>
																																					<a href="javascript:void(0);" class="mr-4 cursor-default">
											<span>
												<i class="fa fa-map-marker text-muted mr-1"></i>
													Phnom Penh 
											</span>
										</a>
																			
									<a href="javascript:void(0);" class="mr-4 cursor-default">
										<span>
											<i class="fa fa-calendar-check-o text-muted mr-1"></i>
											2 week ago
										</span>
									</a>
									<a href="javascript:void(0);" class="cursor-default">
										<div class="rating-stars d-inline-flex">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center sm  lg-icon-35 hearticon-l cursor-default  ">
				<i class="fa fa-heart fa-heart-6072   "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

					<span class="line-h-text count_favourite sm_count_favourite_6072 text-primary "> 0 Favourite(s)</span>
		
	</div>
									</a>
								</div>
							
							<p class="mb-0 leading-tight leading-tight-min-h">
								➢ Release services/apps and Development management and planning.➢ Database Design and Analysis.➢ Adapt existing methods and procedures to implement and test program modules in line with functional req...
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="card-footer pt-0 pb-0 pl-0 m-pr-3">
				<div class="item-card9-footer d-flex">
					<div class="col-9 d-flex mt-0 align-items-center pt-3 mb-md-0 mt-auto posted">
						<div class="fz-11 h-info-b">
															<a href="https://jobboom.asia/company/cogetel-ltd" class="text-muted fs-11 mb-1 col-4 m-text-limit-cha">
									<i class="fa fa-building-o text-muted mr-1"></i>
									Cogetel Ltd
								</a>
														<a href="javascript:void(0);" class="text-muted fs-12 mb-1 col-4 cursor-default">
								<small class="fz-11 d-block text-muted ml-3"> 
									<i class="fa fa-calendar-times-o text-muted mr-1"></i> Closing Date: 
									22-08-2022
								</small>
							</a>
						</div>
					</div>
					<div class="col-3 text-right ml-auto pr-0">
						<div class="rating-stars d-inline-flex" onclick="addDeleteFavorite(this)" data-url="" data-id="6072" data-type="position" data-method="post" data-method6072="post">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center lg  ">
				<i class="fa fa-heart fa-heart-6072  "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

		
	</div>
					</div>
				</div>
			</div>
		</div>
									</div>
								<div class="tab-pane" id="tab-grid">
									<div class="row grid-main-row">
										<div class="col-lg-6 col-md-3 col-sm-12 col-xl-4" id="wrap_job_post">
			<div class="card overflow-hidden h-company-card-95">
									
														
				<div id="wrap_job_post">
					<div class="horizintal_card">
						<div class="item-card9-img border-bottom grd-card-w" id="grd-rps">
							<div class="item-card9-imgs p-lg-3 grd-rps-img position-page">
								<a href="javasctipt:void(0)"></a>
																	<img style="width:50%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtOIV_SWwOC7zVayHXcQjJYB6MiwBsbZQ1q7o3R8Jmia9kGAl5w8orVuaS_opvS3lfUzQ&usqp=CAU" alt="Solution Fiber Technician" class="m-auto image-size-company rounded-circle1 border-0">
															</div>
						</div>
					</div>
					<div class="card-body">
						<div class="item-card9 min-h-233 cursor-click" onclick="jobClick(this)" data-url="https://jobboom.asia/job/cogetel-ltd-solution-fiber-technician">
							<a href="javasctipt:void(0)" class="text-dark mt-2"><h4 class="font-weight-semibold mt-1 mb-2">Solution Fiber Techn...</h4></a>
							<ul class="icon-card mb-0 mt-1 grid-card-mode rsp-detail-hearticon">
																	<li class="mb-info-job-post"><span class="fz-11 icons mt-0 text-primary"><i class="fa fa-folder text-muted mr-1"></i>Engineering </span></li>
																																	<li class="mb-info-job-post"><span class="fz-11 icons text-primary"><i class="fa fa-clock-o text-muted mr-1"></i>Phnom Penh </span></li>
																									
<li class="mb-info-job-post"><span class="fz-11 icons text-primary"><i class="fa fa-calendar-check-o text-muted mr-1"></i>2 week ago</span></li>
								<li class="mb-info-job-post hearticon-l">
									<div class="rating-stars d-inline-flex">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center sm  lg-icon-35 hearticon-l cursor-default  ">
				<i class="fa fa-heart fa-heart-6052   "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

					<span class="line-h-text count_favourite sm_count_favourite_6052 text-primary "> 0 Favourite(s)</span>
		
	</div>
								</li>
							 </ul>
							 <p class="mb-0 mt-2">1. Verify on ticket open, pending, Follow up ticket, critical urgently case onsite.2. Conducts...</p>
						</div>
					</div>
				</div>

				<div class="card-footer pt-2 pb-2">
					<div class="item-card9-footer rps-info-flex">
					   <div class="max-size-mt align-items-center mb-3 mb-md-0 mt-auto posted">
						  <div class="fz-11">
															<a href="https://jobboom.asia/company/cogetel-ltd" class="text-muted mb-1">
									<i class="fa fa-building-o text-muted mr-1"></i>
									Cogetel Ltd
								</a>
														<small class="fz-11 d-block text-muted" cursor-default="">
								<i class="fa fa-calendar-times-o text-muted mr-1"></i>
								Closing Date: 
								21-08-2022
							</small>
						  </div>
					   </div>
					   <div class="float-right ml-auto">
						<div class="rating-stars d-inline-flex" onclick="addDeleteFavorite(this)" data-url="" data-id="6052" data-type="position" data-method="post" data-method6052="post">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center lg  ">
				<i class="fa fa-heart fa-heart-6052  "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

		
	</div>
					   </div>
					</div>
				 </div>
			</div>
		</div>
			<div class="col-lg-6 col-md-3 col-sm-12 col-xl-4" id="wrap_job_post">
			<div class="card overflow-hidden h-company-card-95">
									
														
				<div id="wrap_job_post">
					<div class="horizintal_card">
						<div class="item-card9-img border-bottom grd-card-w" id="grd-rps">
							<div class="item-card9-imgs p-lg-3 grd-rps-img position-page">
								<a href="javasctipt:void(0)"></a>
																	<img style="width:50%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtOIV_SWwOC7zVayHXcQjJYB6MiwBsbZQ1q7o3R8Jmia9kGAl5w8orVuaS_opvS3lfUzQ&usqp=CAU" alt="Senior Java" class="m-auto image-size-company rounded-circle1 border-0">
															</div>
						</div>
					</div>
					<div class="card-body">
						<div class="item-card9 min-h-233 cursor-click" onclick="jobClick(this)" data-url="https://jobboom.asia/job/cogetel-ltd-senior-java">
							<a href="javasctipt:void(0)" class="text-dark mt-2"><h4 class="font-weight-semibold mt-1 mb-2">Senior Java</h4></a>
							<ul class="icon-card mb-0 mt-1 grid-card-mode rsp-detail-hearticon">
																	<li class="mb-info-job-post"><span class="fz-11 icons mt-0 text-primary"><i class="fa fa-folder text-muted mr-1"></i>Computer Progra... </span></li>
																																	<li class="mb-info-job-post"><span class="fz-11 icons text-primary"><i class="fa fa-clock-o text-muted mr-1"></i>Phnom Penh </span></li>
																									
<li class="mb-info-job-post"><span class="fz-11 icons text-primary"><i class="fa fa-calendar-check-o text-muted mr-1"></i>2 week ago</span></li>
								<li class="mb-info-job-post hearticon-l">
									<div class="rating-stars d-inline-flex">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center sm  lg-icon-35 hearticon-l cursor-default  ">
				<i class="fa fa-heart fa-heart-6053   "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

					<span class="line-h-text count_favourite sm_count_favourite_6053 text-primary "> 0 Favourite(s)</span>
		
	</div>
								</li>
							 </ul>
							 <p class="mb-0 mt-2">• Design, build and maintain high-performance and reliable API platform.• Work with internal an...</p>
						</div>
					</div>
				</div>

				<div class="card-footer pt-2 pb-2">
					<div class="item-card9-footer rps-info-flex">
					   <div class="max-size-mt align-items-center mb-3 mb-md-0 mt-auto posted">
						  <div class="fz-11">
															<a href="https://jobboom.asia/company/cogetel-ltd" class="text-muted mb-1">
									<i class="fa fa-building-o text-muted mr-1"></i>
									Cogetel Ltd
								</a>
														<small class="fz-11 d-block text-muted" cursor-default="">
								<i class="fa fa-calendar-times-o text-muted mr-1"></i>
								Closing Date: 
								21-08-2022
							</small>
						  </div>
					   </div>
					   <div class="float-right ml-auto">
						<div class="rating-stars d-inline-flex" onclick="addDeleteFavorite(this)" data-url="" data-id="6053" data-type="position" data-method="post" data-method6053="post">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center lg  ">
				<i class="fa fa-heart fa-heart-6053  "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

		
	</div>
					   </div>
					</div>
				 </div>
			</div>
		</div>
			<div class="col-lg-6 col-md-3 col-sm-12 col-xl-4" id="wrap_job_post">
			<div class="card overflow-hidden h-company-card-95">
									
														
				<div id="wrap_job_post">
					<div class="horizintal_card">
						<div class="item-card9-img border-bottom grd-card-w" id="grd-rps">
							<div class="item-card9-imgs p-lg-3 grd-rps-img position-page">
								<a href="javasctipt:void(0)"></a>
																	<img style="width:50%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtOIV_SWwOC7zVayHXcQjJYB6MiwBsbZQ1q7o3R8Jmia9kGAl5w8orVuaS_opvS3lfUzQ&usqp=CAU" alt="ទីប្រឹក្សាផ្នែកលក់" class="m-auto image-size-company rounded-circle1 border-0">
															</div>
						</div>
					</div>
					<div class="card-body">
						<div class="item-card9 min-h-233 cursor-click" onclick="jobClick(this)" data-url="https://jobboom.asia/job/cogetel-ltd">
							<a href="javasctipt:void(0)" class="text-dark mt-2"><h4 class="font-weight-semibold mt-1 mb-2">ទីប្រឹក្សាផ្នែកលក់</h4></a>
							<ul class="icon-card mb-0 mt-1 grid-card-mode rsp-detail-hearticon">
																	<li class="mb-info-job-post"><span class="fz-11 icons mt-0 text-primary"><i class="fa fa-folder text-muted mr-1"></i>Sales / Marketi... </span></li>
																																	<li class="mb-info-job-post"><span class="fz-11 icons text-primary"><i class="fa fa-clock-o text-muted mr-1"></i>Phnom Penh </span></li>
																									
<li class="mb-info-job-post"><span class="fz-11 icons text-primary"><i class="fa fa-calendar-check-o text-muted mr-1"></i>2 week ago</span></li>
								<li class="mb-info-job-post hearticon-l">
									<div class="rating-stars d-inline-flex">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center sm  lg-icon-35 hearticon-l cursor-default  ">
				<i class="fa fa-heart fa-heart-6054   "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

					<span class="line-h-text count_favourite sm_count_favourite_6054 text-primary "> 0 Favourite(s)</span>
		
	</div>
								</li>
							 </ul>
							 <p class="mb-0 mt-2">ទំនួលខុសត្រូវ៖• ផ្សព្វផ្សាយ និងលក់សេវាអ៊ីនធឺណិតដល់អតិថិជន• ប្តេជ្ញាបំពេញតាមគោលដៅលក់ និង KPI• ណែ...</p>
						</div>
					</div>
				</div>

				<div class="card-footer pt-2 pb-2">
					<div class="item-card9-footer rps-info-flex">
					   <div class="max-size-mt align-items-center mb-3 mb-md-0 mt-auto posted">
						  <div class="fz-11">
															<a href="https://jobboom.asia/company/cogetel-ltd" class="text-muted mb-1">
									<i class="fa fa-building-o text-muted mr-1"></i>
									Cogetel Ltd
								</a>
														<small class="fz-11 d-block text-muted" cursor-default="">
								<i class="fa fa-calendar-times-o text-muted mr-1"></i>
								Closing Date: 
								21-08-2022
							</small>
						  </div>
					   </div>
					   <div class="float-right ml-auto">
						<div class="rating-stars d-inline-flex" onclick="addDeleteFavorite(this)" data-url="" data-id="6054" data-type="position" data-method="post" data-method6054="post">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center lg  ">
				<i class="fa fa-heart fa-heart-6054  "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

		
	</div>
					   </div>
					</div>
				 </div>
			</div>
		</div>
			<div class="col-lg-6 col-md-3 col-sm-12 col-xl-4" id="wrap_job_post">
			<div class="card overflow-hidden h-company-card-95">
									
														
				<div id="wrap_job_post">
					<div class="horizintal_card">
						<div class="item-card9-img border-bottom grd-card-w" id="grd-rps">
							<div class="item-card9-imgs p-lg-3 grd-rps-img position-page">
								<a href="javasctipt:void(0)"></a>
																	<img style="width:50%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtOIV_SWwOC7zVayHXcQjJYB6MiwBsbZQ1q7o3R8Jmia9kGAl5w8orVuaS_opvS3lfUzQ&usqp=CAU" alt="ទីប្រឹក្សាដំណោះស្រាយផ្នែកលក់" class="m-auto image-size-company rounded-circle1 border-0">
															</div>
						</div>
					</div>
					<div class="card-body">
						<div class="item-card9 min-h-233 cursor-click" onclick="jobClick(this)" data-url="https://jobboom.asia/job/cogetel-ltd-1">
							<a href="javasctipt:void(0)" class="text-dark mt-2"><h4 class="font-weight-semibold mt-1 mb-2">ទីប្រឹក្សាដំណោះស្រាយ...</h4></a>
							<ul class="icon-card mb-0 mt-1 grid-card-mode rsp-detail-hearticon">
																	<li class="mb-info-job-post"><span class="fz-11 icons mt-0 text-primary"><i class="fa fa-folder text-muted mr-1"></i>Sales / Marketi... </span></li>
																																	<li class="mb-info-job-post"><span class="fz-11 icons text-primary"><i class="fa fa-clock-o text-muted mr-1"></i>Phnom Penh </span></li>
																									
<li class="mb-info-job-post"><span class="fz-11 icons text-primary"><i class="fa fa-calendar-check-o text-muted mr-1"></i>2 week ago</span></li>
								<li class="mb-info-job-post hearticon-l">
									<div class="rating-stars d-inline-flex">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center sm  lg-icon-35 hearticon-l cursor-default  ">
				<i class="fa fa-heart fa-heart-6055   "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

					<span class="line-h-text count_favourite sm_count_favourite_6055 text-primary "> 0 Favourite(s)</span>
		
	</div>
								</li>
							 </ul>
							 <p class="mb-0 mt-2">ទំនួលខុសត្រូវ• ផ្សព្វផ្សាយ និងលក់ផលិតផល និងសេវាកម្មរបស់ក្រុមហ៊ុន (Network Solution, Security Ca...</p>
						</div>
					</div>
				</div>

				<div class="card-footer pt-2 pb-2">
					<div class="item-card9-footer rps-info-flex">
					   <div class="max-size-mt align-items-center mb-3 mb-md-0 mt-auto posted">
						  <div class="fz-11">
															<a href="https://jobboom.asia/company/cogetel-ltd" class="text-muted mb-1">
									<i class="fa fa-building-o text-muted mr-1"></i>
									Cogetel Ltd
								</a>
														<small class="fz-11 d-block text-muted" cursor-default="">
								<i class="fa fa-calendar-times-o text-muted mr-1"></i>
								Closing Date: 
								21-08-2022
							</small>
						  </div>
					   </div>
					   <div class="float-right ml-auto">
						<div class="rating-stars d-inline-flex" onclick="addDeleteFavorite(this)" data-url="" data-id="6055" data-type="position" data-method="post" data-method6055="post">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center lg  ">
				<i class="fa fa-heart fa-heart-6055  "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

		
	</div>
					   </div>
					</div>
				 </div>
			</div>
		</div>
			<div class="col-lg-6 col-md-3 col-sm-12 col-xl-4" id="wrap_job_post">
			<div class="card overflow-hidden h-company-card-95">
									
														
				<div id="wrap_job_post">
					<div class="horizintal_card">
						<div class="item-card9-img border-bottom grd-card-w" id="grd-rps">
							<div class="item-card9-imgs p-lg-3 grd-rps-img position-page">
								<a href="javasctipt:void(0)"></a>
																	<img style="width:50%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtOIV_SWwOC7zVayHXcQjJYB6MiwBsbZQ1q7o3R8Jmia9kGAl5w8orVuaS_opvS3lfUzQ&usqp=CAU" alt="ជំនួយការត្រួតពិនិត្យឥណទាន" class="m-auto image-size-company rounded-circle1 border-0">
															</div>
						</div>
					</div>
					<div class="card-body">
						<div class="item-card9 min-h-233 cursor-click" onclick="jobClick(this)" data-url="https://jobboom.asia/job/cogetel-ltd-2">
							<a href="javasctipt:void(0)" class="text-dark mt-2"><h4 class="font-weight-semibold mt-1 mb-2">ជំនួយការត្រួតពិនិត្យ...</h4></a>
							<ul class="icon-card mb-0 mt-1 grid-card-mode rsp-detail-hearticon">
																	<li class="mb-info-job-post"><span class="fz-11 icons mt-0 text-primary"><i class="fa fa-folder text-muted mr-1"></i>Accounting/Audi... </span></li>
																																	<li class="mb-info-job-post"><span class="fz-11 icons text-primary"><i class="fa fa-clock-o text-muted mr-1"></i>Phnom Penh </span></li>
																									
<li class="mb-info-job-post"><span class="fz-11 icons text-primary"><i class="fa fa-calendar-check-o text-muted mr-1"></i>2 week ago</span></li>
								<li class="mb-info-job-post hearticon-l">
									<div class="rating-stars d-inline-flex">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center sm  lg-icon-35 hearticon-l cursor-default  ">
				<i class="fa fa-heart fa-heart-6056   "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

					<span class="line-h-text count_favourite sm_count_favourite_6056 text-primary "> 0 Favourite(s)</span>
		
	</div>
								</li>
							 </ul>
							 <p class="mb-0 mt-2">ទំនួលខុសត្រូវ៖• របាយការណ៍ធនាគារត្រួតពិនិត្យប្រចាំថ្ងៃ• Post Reply Reply Billing Ticket និងជំនួយ...</p>
						</div>
					</div>
				</div>

				<div class="card-footer pt-2 pb-2">
					<div class="item-card9-footer rps-info-flex">
					   <div class="max-size-mt align-items-center mb-3 mb-md-0 mt-auto posted">
						  <div class="fz-11">
															<a href="https://jobboom.asia/company/cogetel-ltd" class="text-muted mb-1">
									<i class="fa fa-building-o text-muted mr-1"></i>
									Cogetel Ltd
								</a>
														<small class="fz-11 d-block text-muted" cursor-default="">
								<i class="fa fa-calendar-times-o text-muted mr-1"></i>
								Closing Date: 
								21-08-2022
							</small>
						  </div>
					   </div>
					   <div class="float-right ml-auto">
						<div class="rating-stars d-inline-flex" onclick="addDeleteFavorite(this)" data-url="" data-id="6056" data-type="position" data-method="post" data-method6056="post">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center lg  ">
				<i class="fa fa-heart fa-heart-6056  "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

		
	</div>
					   </div>
					</div>
				 </div>
			</div>
		</div>
			<div class="col-lg-6 col-md-3 col-sm-12 col-xl-4" id="wrap_job_post">
			<div class="card overflow-hidden h-company-card-95">
									
														
				<div id="wrap_job_post">
					<div class="horizintal_card">
						<div class="item-card9-img border-bottom grd-card-w" id="grd-rps">
							<div class="item-card9-imgs p-lg-3 grd-rps-img position-page">
								<a href="javasctipt:void(0)"></a>
																	<img style="width:50%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtOIV_SWwOC7zVayHXcQjJYB6MiwBsbZQ1q7o3R8Jmia9kGAl5w8orVuaS_opvS3lfUzQ&usqp=CAU" alt="Support Engineer" class="m-auto image-size-company rounded-circle1 border-0">
															</div>
						</div>
					</div>
					<div class="card-body">
						<div class="item-card9 min-h-233 cursor-click" onclick="jobClick(this)" data-url="https://jobboom.asia/job/cogetel-ltd-support-engineer">
							<a href="javasctipt:void(0)" class="text-dark mt-2"><h4 class="font-weight-semibold mt-1 mb-2">Support Engineer</h4></a>
							<ul class="icon-card mb-0 mt-1 grid-card-mode rsp-detail-hearticon">
																	<li class="mb-info-job-post"><span class="fz-11 icons mt-0 text-primary"><i class="fa fa-folder text-muted mr-1"></i>Computer Networ... </span></li>
																																	<li class="mb-info-job-post"><span class="fz-11 icons text-primary"><i class="fa fa-clock-o text-muted mr-1"></i>Phnom Penh </span></li>
																									
<li class="mb-info-job-post"><span class="fz-11 icons text-primary"><i class="fa fa-calendar-check-o text-muted mr-1"></i>2 week ago</span></li>
								<li class="mb-info-job-post hearticon-l">
									<div class="rating-stars d-inline-flex">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center sm  lg-icon-35 hearticon-l cursor-default  ">
				<i class="fa fa-heart fa-heart-6057   "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

					<span class="line-h-text count_favourite sm_count_favourite_6057 text-primary "> 0 Favourite(s)</span>
		
	</div>
								</li>
							 </ul>
							 <p class="mb-0 mt-2">• Make sure about the ability to manage team when the team leader was absent• Provide best tech...</p>
						</div>
					</div>
				</div>

				<div class="card-footer pt-2 pb-2">
					<div class="item-card9-footer rps-info-flex">
					   <div class="max-size-mt align-items-center mb-3 mb-md-0 mt-auto posted">
						  <div class="fz-11">
															<a href="https://jobboom.asia/company/cogetel-ltd" class="text-muted mb-1">
									<i class="fa fa-building-o text-muted mr-1"></i>
									Cogetel Ltd
								</a>
														<small class="fz-11 d-block text-muted" cursor-default="">
								<i class="fa fa-calendar-times-o text-muted mr-1"></i>
								Closing Date: 
								21-08-2022
							</small>
						  </div>
					   </div>
					   <div class="float-right ml-auto">
						<div class="rating-stars d-inline-flex" onclick="addDeleteFavorite(this)" data-url="" data-id="6057" data-type="position" data-method="post" data-method6057="post">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center lg  ">
				<i class="fa fa-heart fa-heart-6057  "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

		
	</div>
					   </div>
					</div>
				 </div>
			</div>
		</div>
			<div class="col-lg-6 col-md-3 col-sm-12 col-xl-4" id="wrap_job_post">
			<div class="card overflow-hidden h-company-card-95">
									
														
				<div id="wrap_job_post">
					<div class="horizintal_card">
						<div class="item-card9-img border-bottom grd-card-w" id="grd-rps">
							<div class="item-card9-imgs p-lg-3 grd-rps-img position-page">
								<a href="javasctipt:void(0)"></a>
																	<img style="width:50%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtOIV_SWwOC7zVayHXcQjJYB6MiwBsbZQ1q7o3R8Jmia9kGAl5w8orVuaS_opvS3lfUzQ&usqp=CAU" alt="Planning Engineer" class="m-auto image-size-company rounded-circle1 border-0">
															</div>
						</div>
					</div>
					<div class="card-body">
						<div class="item-card9 min-h-233 cursor-click" onclick="jobClick(this)" data-url="https://jobboom.asia/job/cogetel-ltd-planning-engineer">
							<a href="javasctipt:void(0)" class="text-dark mt-2"><h4 class="font-weight-semibold mt-1 mb-2">Planning Engineer</h4></a>
							<ul class="icon-card mb-0 mt-1 grid-card-mode rsp-detail-hearticon">
																	<li class="mb-info-job-post"><span class="fz-11 icons mt-0 text-primary"><i class="fa fa-folder text-muted mr-1"></i>Computer Networ... </span></li>
																																	<li class="mb-info-job-post"><span class="fz-11 icons text-primary"><i class="fa fa-clock-o text-muted mr-1"></i>Phnom Penh </span></li>
																									
<li class="mb-info-job-post"><span class="fz-11 icons text-primary"><i class="fa fa-calendar-check-o text-muted mr-1"></i>2 week ago</span></li>
								<li class="mb-info-job-post hearticon-l">
									<div class="rating-stars d-inline-flex">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center sm  lg-icon-35 hearticon-l cursor-default  ">
				<i class="fa fa-heart fa-heart-6059   "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

					<span class="line-h-text count_favourite sm_count_favourite_6059 text-primary "> 0 Favourite(s)</span>
		
	</div>
								</li>
							 </ul>
							 <p class="mb-0 mt-2">•&nbsp;&nbsp; &nbsp;Survey Fiber Optic Cable running•&nbsp;&nbsp; &nbsp;On Site Installation•&nbsp;&nbsp; &nbsp;Other tasks assigned by Supe...</p>
						</div>
					</div>
				</div>

				<div class="card-footer pt-2 pb-2">
					<div class="item-card9-footer rps-info-flex">
					   <div class="max-size-mt align-items-center mb-3 mb-md-0 mt-auto posted">
						  <div class="fz-11">
															<a href="https://jobboom.asia/company/cogetel-ltd" class="text-muted mb-1">
									<i class="fa fa-building-o text-muted mr-1"></i>
									Cogetel Ltd
								</a>
														<small class="fz-11 d-block text-muted" cursor-default="">
								<i class="fa fa-calendar-times-o text-muted mr-1"></i>
								Closing Date: 
								21-08-2022
							</small>
						  </div>
					   </div>
					   <div class="float-right ml-auto">
						<div class="rating-stars d-inline-flex" onclick="addDeleteFavorite(this)" data-url="" data-id="6059" data-type="position" data-method="post" data-method6059="post">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center lg  ">
				<i class="fa fa-heart fa-heart-6059  "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

		
	</div>
					   </div>
					</div>
				 </div>
			</div>
		</div>
			<div class="col-lg-6 col-md-3 col-sm-12 col-xl-4" id="wrap_job_post">
			<div class="card overflow-hidden h-company-card-95">
									
														
				<div id="wrap_job_post">
					<div class="horizintal_card">
						<div class="item-card9-img border-bottom grd-card-w" id="grd-rps">
							<div class="item-card9-imgs p-lg-3 grd-rps-img position-page">
								<a href="javasctipt:void(0)"></a>
																	<img style="width:50%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtOIV_SWwOC7zVayHXcQjJYB6MiwBsbZQ1q7o3R8Jmia9kGAl5w8orVuaS_opvS3lfUzQ&usqp=CAU" alt="Project Engineer" class="m-auto image-size-company rounded-circle1 border-0">
															</div>
						</div>
					</div>
					<div class="card-body">
						<div class="item-card9 min-h-233 cursor-click" onclick="jobClick(this)" data-url="https://jobboom.asia/job/cogetel-ltd-project-engineer">
							<a href="javasctipt:void(0)" class="text-dark mt-2"><h4 class="font-weight-semibold mt-1 mb-2">Project Engineer</h4></a>
							<ul class="icon-card mb-0 mt-1 grid-card-mode rsp-detail-hearticon">
																	<li class="mb-info-job-post"><span class="fz-11 icons mt-0 text-primary"><i class="fa fa-folder text-muted mr-1"></i>Computer Networ... </span></li>
																																	<li class="mb-info-job-post"><span class="fz-11 icons text-primary"><i class="fa fa-clock-o text-muted mr-1"></i>Phnom Penh </span></li>
																									
<li class="mb-info-job-post"><span class="fz-11 icons text-primary"><i class="fa fa-calendar-check-o text-muted mr-1"></i>2 week ago</span></li>
								<li class="mb-info-job-post hearticon-l">
									<div class="rating-stars d-inline-flex">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center sm  lg-icon-35 hearticon-l cursor-default  ">
				<i class="fa fa-heart fa-heart-6058   "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

					<span class="line-h-text count_favourite sm_count_favourite_6058 text-primary "> 0 Favourite(s)</span>
		
	</div>
								</li>
							 </ul>
							 <p class="mb-0 mt-2">•&nbsp;&nbsp; &nbsp;Verify on ticket open, pending, Follow up ticket, critical urgently case onsite•&nbsp;&nbsp; &nbsp;Conduc...</p>
						</div>
					</div>
				</div>

				<div class="card-footer pt-2 pb-2">
					<div class="item-card9-footer rps-info-flex">
					   <div class="max-size-mt align-items-center mb-3 mb-md-0 mt-auto posted">
						  <div class="fz-11">
															<a href="https://jobboom.asia/company/cogetel-ltd" class="text-muted mb-1">
									<i class="fa fa-building-o text-muted mr-1"></i>
									Cogetel Ltd
								</a>
														<small class="fz-11 d-block text-muted" cursor-default="">
								<i class="fa fa-calendar-times-o text-muted mr-1"></i>
								Closing Date: 
								21-08-2022
							</small>
						  </div>
					   </div>
					   <div class="float-right ml-auto">
						<div class="rating-stars d-inline-flex" onclick="addDeleteFavorite(this)" data-url="" data-id="6058" data-type="position" data-method="post" data-method6058="post">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center lg  ">
				<i class="fa fa-heart fa-heart-6058  "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

		
	</div>
					   </div>
					</div>
				 </div>
			</div>
		</div>
			<div class="col-lg-6 col-md-3 col-sm-12 col-xl-4" id="wrap_job_post">
			<div class="card overflow-hidden h-company-card-95">
									
														
				<div id="wrap_job_post">
					<div class="horizintal_card">
						<div class="item-card9-img border-bottom grd-card-w" id="grd-rps">
							<div class="item-card9-imgs p-lg-3 grd-rps-img position-page">
								<a href="javasctipt:void(0)"></a>
																	<img style="width:50%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtOIV_SWwOC7zVayHXcQjJYB6MiwBsbZQ1q7o3R8Jmia9kGAl5w8orVuaS_opvS3lfUzQ&usqp=CAU" alt="អ្នកបច្ចេកទេសដំឡើង" class="m-auto image-size-company rounded-circle1 border-0">
															</div>
						</div>
					</div>
					<div class="card-body">
						<div class="item-card9 min-h-233 cursor-click" onclick="jobClick(this)" data-url="https://jobboom.asia/job/cogetel-ltd-3">
							<a href="javasctipt:void(0)" class="text-dark mt-2"><h4 class="font-weight-semibold mt-1 mb-2">អ្នកបច្ចេកទេសដំឡើង</h4></a>
							<ul class="icon-card mb-0 mt-1 grid-card-mode rsp-detail-hearticon">
																	<li class="mb-info-job-post"><span class="fz-11 icons mt-0 text-primary"><i class="fa fa-folder text-muted mr-1"></i>Maintenance </span></li>
																																	<li class="mb-info-job-post"><span class="fz-11 icons text-primary"><i class="fa fa-clock-o text-muted mr-1"></i>Phnom Penh </span></li>
																									
<li class="mb-info-job-post"><span class="fz-11 icons text-primary"><i class="fa fa-calendar-check-o text-muted mr-1"></i>2 week ago</span></li>
								<li class="mb-info-job-post hearticon-l">
									<div class="rating-stars d-inline-flex">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center sm  lg-icon-35 hearticon-l cursor-default  ">
				<i class="fa fa-heart fa-heart-6060   "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

					<span class="line-h-text count_favourite sm_count_favourite_6060 text-primary "> 0 Favourite(s)</span>
		
	</div>
								</li>
							 </ul>
							 <p class="mb-0 mt-2">• ដំណើរការខ្សែបណ្តាញ ខ្សែ CCTV ខ្សែកាបអុបទិក• ភ្ជាប់ខ្សែបណ្តាញទៅឧបករណ៍ ភ្ជាប់ខ្សែខ្សែកាបអុបទិក•...</p>
						</div>
					</div>
				</div>

				<div class="card-footer pt-2 pb-2">
					<div class="item-card9-footer rps-info-flex">
					   <div class="max-size-mt align-items-center mb-3 mb-md-0 mt-auto posted">
						  <div class="fz-11">
															<a href="https://jobboom.asia/company/cogetel-ltd" class="text-muted mb-1">
									<i class="fa fa-building-o text-muted mr-1"></i>
									Cogetel Ltd
								</a>
														<small class="fz-11 d-block text-muted" cursor-default="">
								<i class="fa fa-calendar-times-o text-muted mr-1"></i>
								Closing Date: 
								21-08-2022
							</small>
						  </div>
					   </div>
					   <div class="float-right ml-auto">
						<div class="rating-stars d-inline-flex" onclick="addDeleteFavorite(this)" data-url="" data-id="6060" data-type="position" data-method="post" data-method6060="post">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center lg  ">
				<i class="fa fa-heart fa-heart-6060  "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

		
	</div>
					   </div>
					</div>
				 </div>
			</div>
		</div>
			<div class="col-lg-6 col-md-3 col-sm-12 col-xl-4" id="wrap_job_post">
			<div class="card overflow-hidden h-company-card-95">
									
														
				<div id="wrap_job_post">
					<div class="horizintal_card">
						<div class="item-card9-img border-bottom grd-card-w" id="grd-rps">
							<div class="item-card9-imgs p-lg-3 grd-rps-img position-page">
								<a href="javasctipt:void(0)"></a>
																	<img style="width:50%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtOIV_SWwOC7zVayHXcQjJYB6MiwBsbZQ1q7o3R8Jmia9kGAl5w8orVuaS_opvS3lfUzQ&usqp=CAU" alt="ជំនួយការគណនេយ្យ" class="m-auto image-size-company rounded-circle1 border-0">
															</div>
						</div>
					</div>
					<div class="card-body">
						<div class="item-card9 min-h-233 cursor-click" onclick="jobClick(this)" data-url="https://jobboom.asia/job/cogetel-ltd-4">
							<a href="javasctipt:void(0)" class="text-dark mt-2"><h4 class="font-weight-semibold mt-1 mb-2">ជំនួយការគណនេយ្យ</h4></a>
							<ul class="icon-card mb-0 mt-1 grid-card-mode rsp-detail-hearticon">
																	<li class="mb-info-job-post"><span class="fz-11 icons mt-0 text-primary"><i class="fa fa-folder text-muted mr-1"></i>Accounting/Audi... </span></li>
																																	<li class="mb-info-job-post"><span class="fz-11 icons text-primary"><i class="fa fa-clock-o text-muted mr-1"></i>Phnom Penh </span></li>
																									
<li class="mb-info-job-post"><span class="fz-11 icons text-primary"><i class="fa fa-calendar-check-o text-muted mr-1"></i>2 week ago</span></li>
								<li class="mb-info-job-post hearticon-l">
									<div class="rating-stars d-inline-flex">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center sm  lg-icon-35 hearticon-l cursor-default  ">
				<i class="fa fa-heart fa-heart-6066   "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

					<span class="line-h-text count_favourite sm_count_favourite_6066 text-primary "> 0 Favourite(s)</span>
		
	</div>
								</li>
							 </ul>
							 <p class="mb-0 mt-2">1. ទំនួលខុសត្រូវ (ជំនួយការគណនេយ្យ)• ពិនិត្យមើលការប្រមូលសាច់ប្រាក់ប្រចាំថ្ងៃ និងសមតុល្យសាច់ប្រាក...</p>
						</div>
					</div>
				</div>

				<div class="card-footer pt-2 pb-2">
					<div class="item-card9-footer rps-info-flex">
					   <div class="max-size-mt align-items-center mb-3 mb-md-0 mt-auto posted">
						  <div class="fz-11">
															<a href="https://jobboom.asia/company/cogetel-ltd" class="text-muted mb-1">
									<i class="fa fa-building-o text-muted mr-1"></i>
									Cogetel Ltd
								</a>
														<small class="fz-11 d-block text-muted" cursor-default="">
								<i class="fa fa-calendar-times-o text-muted mr-1"></i>
								Closing Date: 
								22-08-2022
							</small>
						  </div>
					   </div>
					   <div class="float-right ml-auto">
						<div class="rating-stars d-inline-flex" onclick="addDeleteFavorite(this)" data-url="" data-id="6066" data-type="position" data-method="post" data-method6066="post">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center lg  ">
				<i class="fa fa-heart fa-heart-6066  "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

		
	</div>
					   </div>
					</div>
				 </div>
			</div>
		</div>
			<div class="col-lg-6 col-md-3 col-sm-12 col-xl-4" id="wrap_job_post">
			<div class="card overflow-hidden h-company-card-95">
									
														
				<div id="wrap_job_post">
					<div class="horizintal_card">
						<div class="item-card9-img border-bottom grd-card-w" id="grd-rps">
							<div class="item-card9-imgs p-lg-3 grd-rps-img position-page">
								<a href="javasctipt:void(0)"></a>
																	<img style="width:50%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtOIV_SWwOC7zVayHXcQjJYB6MiwBsbZQ1q7o3R8Jmia9kGAl5w8orVuaS_opvS3lfUzQ&usqp=CAU" alt="Graphic Designer" class="m-auto image-size-company rounded-circle1 border-0">
															</div>
						</div>
					</div>
					<div class="card-body">
						<div class="item-card9 min-h-233 cursor-click" onclick="jobClick(this)" data-url="https://jobboom.asia/job/cogetel-ltd-graphic-designer">
							<a href="javasctipt:void(0)" class="text-dark mt-2"><h4 class="font-weight-semibold mt-1 mb-2">Graphic Designer</h4></a>
							<ul class="icon-card mb-0 mt-1 grid-card-mode rsp-detail-hearticon">
																	<li class="mb-info-job-post"><span class="fz-11 icons mt-0 text-primary"><i class="fa fa-folder text-muted mr-1"></i>Arts / Graphic... </span></li>
																																	<li class="mb-info-job-post"><span class="fz-11 icons text-primary"><i class="fa fa-clock-o text-muted mr-1"></i>Phnom Penh </span></li>
																									
<li class="mb-info-job-post"><span class="fz-11 icons text-primary"><i class="fa fa-calendar-check-o text-muted mr-1"></i>2 week ago</span></li>
								<li class="mb-info-job-post hearticon-l">
									<div class="rating-stars d-inline-flex">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center sm  lg-icon-35 hearticon-l cursor-default  ">
				<i class="fa fa-heart fa-heart-6067   "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

					<span class="line-h-text count_favourite sm_count_favourite_6067 text-primary "> 0 Favourite(s)</span>
		
	</div>
								</li>
							 </ul>
							 <p class="mb-0 mt-2">1.&nbsp;&nbsp; Responsibilities·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Plan and schedule projects design to meet date line·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Wor...</p>
						</div>
					</div>
				</div>

				<div class="card-footer pt-2 pb-2">
					<div class="item-card9-footer rps-info-flex">
					   <div class="max-size-mt align-items-center mb-3 mb-md-0 mt-auto posted">
						  <div class="fz-11">
															<a href="https://jobboom.asia/company/cogetel-ltd" class="text-muted mb-1">
									<i class="fa fa-building-o text-muted mr-1"></i>
									Cogetel Ltd
								</a>
														<small class="fz-11 d-block text-muted" cursor-default="">
								<i class="fa fa-calendar-times-o text-muted mr-1"></i>
								Closing Date: 
								22-08-2022
							</small>
						  </div>
					   </div>
					   <div class="float-right ml-auto">
						<div class="rating-stars d-inline-flex" onclick="addDeleteFavorite(this)" data-url="" data-id="6067" data-type="position" data-method="post" data-method6067="post">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center lg  ">
				<i class="fa fa-heart fa-heart-6067  "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

		
	</div>
					   </div>
					</div>
				 </div>
			</div>
		</div>
			<div class="col-lg-6 col-md-3 col-sm-12 col-xl-4" id="wrap_job_post">
			<div class="card overflow-hidden h-company-card-95">
									
														
				<div id="wrap_job_post">
					<div class="horizintal_card">
						<div class="item-card9-img border-bottom grd-card-w" id="grd-rps">
							<div class="item-card9-imgs p-lg-3 grd-rps-img position-page">
								<a href="javasctipt:void(0)"></a>
																	<img style="width:50%;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtOIV_SWwOC7zVayHXcQjJYB6MiwBsbZQ1q7o3R8Jmia9kGAl5w8orVuaS_opvS3lfUzQ&usqp=CAU" alt="Backend Team Leader" class="m-auto image-size-company rounded-circle1 border-0">
															</div>
						</div>
					</div>
					<div class="card-body">
						<div class="item-card9 min-h-233 cursor-click" onclick="jobClick(this)" data-url="https://jobboom.asia/job/cogetel-ltd-backend-team-leader">
							<a href="javasctipt:void(0)" class="text-dark mt-2"><h4 class="font-weight-semibold mt-1 mb-2">Backend Team Leader</h4></a>
							<ul class="icon-card mb-0 mt-1 grid-card-mode rsp-detail-hearticon">
																	<li class="mb-info-job-post"><span class="fz-11 icons mt-0 text-primary"><i class="fa fa-folder text-muted mr-1"></i>Computer Progra... </span></li>
																																	<li class="mb-info-job-post"><span class="fz-11 icons text-primary"><i class="fa fa-clock-o text-muted mr-1"></i>Phnom Penh </span></li>
																									
<li class="mb-info-job-post"><span class="fz-11 icons text-primary"><i class="fa fa-calendar-check-o text-muted mr-1"></i>2 week ago</span></li>
								<li class="mb-info-job-post hearticon-l">
									<div class="rating-stars d-inline-flex">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center sm  lg-icon-35 hearticon-l cursor-default  ">
				<i class="fa fa-heart fa-heart-6072   "></i>

				<!-- Count favourite under react heart -->
				
			</div>
		</div>

					<span class="line-h-text count_favourite sm_count_favourite_6072 text-primary "> 0 Favourite(s)</span>
		
	</div>
								</li>
							 </ul>
							 <p class="mb-0 mt-2">➢ Release services/apps and Development management and planning.➢ Database Design and Analysis....</p>
						</div>
					</div>
				</div>

				<div class="card-footer pt-2 pb-2">
					<div class="item-card9-footer rps-info-flex">
					   <div class="max-size-mt align-items-center mb-3 mb-md-0 mt-auto posted">
						  <div class="fz-11">
															<a href="https://jobboom.asia/company/cogetel-ltd" class="text-muted mb-1">
									<i class="fa fa-building-o text-muted mr-1"></i>
									Cogetel Ltd
								</a>
														<small class="fz-11 d-block text-muted" cursor-default="">
								<i class="fa fa-calendar-times-o text-muted mr-1"></i>
								Closing Date: 
								22-08-2022
							</small>
						  </div>
					   </div>
					   <div class="float-right ml-auto">
						<div class="rating-stars d-inline-flex" onclick="addDeleteFavorite(this)" data-url="" data-id="6072" data-type="position" data-method="post" data-method6072="post">
		<div class="rating-stars-container mr-1">
			<div class="rating-star text-center lg  ">
				<i class="fa fa-heart fa-heart-6072  "></i>

				<!-- Count favourite under react heart -->
				
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
						</div>
													<!-- <div class="center-block text-center">
								<a href="javascript:void(0);" class="btn btn-primary btn-job btn-show-more" data-nextpage="https://jobboom.asia/position?search=&amp;limit=12&amp;sort_by=&amp;from=&amp;to=&amp;page=2" onclick="btnShowMoreJob(this)">Show More</a>
							</div>
											</div> -->
                                            
				</div>
			</div>
		</div>
        
	</div>
    <hr>
</section>



</body>
</html>