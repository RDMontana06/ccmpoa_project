<!-- Modal -->
<div class="modal fade" id="property-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">New Property</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="new-property" method="POST" onsubmit='show();' enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label class="label">Property Name</label>
								<input class="form-control" type="text" name='property_name' placeholder="Property Name" id="name"
									required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="label">Contact Person</label>
								<input class="form-control" type="text" placeholder="Name" name='contact_person' required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label class="label">Contact Number/Email</label>
								<input class="form-control" type="text" placeholder="Contact Number or Email" name='contact_number' required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="label">Description</label>
								<textarea name="description" id="description" cols="10" rows="5" class="form-control"
								 placeholder="Description" required></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label class="label">Price</label>
								<input class="form-control" type="number" placeholder="Price" name='price' id="price" required>

							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="label">Location</label>
								<input class="form-control" type="text" placeholder="Location" id="location" name='location' required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="label"> Cover Photo</label>
						<div class="input-group mb-3">
							<input type="file" class="form-control" name="image[]" accept="image/*" required multiple />
						</div>
					</div>

			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary" id="submitMarket">Save</button>
				</form>
			</div>
		</div>
	</div>
</div>
