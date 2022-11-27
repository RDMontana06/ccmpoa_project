<div class="modal fade" id="editEventModal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="editEventModal">New Event</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="updateEvents/" method="post" id="editForm" onsubmit="show()" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col mb-3">
							<label for="name" class="form-label">Name</label>
							<input type="text" id="ename" name="name" class="form-control" placeholder="Enter Event Name"
								required />
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="col mb-3">
								<label for="date" class="form-label">Date</label>
								<input class="form-control" type="datetime-local" id="edate" value="" name="date"
									min="" required />
							</div>
							<div class="col mb-3">
								<label for="desc" class="form-label">Description</label>
								<textarea class="form-control" value="" id="edescription" name="description" rows="3" required
								 maxlength="150"></textarea>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="col mb-3">
								<label for="expDate" class="form-label">Expiry Date</label>
								<input class="form-control" type="datetime-local" value="" id="eexpiry_date" name="expiry_date"
									required />
							</div>
							<div class="col mb-3">
								<label for="address" class="form-label">Address</label>
								<textarea class="form-control" id="eaddress" name="address" rows="3" required></textarea>
							</div>
						</div>
					</div>
					<div class="row imageUploaded">
						<label for="formFileMultiple" class="form-label">Cover Photo (Dimension: 1600x460)</label>
							<input class="form-control" type="file" name="cover_photo" accept=".png, .jpg, .jpeg" src="" onchange='upload_cover(this)' id="inputImage">
					</div>
					<img class="form-control img-thumbnail mx-auto d-block img-responsive" id="feed-upload" height='200px;' width='200px;'  name="">
					<hr>
					<div class="row">
						<div class="col-lg-6">
							<label for="organizer" class="form-label">Organizer Name</label>
							<input type="text" id="eorganizer" name="organizer_name" value="{{ old('organizer_name') }}" class="form-control"
								placeholder="Enter Name" required />
						</div>
						<div class="col-lg-6">
							<label for="organizer_email" class="form-label">Organizer Email</label>
							<input type="email" id="eorganizer_email" name="organizer_email" value="{{ old('organizer_email') }}"
								class="form-control" placeholder="Enter email" required />
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<label for="organizer_number" class="form-label">Organizer Number</label>
							<input type="text" id="eorganizer_number" name="organizer_number" class="form-control"
								placeholder="e.g. 3234-433-232" value="{{ old('organizer_number') }}" />
						</div>
						<div class="col-lg-6">
							<label for="organizer_website" class="form-label">Organizer Website (Optional)</label>
							<input type="text" id="eorganizer_website" name="organizer_website" class="form-control"
								placeholder="www.website.com" value="{{ old('organizer_website') }}" />
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
					Close
				</button>
				<button type="submit" class="btn btn-primary">Save Changes</button>
				</form>
			</div>
		</div>
	</div>
</div>
