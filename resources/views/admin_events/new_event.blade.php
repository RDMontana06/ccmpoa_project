<div class="modal fade" id="newEventModal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel1">New Event</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="storeEvents" method="post" onsubmit="show()" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col mb-3">
							<label for="name" class="form-label">Event Name</label>
							<input type="text" id="name" name="name" class="form-control" placeholder="Enter Event Name"
								value="{{ old('name') }}" required />
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="col mb-3">
								<label for="date" class="form-label">Date</label>
								<input class="form-control" type="datetime-local" id="date" name="date" min="{{ today() }}"
									value="{{ old('date') }}"required />
							</div>
						</div>
						<div class="col-lg-6">
							<div class="col mb-3">
								<label for="expDate" class="form-label">Expiry Date</label>
								<input class="form-control" type="datetime-local"  value="{{ old('expiry_date') }}" id="expiry_date" name="expiry_date" required />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="col mb-3">
								<label for="desc" class="form-label">Description</label>
								<textarea class="form-control" value="{{ old('description') }}" id="description"
								name="description" rows="3" required ></textarea>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="col mb-3">
								<label for="address" class="form-label">Address</label>
								<textarea class="form-control" id="address" name="address" rows="3" required>{{ old('address') }}</textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<label for="formFileMultiple" class="form-label">Cover Photo (Dimension: 1600x460)</label>
							<input class="form-control" id="feed-upload-input-2" type="file" name="cover_photo" accept=".png, .jpg, .jpeg">
						</div>

					</div>
					<hr>
					<div class="row">
						<div class="col-lg-6">
							<label for="organizer" class="form-label">Organizer Name</label>
							<input type="text" id="organizer" name="organizer_name" value="{{ old('organizer_name') }}" class="form-control"
								placeholder="Enter Name" required />
						</div>
						<div class="col-lg-6">
							<label for="organizer_email" class="form-label">Organizer Email</label>
							<input type="email" id="organizer_email" name="organizer_email" value="{{ old('organizer_email') }}"
								class="form-control" placeholder="Enter email" required />
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<label for="organizer_number" class="form-label">Organizer Number</label>
							<input type="text" id="organizer_number" name="organizer_number" class="form-control"
								placeholder="e.g. 3234-433-232" value="{{ old('organizer_number') }}" />
						</div>
						<div class="col-lg-6">
							<label for="organizer_website" class="form-label">Organizer Website (Optional)</label>
							<input type="text" id="organizer_website" name="organizer_website" class="form-control"
								placeholder="www.website.com" value="{{ old('organizer_website') }}" />
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
					Close
				</button>
				<button type="submit" class="btn btn-primary">Save</button>
				</form>
			</div>
		</div>
	</div>
</div>
