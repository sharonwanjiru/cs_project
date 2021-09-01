<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php" enctype='multipart/form-data'>
			    <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Type:</label>
					</div>
					<div class="col-sm-10">
					     <select class="form-control" name="type">
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
						<input type="text" class="form-control" name="location" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Address:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="address" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Rooms:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="rooms" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Price:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="price" max="100000" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Contact:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="landlordphone" required>
					</div>
				</div>
		
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">FloorSize:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="floorsize" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Description:</label>
					</div>
					<div class="col-sm-10">
					    <textarea class="form-control" name="description" rows="3"></textarea>
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
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>