<?php
	require('includes/top.inc.php');
	isAdmin();

	$sql="SELECT
		PD.Property_Name
		, PD.Property_Code
		, PD.Property_Address
		, PD.Property_Grade
		, PD.Year_Built
		, BD.Builder_Name
		, BD.Developer
		, PT.Sector
		, PT.`Type`
		, PT.Sub_Type
		, AD.Total_Units
		, AD.Available_Units
		, AD.No_Of_Bed
		, AD.Sale_Price
		, AD.Lease_Price
		, AD.Service_Charge 
	FROM property_detail PD
	INNER JOIN builder_detail BD ON BD.BuilderId = PD.Contractor_Id
	INNER JOIN accomodation_detail AD ON AD.PropertyId = PD.PropertyId
	INNER JOIN property_type PT ON PT.TypeId = AD.TypeId";
	
	$Sql = "SELECT 
		  OrderId
		, First_Name
		, Last_Name
		, Order_Code
		, PT.Type
		, AT.Action_Type
		, OD.Order_Date
		, OD.Order_Status
	FROM 
	`order_details` OD
	INNER JOIN property_type PT ON PT.TypeId = OD.Property_Type_Id
	INNER JOIN action_type AT ON AT.ActionId = OD.Action_Type_Id";
	
	$res=mysqli_query($con, $Sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">DASHBOARD </h4>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-3 col-12">
							<div class="box box-body pb-10 bl-4 border-info pull-up">
							  <h6 class="text-uppercase">ON GOING</h6>
							  <div class="d-flex justify-content-between">
								<span class=" font-size-30">154</span>
								<span class="font-size-30 text-info mdi mdi-city"></span>
							  </div>
							</div>
						</div>
						<div class="col-md-3 col-12">
							<div class="box box-body pb-10 bl-4 border-primary pull-up">
							  <h6 class="text-uppercase">COMPLATE</h6>
							  <div class="d-flex justify-content-between">
								<span class=" font-size-30">412</span>
								<span class="font-size-30 text-primary mdi mdi-seal"></span>
							  </div>
							</div>
						</div>
						<div class="col-md-3 col-12">
							<div class="box box-body pb-10 bl-4 border-danger pull-up">
							  <h6 class="text-uppercase">COMMERCIAL</h6>
							  <div class="d-flex justify-content-between">
								<span class=" font-size-30">125</span>
								<span class="font-size-30 text-danger mdi mdi-city"></span>
							  </div>
							</div>
						</div>
						<div class="col-md-3 col-12">
							<div class="box box-body pb-10 bl-4 border-warning pull-up">
							  <h6 class="text-uppercase">RESIDENTIAL</h6>
							  <div class="d-flex justify-content-between">
								<span class=" font-size-30">256</span>
								<span class="font-size-30 text-warning mdi mdi-home"></span>
							  </div>
							</div>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-xl-4 col-12">
							<div class="box">
								<div class="box-header">DAILY ENQUIRY</div>
								<div class="box-body">
									<canvas id="dailyEnquiry" style="width:100%;max-width:700px"></canvas>
								</div>
								
							</div>
						</div>
						<div class="col-xl-4 col-12">
							<div class="box">
								<div class="box-header">BOOKING STATUS</div>
								<div class="box-body">
									<canvas id="myChart" style="width:100%;max-width:700px"></canvas>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-12">
							<div class="box">
								<div class="box-header">REVENUE</div>
								<div class="box-body">
									<canvas id="revenueChart" style="width:100%;max-width:700px"></canvas>
								</div>
							</div>
						</div>
					</div>
				</div>		
				<div class="card-body">
					<div class="box">
						<div class="box-header">PROPERTY OVERVIEW</div>
						<div class="box-body">
							<div class="table-stats order-table ov-h">
							  <table class="table ">
								 <thead>
									<tr>
									   <th class="serial">#</th>
									   <th width="25%">Customer Name</th>
									   <th width="10%">Order ID</th>
									   <th width="10%">Property</th>
									   <th width="15%">Type</th>
									   <th width="20%">Date</th>
									   <th width="10%">Status</th>
									   <th width="5%"></th>
									</tr>
								 </thead>
								 <tbody>
									<?php 
									$i=1;
									while($row=mysqli_fetch_assoc($res)){?>
									<tr>
									
										<td class="serial"><?php echo $i?></td>
										<td><?php echo $row['First_Name']." ".$row['Last_Name']?></td>
										<td><?php echo $row['Order_Code']?></td>
										<td><?php echo $row['Type']?></td>
										<td><?php echo $row['Action_Type']?></td>
										<td><?php echo $row['Order_Date']?></td>
										<td>
											<?php
												if($row['Order_Status']==1)
												{
													echo "<span class='badge badge-complete'>Paid</span>&nbsp;";
												}
												else if($row['Order_Status']==2)
												{
													echo "<span class='badge badge-pending'>Pending</span>&nbsp;";
												}
												else
												{
													echo "<span class='badge badge-danger'>Failed</span>&nbsp;";
												}
											?>
										</td>
										<td>
											<a href="javascript:void(0)" class="text-dark" title=""><i class="ti-trash"></i></a>
										</td>
									</tr>
									<?php $i++;} ?>
								 </tbody>
							  </table>
						   </div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	require('includes/footer.inc.php');
?>
<script>
	var xValues = ["By Email", "By Phone", "On Site", "By Agent"];
	var yValues = [10, 30, 90, 70];
	var barColors = ["#40a2ed", "#25b5b5", "#e84a50", "#fad050"];

	new Chart("myChart", {
	  type: "bar",
	  data: {
		labels: xValues,
		datasets: [{
		  backgroundColor: barColors,
		  data: yValues
		}]
	  },
	  options: {
		legend: {display: false}
	  }
	});
	
	var xValues = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'];
	var yValues = [10, 41, 35, 51, 49, 62, 69, 91, 148];

	new Chart("revenueChart", {
	  type: "line",
	  data: {
		labels: xValues,
		datasets: [{
		  fill: false,
		  lineTension: 0,
		  backgroundColor: "rgba(0,0,255,1.0)",
		  borderColor: "#3c4567",
		  data: yValues
		}]
	  },
	  options: {
		legend: {display: false}
	  }
	});
	
	//Daily Enquiry
	
	var xValues = ["By Email", "By Phone", "On Site", "By Agent"];
	var yValues = [10, 30, 90, 70];
	var barColors = ["#40a2ed", "#25b5b5", "#e84a50", "#fad050"];

	new Chart("dailyEnquiry", {
	  type: "doughnut",
	  data: {
		labels: xValues,
		datasets: [{
		  backgroundColor: barColors,
		  data: yValues
		}]
	  },
	  options: {
		title: {
		  display: false,
		  text: "World Wide Wine Production 2018"
		}
	  }
	});
	
</script>