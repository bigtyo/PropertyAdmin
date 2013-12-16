<div class="container-fluid nav-hidden" id="content">
		
		<div id="main">
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>Dashboard</h1>
					</div>
					<div class="pull-right">
						
						<ul class="stats">
							<li class='satgreen'>
								<i class="icon-money"></i>
								<div class="details">
									<span class="big">324</span>
									<span>Properties Sold</span>
								</div>
							</li>
							<li class='lightred'>
								<i class="icon-calendar"></i>
								<div class="details">
                                                                    <span class="big"><?php date_format(new DateTime(), 'M d,Y') ?></span>
									<span>Wednesday, 13:56</span>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a href="more-login.html">Home</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="index.html">Dashboard</a>
						</li>
					</ul>
					<div class="close-bread">
						<a href="#"><i class="icon-remove"></i></a>
					</div>
				</div>
				<div class="row-fluid">
<!--					<div class="span6">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-bar-chart"></i>
									Visitor Overview
								</h3>
								<div class="actions">
									<a href="#" class="btn btn-mini content-refresh"><i class="icon-refresh"></i></a>
									<a href="#" class="btn btn-mini content-remove"><i class="icon-remove"></i></a>
									<a href="#" class="btn btn-mini content-slideUp"><i class="icon-angle-down"></i></a>
								</div>
							</div>
							<div class="box-content">
								<div class="statistic-big">
									<div class="top">
										<div class="left">
											<div class="input-medium">
												<select name="category" class='chosen-select' id="periodSelectVisit" data-nosearch="true">
													<option value="1">Visits</option>
													<option value="2">New Visits</option>
													<option value="3">Unique Visits</option>
													<option value="4">Pageviews</option>
												</select>
											</div>
										</div>
										<div class="right">
											8,195 <span><i class="icon-circle-arrow-up"></i></span>
										</div>
									</div>
									<div class="bottom">
										<div class="flot medium" id="flot-audience"></div>
									</div>
									<div class="bottom">
										<ul class="stats-overview">
											<li>
												<span class="name">
													Visits
												</span>
												<span class="value">
													11,251
												</span>
											</li>
											<li>
												<span class="name">
													Pages / Visit
												</span>
												<span class="value">
													8.31
												</span>
											</li>
											<li>
												<span class="name">
													Avg. Duration
												</span>
												<span class="value">
													00:06:41
												</span>
											</li>
											<li>
												<span class="name">
													% New Visits
												</span>
												<span class="value">
													67,35%
												</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>-->
					<div class="span12">
						<div class="box box-color satgreen box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-bar-chart"></i>
                                                                        Periodic Properties Sold <?php if(isset($officename)){echo $officename;} ?>
								</h3>
								<div class="actions">
									<a href="#" class="btn btn-mini content-refresh"><i class="icon-refresh"></i></a>
									<a href="#" class="btn btn-mini content-remove"><i class="icon-remove"></i></a>
									<a href="#" class="btn btn-mini content-slideUp"><i class="icon-angle-down"></i></a>
								</div>
							</div>
							<div class="box-content">
								<div class="statistic-big">
									<div class="top">
										<div class="left">
											<div class="input-medium">
												<select name="category" class='chosen-select' id="periodSelectSold" data-nosearch="true">
													<option value="1">Per-Week</option>
													<option value="2">Per-Month</option>
													<option value="3">Per-Semester</option>
													<option value="4">Per-Year</option>
												</select>
											</div>
										</div>
										<div class="right" id="increaseSold">
<!--											20% <span><i class="icon-circle-arrow-up"></i></span>-->
										</div>
									</div>
									<div class="bottom">
										<div class="flot medium" id="flot-hdd"></div>
									</div>
									<div class="bottom">
										<ul class="stats-overview">
<!--											<li>
												<span class="name">
													Increase from Last Period
												</span>
												<span class="value">
													20%
												</span>
											</li>
											<li>
												<span class="name">
													Avg. Closing per Agent
												</span>
												<span class="value">
													0.3
												</span>
											</li>
											<li>
												<span class="name">
													Avg. Closing %
												</span>
												<span class="value">
													30%
												</span>
											</li>-->
											
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span6">
						<div class="box box-color satblue box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-bar-chart"></i>
									New Listings
								</h3>
								<div class="actions">
									<a href="#" class="btn btn-mini content-refresh"><i class="icon-refresh"></i></a>
									<a href="#" class="btn btn-mini content-remove"><i class="icon-remove"></i></a>
									<a href="#" class="btn btn-mini content-slideUp"><i class="icon-angle-down"></i></a>
								</div>
							</div>
							<div class="box-content">
								<div class="statistic-big">
									<div class="top">
										<div class="left">
											<div class="input-medium">
												<select name="category" class='chosen-select' id="periodSelectListing" data-nosearch="true">
													<option value="1">Per-Week</option>
													<option value="2">Per-Month</option>
													<option value="3">Per-Semester</option>
													<option value="4">Per-Year</option>
												</select>
											</div>
										</div>
										<div class="right" id="increaseListing">
