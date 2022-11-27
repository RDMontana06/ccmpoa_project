<div id="new-event-modal" class="modal new-event-modal is-medium has-light-bg">
	<div class="modal-background"></div>
	<div class="modal-content">

		<div class="card">
			<div class="card-heading">
				<h3>New Event Form</h3>
				<!-- Close X button -->
				<div class="close-wrap">
					<span class="close-modal">
						<i data-feather="x"></i>
					</span>
				</div>
			</div>
			<div class="card-body">
				@if (count($errors) > 0)
					@foreach ($errors->all() as $error)
						<div class="notification is-danger is-light">
							{{ $error }}
						</div>
					@endforeach
				@endif
				<!-- Placeholder -->
				<form action="storeEvents" method="post" onsubmit="show()" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="form-panel">
						<div class="field">
							<label>Event Name</label>
							<div class="control">
								<input type="text" class="input" name="name" value="{{ old('name') }}" placeholder="Enter event name"
									required>
							</div>
						</div>
						<div class="columns is-multiline is-mobile">
							<div class="column is-half">
								<div class="field">
									<label>Date</label>
									<div class="control">
										<input type="datetime-local" name="date" value="{{ old('date') }}" class="input" required>
									</div>
								</div>
								<div class="field">
									<label>Description</label>
									<div class="control">
										<textarea class="textarea" name="description"  placeholder="e.g. description" required>{{ old('description') }}</textarea>
									</div>
								</div>
							</div>
							<div class="column is-half">
								<div class="field">
									<label>Expiry Date</label>
									<div class="control">
										<input type="datetime-local" name="expiry_date" value="{{ old('expiry_date') }}" class="input">
									</div>
								</div>
								<div class="field">
									<label>Address</label>
									<div class="control">
										<textarea class="textarea" name="address"  placeholder="e.g. New York City" required>{{ old('address') }}</textarea>
									</div>
								</div>
							</div>
						</div>
						{{-- <div class="field">
							<label>Files</label>
							<div class="control">
								<input class="input" id="feed-upload-input-2" type="file" name="file[]" accept=".png, .jpg, .jpeg" required
									multiple>
							</div>
						</div> --}}
            <div class="field">
							<label>Cover Photo</label>
							<div class="control">
								<input class="input" id="feed-upload-input-2" type="file" name="cover_photo" accept=".png, .jpg, .jpeg">
							</div>
						</div>
						<hr>
						<div class="columns is-mobile">
							<div class="column is-half">
								<div class="field">
									<label>Organizer Name</label>
									<div class="control">
										<input type="text" class="input" name="organizer_name" value="{{ old('organizer_name') }}"
											placeholder="Enter your name" required>
									</div>
								</div>
							</div>
							<div class="column is-half">
								<div class="field">
									<label>Organizer Email</label>
									<div class="control">
										<input type="email" class="input" name="organizer_email" value="{{ old('organizer_email') }}"
											placeholder="e.g. nodata@noemail.com" required>
									</div>
								</div>
							</div>
						</div>
						<div class="columns is-mobile">
            <div class="column is-falf">
								<div class="field">
									<label>Organizer Number (Optional)</label>
									<div class="control">
										<input type="text" class="input" name="organizer_number" value="{{ old('organizer_number') }}"
											placeholder="e.g. 3234-433-232">
									</div>
								</div>
							</div>
							<div class="column is-half">
								<div class="field">
									<label>Organizer Website (Optional)</label>
									<div class="control">
										<input type="url" class="input" name="organizer_website" value="{{ old('organizer_website') }}"
											placeholder="e.g. www.mywebsite.com">
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
			<div class="card-footer">
				<button type="submit" class="button is-solid is-success" id="saveEvent">Save</button>
			</div>
			</form>
		</div>

	</div>
</div>

<script>
	function show() {
		$(".pageloader").toggleClass("is-active");
		$("#saveEvent").prop("disabled", true);
	}
  // function preview(){
  //   var objectUrl = URL.createObjectURL(event.target.files[0]);
  //   console.log(objectUrl);
  //   frame.src=objectUrl;
  //   URL.revokeObjectURL(objectUrl);
  // }
</script>
