<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['houseid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit House</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php" enctype='multipart/form-data' >
				<input type="hidden" class="form-control" name="houseid" value="<?php echo $row['houseid']; ?>">

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Landlordid:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="lanid" value="<?php echo $row['lanid']; ?>" readonly>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Type:</label>
					</div>
					<div class="col-sm-10">
					     <select class="form-control" name="type" value="<?php echo $row['type']; ?>" >
                                <option value="apartment">apartment</option>
                                <option value="estate">estate</option>
                                <option value="storey">storeybuilding</option>
                                <option value="bungalow">bungalow</option>
                         </select>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Location:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name= "location" value="<?php echo $row['location']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Address:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name= "address" value="<?php echo $row['address']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Rooms:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name= "rooms" value="<?php echo $row['rooms']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Price:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name= "price" value="<?php echo $row['price']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Contact:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name= "landlordphone" value="<?php echo $row['landlordphone']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Description:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name= "description" value="<?php echo $row['description']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Image:</label>
					</div>
					<div class="col-sm-10">
					    <input type="file" class="form-control" name="images" id="image1" required >
						
					</div>
				</div>
				
				

				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['houseid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Property</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['type'].' '.$row['address']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?houseid=<?php echo $row['houseid']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>