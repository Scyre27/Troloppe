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
	
	$res=mysqli_query($con,$sql);
?>

<div class="content pb-0">
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col-xl-7 content-center">
					<h4 class="box-title">RESIDENTIAL </h4>
				</div>
				<div class="col-xl-5">
					<div class="row mr-0">
						<h4 class="box-link col-xl-6">
							<a class="btn btn-info float-right text-white" href="add_property.php">ADD PROPERTY</a>
						</h4>
						<h4 class="box-link col-xl-6">
							<a class="btn btn-warning float-right text-white" href="add_property.php">UPDATE PROPERTY</a>
						</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">			
		<div class="col-lg-3 col-md-6 col-12">
			<div class="box">
				<div class="box-header">
					<h4 class="box-title">Search</h4>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
						  <div class="form-group">
							<select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
							  <option selected="selected">Select Property</option>
							  <option>For Sale</option>
							  <option>For Rent</option>
							</select>
						  </div>
						</div>
						<div class="col-lg-12 col-md-12 col-12">
							<div class="form-group">
								<select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
								  <option selected="selected">Property Type</option>
								  <option>Apartments</option>
								  <option>Houses</option>
								  <option>Commercial</option>
								  <option>Garages</option>
								  <option>Plots</option>
								</select>
							</div>
						</div>
						<!--<div class="col-lg-12 col-md-12 col-12">
							<div class="form-group">
								<select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
								  <option selected="selected">Select States</option>
								  <option>Alaska</option>
								  <option>California</option>
								  <option>Colorado</option>
								</select>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-12">
							<div class="form-group">
								<select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
								  <option selected="selected">Select City</option>
								  <option>New York</option>
								  <option>Los Angeles</option>
								  <option>Chicago</option>
								  <option>Houston</option>
								  <option>Phoenix</option>
								  <option>San Antonio</option>
								  <option>Queens</option>
								</select>
							</div>
						</div>-->
						<div class="col-lg-12 col-md-12 col-12">
							<div class="form-group">
								<select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
								  <option selected="selected">Bed Room</option>
								  <option>1</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								</select>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-12">
							<div class="form-group">
								<select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
								  <option selected="selected">Bath Room</option>
								  <option>1</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								</select>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-12">
							<div class="form-group">
								<button type="submit" class="btn btn-rounded btn-success">Search</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-9 col-md-9 col-12 pl-0">
			<div class="box">
				<div class="box-body">
						<div class="row">
							<?php 
								$i = 1;
								while($i <= 10)
								{
									while($row = mysqli_fetch_assoc($res))
									{?>
										<div class="col-lg-6 col-md-12 col-12">
											<div class="box">
												<div class="box-body text-center p-0">
													<img class="img-fluid mb-10" src="images/properties/Bridge_1/IMG_5539.JPG" alt="img">
												</div>
												<div class="box-body p-0">
													<div class="property-bx p-20">
														<div>
															<h5 class="text-success mt-0 mb-20">₦<?php echo number_format($row['Sale_Price'])?></h5>
															<h3 class="mt-0"><a href="#" class="text-primary"><?php echo $row['Property_Name']?></a></h3>
															<p class="text-muted"><i class="mdi mdi-pin"></i><?php echo $row['Property_Address']?></p>
															<p class="text-muted mb-0"><?php echo $row['No_Of_Bed']."BHK";?></p>
														</div>
														<!--<div class="mt-15 font-size-18">
															<a href="#" title="Square Feet" class="mr-15"><i class="mdi mdi-view-dashboard mr-10"></i><span>158</span></a>
															<a href="#" title="Bedroom" class="mr-15"><i class="mdi mdi-hotel mr-10"></i><span><?php echo $row['No_Of_Bed']?></span></a>
															<a href="#" title="Parking space" class="mr-15"><i class="mdi mdi-car-taxi mr-10"></i><span>2</span></a>
															<a href="#" title="Garages" class="mr-15"><i class="mdi mdi-home mr-10"></i><span>24H</span></a>
														</div>-->
													</div>
												</div>
											</div>
										</div>
									<?php 
									}
									$i++;
								} ?>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
	require('includes/footer.inc.php');
?>