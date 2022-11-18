<div class="modal fade" id="approveModal{{ $acctRequest->id }}" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel2">Appprove Account</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="approveRequest/{{ $acctRequest->id }}" method="post">
					@csrf
					<div class="row">
						<label for="defaultSelect" class="form-label">Select Role</label>
						<select id="defaultSelect" name='role' class="form-select">
							@foreach ($roles as $role)
								<option value='{{ $role->id }}'>{{ $role->role }}</option>
							@endforeach
						</select>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
							Close
						</button>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>
				</form>

			</div>
		</div>
	</div>
