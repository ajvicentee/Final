<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />
    <link rel="stylesheet" href="styled.css" />
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <title>Barangay Dashboard</title>
  </head>
  <body>
		<input type="checkbox" id="nav-toggle">
		<div class="sidebar">
			<div class="sidebar-brand">
				<h2><span class="lab la-accusoft"></span><span> Barangay Balumpare</span></h2>
                <h2><span>Manila City, Philippines</span></h2>
			</div>
			
			<div class="sidebar-menu">
				<ul>
					<li>
						<a href="dash.html" class="active"><span class="las la-home"></span>
						<span>Dashboard</span></a>
					</li>
					<li>
						<a href="Barangay Info.html"><span class="las la-users"></span>
						<span>Resident Information</span></a>
					</li>
					<li>
						<a href="Barangay Blotter.html"><span class="las la-clipboard-list"></span>
						<span>Blotter Records</span></a>
					</li>
					<li>
						<a href="Barangay Schedules.html"><span class="las la-calendar"></span>
						<span>Settlement Schedules</span></a>
					</li>
					<li>
						<a href=""><span class="las la-certificate"></span>
						<span>Certificate Insurance</span></a>
					</li>
					<li>
						<a href=""><span class="las la-circle"></span>
						<span>Accounts</span></a>
					</li>
					<li>
						<a href=""><span class="las la-cog"></span>
						<span>Barangay Config</span></a>
					</li>
				</ul>
			</div>
		</div>
		
		<div class="main-content">
			<header>
					<h2>
						<label for="nav-toggle">
							<span class="las la-bars"></span>
						</label>
						Dashboard
					</h2>
					<div class="user-wrapper">
						<img src="kpop.jpg" width="40px" height="40px" alt="">
						<div>
							<h4>Albert - Jonniel T. Vicente</h4>
							<small>Member</small>
						</div>
					</div>
			</header>
			<main>
				<div class="cards">
					<div class="card-single">
						<div>
							<h1>1,012</h1>
							<span>Total Registered Population</span>
						</div>
						<div>
							<span class="las la-users"></span>
						</div>
					</div>
					<div class="card-single">
						<div>
							<h1>79</h1>
							<span>Male</span></span>
						</div>
						<div>
							<span class="las la-male"></span>
						</div>
					</div>
					<div class="card-single">
						<div>
							<h1>124</h1>
							<span>Female</span>
						</div>
						<div>
							<span class="las la-female"></span>
						</div>
					</div>
					<div class="card-single">
						<div>
							<h1>894</h1>
							<span>REGISTERED VOTERS</span>
						</div>
						<div>
							<span class="las la-vote-yea"></span>
						</div>
					</div>
				</div>
				
				<div class="recent-grid">
					<div class="projects">
						<div class="card">
							<div class="card-header">
								<h3>Puroks/Areas</h3>
								
								<button>See all <span class="las la-arrow-down"></span></button>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table width="100%">
									<thead>
											<tr>
												<td>Area Name</td>
												<td>Area Count</td>
												<td>Status</td>
											</tr>
									</thead>
									<tbody>
										<tr>
											<td>UI/UX Design</td>
											<td>UI team</td>
											<td>
												<span class="status purple"></span>
												review
											</td>
										</tr>
										<tr>
											<td>Web Development</td>
											<td>Frontend</td>
											<td>
												<span class="status pink"></span>
												in progress
											</td>
										</tr>
										<tr>
											<td>ushop app</td>
											<td>Mobile team</td>
											<td>
												<span class="status orange"></span>
												pending
											</td>
										</tr>
										<tr>
											<td>UI/UX Design</td>
											<td>UI team</td>
											<td>
												<span class="status purple"></span>
												review
											</td>
										</tr>
										<tr>
											<td>Web Development</td>
											<td>Frontend</td>
											<td>
												<span class="status pink"></span>
												in progress
											</td>
										</tr>
										<tr>
											<td>ushop app</td>
											<td>Mobile team</td>
											<td>
												<span class="status orange"></span>
												pending
											</td>
										</tr>
									</tbody>
								</table>
								</div>
							</div>
						</div>
					</div>
					<div class="customers">
						<div class="card">
							<div class="card-header">
								<h3>Barangay Officials </h3>
								
								<button>See all <span class="las la-arrow-down"></span></button>
							</div>
							<div class="card-body">
								<div class="customer">
									<div class="info">
										<img src="kpop.jpg" width="40px" height="40px" alt="">
										<div>
											<h4>KC Pabilonia</h4>
											<small>Mayor</small>
										</div>
									</div>
									<div class="contact">
										<span class="las la-user-circle"></span>
										<span class="las la-comment"></span>
										<span class="las la-phone"></span>
									</div>
								</div>
								<div class="customer">
									<div class="info">
										<img src="kpop.jpg" width="40px" height="40px" alt="">
										<div>
											<h4>Albert Vicente</h4>
											<small>Vice Mayor</small>
										</div>
									</div>
									<div class="contact">
										<span class="las la-user-circle"></span>
										<span class="las la-comment"></span>
										<span class="las la-phone"></span>
									</div>
								</div>
								<div class="customer">
									<div class="info">
										<img src="kpop.jpg" width="40px" height="40px" alt="">
										<div>
											<h4>Alexander E. Palacio</h4>
											<small>Brgy. Captain</small>
										</div>
									</div>
									<div class="contact">
										<span class="las la-user-circle"></span>
										<span class="las la-comment"></span>
										<span class="las la-phone"></span>
									</div>
								</div>
								<div class="customer">
									<div class="info">
										<img src="kpop.jpg" width="40px" height="40px" alt="">
										<div>
											<h4>Alexander E. Palacio</h4>
											<small>Secretary</small>
										</div>
									</div>
									<div class="contact">
										<span class="las la-user-circle"></span>
										<span class="las la-comment"></span>
										<span class="las la-phone"></span>
									</div>
								</div>
								<div class="customer">
									<div class="info">
										<img src="kpop.jpg" width="40px" height="40px" alt="">
										<div>
											<h4>Alexander E. Palacio</h4>
											<small>Head Kagawad</small>
										</div>
									</div>
									<div class="contact">
										<span class="las la-user-circle"></span>
										<span class="las la-comment"></span>
										<span class="las la-phone"></span>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
  </body>
</html>