<!--											40% <span><i class="icon-circle-arrow-up"></i></span>-->
										</div>
									</div>
									<div class="bottom">
										<div class="flot medium" id="flot-newlisting"></div>
									</div>
									<div class="bottom">
										<ul class="stats-overview">
<!--											<li>
												<span class="name">
													Increase From Last Period
												</span>
												<span class="value">
													40%
												</span>
											</li>
											<li>
												<span class="name">
													Avg. New Listing This Period
												</span>
												<span class="value">
													12.4
												</span>
											</li>
											<li>
												<span class="name">
													% Increase Avg. New Listing
												</span>
												<span class="value">
													15%
												</span>
                                                                                        </li>-->
											
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="span6">
						<div class="box box-color satgreen box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-bar-chart"></i>
									Periodic Properties Sold (Global)
								</h3>
								<div class="actions">
									<a href="#" class="btn btn-mini content-refresh"><i class="icon-refresh"></i></a>
									<a href="#" class="btn btn-mini content-remove"><i class="icon-remove"></i></a>
									<a href="#" class="btn btn-mini content-slideUp"><i class="icon-angle-down"></i></a>
								</div>
							</div>
							<div class="box-content">
								<div class="statistic-big">
									<div class="top">
										<div class="left">
											<div class="input-medium">
												<select name="category" class='chosen-select' id="periodSelectSoldGlobal" data-nosearch="true">
													<option value="1">Per-Week</option>
													<option value="2">Per-Month</option>
													<option value="3">Per-Semester</option>
													<option value="4">Per-Year</option>
												</select>
											</div>
										</div>
										<div class="right" id="increaseSoldGlobal">
<!--											20% <span><i class="icon-circle-arrow-up"></i></span>-->
										</div>
									</div>
									<div class="bottom">
										<div class="flot medium" id="flot-global"></div>
									</div>
									<div class="bottom">
										<ul class="stats-overview" id="sumglobal">
<!--											<li>
												<span class="name">
													Increase from Last Period
												</span>
												<span class="value increase">
													20%
												</span>
											</li>
											<li>
												<span class="name">
													Avg. Closing per Agent
												</span>
												<span class="value closing">
													0.3
												</span>
											</li>
											<li>
												<span class="name">
													Avg. Closing %
												</span>
												<span class="value closingavg">
													30%
												</span>
											</li>-->
											
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                                
				
				
				<div class="row-fluid">
					
					<div class="span12">
						<div class="box box-color box-bordered green">
							<div class="box-title">
								<h3><i class="icon-bullhorn"></i>Feeds</h3>
								<div class="actions">
									<a href="#" class="btn btn-mini custom-checkbox checkbox-active">Automatic refresh<i class="icon-check-empty"></i></a>
								</div>
							</div>
							<div class="box-content nopadding scrollable" data-height="400" data-visible="true">
								<table class="table table-nohead" id="randomFeed">
									<tbody>
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
                                <div class="row-fluid">
					
					<div class="span12">
						<div class="box box-color box-bordered green">
							<div class="box-title">
								<h3><i class="icon-bullhorn"></i>Dokumen terbaru</h3>
								<div class="actions">
									<a href="#" class="btn btn-mini custom-checkbox checkbox-active">Automatic refresh<i class="icon-check-empty"></i></a>
								</div>
							</div>
							<div class="box-content nopadding scrollable" data-height="400" data-visible="true">
								<table class="table table-nohead" >
									<tbody id="randomDoc">
                                                                            
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
  <script src="https://www.google.com/jsapi"></script>
  <script src="<?php echo base_url; ?>js/gadash-1.0.js"></script>
  <script src="https://apis.google.com/js/client.js?onload=gadashInit"></script>
  <script>
    // Configure these parameters before you start.
    var API_KEY = 'AIzaSyDcAoVqCimkKElAVwPfRsiu2Va_zJh2qwo';
    var CLIENT_ID = '735347781882.apps.googleusercontent.com';
    var TABLE_ID = 'ga:80129823';
    // Format of table ID is ga:xxx where xxx is the profile ID.

    gadash.configKeys({
      'apiKey': API_KEY,
      'clientId': CLIENT_ID
    });

    // Create a new Chart that queries visitors for the last 30 days and plots
    // visualizes in a line chart.
    var chart1 = new gadash.Chart({
      'type': 'LineChart',
      'divContainer': 'flot-audience',
      'last-n-days':30,
      'query': {
        'ids': TABLE_ID,
        'metrics': 'ga:visitors',
        'dimensions': 'ga:date'
      },
      'chartOptions': {
        height:600,
        title: 'Visits in January 2011',
        hAxis: {title:'Date'},
        vAxis: {title:'Visits'},
        curveType: 'function'
      }
    }).render();
  </script>