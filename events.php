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
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">EVENTS </h4>
				   <h4 class="box-link"><a href="manage_vendor_management.php">ADD EVENT</a> </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th class="serial">#</th>
							   <th width="2%">Property Name</th>
							   <th width="10%">Property Code</th>
							   <th width="5%">Year Built</th>
							   <th width="20%">Builder Name</th>
							   <th width="20%">Developer</th>
							   <th width="5%">Bed Rooms</th>
							   <th width="10%">Available Units</th>
							   <th width="10%">Sale Price</th>
							   <th width="18%"></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td class="serial"><?php echo $i?></td>
							   <td><?php echo $row['Property_Name']?></td>
							   <td><?php echo $row['Property_Code']?></td>
							   <td><?php echo $row['Year_Built']?></td>
							   <td><?php echo $row['Builder_Name']?></td>
							   <td><?php echo $row['Developer']?></td>
							   <td><?php echo $row['No_Of_Bed']?></td>
							   <td><?php echo $row['Available_Units']?></td>
							   <td><?php echo $row['Sale_Price']?></td>
							   <td>
								<?php
								/*if($row['status']==1){
									echo "<span class='badge badge-complete'><a href='?type=status&operation=deactive&id=".$row['id']."'>Active</a></span>&nbsp;";
								}else{
									echo "<span class='badge badge-pending'><a href='?type=status&operation=active&id=".$row['id']."'>Deactive</a></span>&nbsp;";
								}*/
									echo "<span class='badge badge-edit'><a href='manage_vendor_management.php?id=".$row['Property_Code']."'>Edit</a></span>&nbsp;";
									
									echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['Property_Code']."'>Delete</a></span>";
								
								?>
							   </td>
							</tr>
							<?php } ?>
						 </tbody>
					  </table>
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