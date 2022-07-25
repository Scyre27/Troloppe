<?php
	require('includes/top.inc.php');
	isAdmin();
?>
<!-- .content -->
<div class="content pb-0">
	<div class="property">
	   <div class="row">
			<div class="col-12 col-xl-12 col-md-12 col-lg-12">
				<div class="box">
					<div class="box-header">
						<h4 class="box-title">Basic Information</h4>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Property Name">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Development Name">
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Property Location">
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Region">
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="LCDA">
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Plot Number">
								</div>
							</div>
							<div class="col-sm-8">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Street">
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Sector">
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Property Type">
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Property Sub-Type">
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Completion Status">
								</div>
							</div>
							<div class="col-sm-8">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Local Government">
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group mb-0">
									<div class="form-line">
										<textarea rows="4" class="form-control no-resize" placeholder="Property Description"></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="box-footer">
						<button type="button" class="btn btn-danger mr-1 waves-effect waves-light">
						  <i class="ti-trash"></i> Cancel
						</button>
						<button type="submit" class="btn btn-primary waves-effect waves-light">
						  <i class="ti-save-alt"></i> Save
						</button>
					</div>
				</div>
			</div>
			<div class="col-12 col-xl-12 col-md-12 col-lg-12">
				<div class="box">
					<div class="box-header">
						<h4 class="box-title">Developer Details</h4>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Developer">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Contractor">
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-12">
								<div class="form-group mb-0">
									<input type="text" class="form-control" placeholder="Facilities Manager">
								</div>
							</div>
						</div>							  
					</div>
					<div class="box-footer">
						<button type="button" class="btn btn-danger mr-1 waves-effect waves-light">
						  <i class="ti-trash"></i> Cancel
						</button>
						<button type="submit" class="btn btn-primary waves-effect waves-light">
						  <i class="ti-save-alt"></i> Save
						</button>
					</div>
				</div>
			</div>
			<div class="col-12 col-xl-12 col-md-12 col-lg-12">
				<div class="box">
					<div class="box-header">
						<h4 class="box-title">Property For</h4>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-sm-6">
								<div class="d-flex">
									<div class="radio mr-25">
										<input type="radio" name="radio1" id="radio1" value="option1" checked="">
										<label for="radio1">For Rent</label>
									</div>
									<div class="radio">
										<input type="radio" name="radio1" id="radio2" value="option2">
										<label for="radio2">For Sale</label>
									</div>									
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Price / Rent">
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<textarea rows="4" class="form-control no-resize" placeholder="Property Address"></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3 col-md-6">
								<div class="form-group mb-lg-0">
									<input type="text" class="form-control" placeholder="Bedrooms">
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="form-group mb-lg-0">
									<input type="text" class="form-control" placeholder="Square ft">
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="form-group mb-lg-0">
									<input type="text" class="form-control" placeholder="Car Parking">
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="form-group mb-0">
									<input type="text" class="form-control" placeholder="Year Built">
								</div>
							</div>
						</div>  
					</div>
					<div class="box-footer">
						<button type="button" class="btn btn-danger mr-1 waves-effect waves-light">
						  <i class="ti-trash"></i> Cancel
						</button>
						<button type="submit" class="btn btn-primary waves-effect waves-light">
						  <i class="ti-save-alt"></i> Save
						</button>
					</div>
				</div>
			</div>
			<div class="col-12 col-xl-12 col-md-12 col-lg-12">
				<div class="box">
					<div class="box-header">
						<h4 class="box-title">Dimensions</h4>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-lg-3 col-md-4 col-12">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Dining Room">
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-12">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Kitchen">
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-12">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Living Room">
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-12">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Master Bedroom">
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-12">
								<div class="form-group mb-0">
									<input type="text" class="form-control" placeholder="Bedroom 2">
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-12">
								<div class="form-group mb-0">
									<input type="text" class="form-control" placeholder="Bedroom 3">
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-12">
								<div class="form-group mb-0">
									<input type="text" class="form-control" placeholder="Bedroom 4">
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-12">
								<div class="form-group mb-0">
									<input type="text" class="form-control" placeholder="Other Room">
								</div>
							</div>
						</div>							  
					</div>
					<div class="box-footer">
						<button type="button" class="btn btn-danger mr-1 waves-effect waves-light">
						  <i class="ti-trash"></i> Cancel
						</button>
						<button type="submit" class="btn btn-primary waves-effect waves-light">
						  <i class="ti-save-alt"></i> Save
						</button>
					</div>
				</div>
			</div>
			<div class="col-12 col-xl-12 col-md-12 col-lg-12">
				<div class="box">
					<div class="box-header">
						<h4 class="box-title">General Amenities</h4>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-sm-12">
								<div class="checkbox d-inline-block mr-20">
									<input id="checkbox1" type="checkbox">
									<label for="checkbox1">Swimming pool</label>
								</div>
								<div class="checkbox d-inline-block mr-20">
									<input id="checkbox2" type="checkbox">
									<label for="checkbox2">Terrace</label>
								</div>
								<div class="checkbox d-inline-block mr-20">
									<input id="checkbox3" type="checkbox" checked="">
									<label for="checkbox3">Air conditioning</label>
								</div>
								<div class="checkbox d-inline-block mr-20">
									<input id="checkbox4" type="checkbox" checked="">
									<label for="checkbox4">Internet</label>
								</div>
								<div class="checkbox d-inline-block mr-20">
									<input id="checkbox5" type="checkbox">
									<label for="checkbox5">Balcony</label>
								</div>
								<div class="checkbox d-inline-block mr-20">
									<input id="checkbox6" type="checkbox">
									<label for="checkbox6">Cable TV</label>
								</div>
								<div class="checkbox d-inline-block mr-20">
									<input id="checkbox7" type="checkbox">
									<label for="checkbox7">Computer</label>
								</div>
								<div class="checkbox d-inline-block mr-20">
									<input id="checkbox8" type="checkbox" checked="">
									<label for="checkbox8">Dishwasher</label>
								</div>
								<div class="checkbox d-inline-block mr-20">
									<input id="checkbox9" type="checkbox" checked="">
									<label for="checkbox9">Near Green Zone</label>
								</div>
								<div class="checkbox d-inline-block mr-20">
									<input id="checkbox0" type="checkbox">
									<label for="checkbox0">Near Church</label>
								</div>
								<div class="checkbox d-inline-block mr-20">
									<input id="checkbox11" type="checkbox">
									<label for="checkbox11">Near Estate</label>
								</div>
								<div class="checkbox d-inline-block mr-20">
									<input id="checkbox12" type="checkbox">
									<label for="checkbox12">Cofee pot</label>
								</div>
							</div>
						</div>
					</div>
					<div class="box-footer">
						<button type="button" class="btn btn-danger mr-1 waves-effect waves-light">
						  <i class="ti-trash"></i> Cancel
						</button>
						<button type="submit" class="btn btn-primary waves-effect waves-light">
						  <i class="ti-save-alt"></i> Submit
						</button>
					</div>
				</div>
			</div>
		</div>
		<!-- /.content -->
	</div>
</div>
<?php
require('includes/footer.inc.php');
?>