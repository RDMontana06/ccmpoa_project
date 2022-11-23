@extends('layouts.admin_layout')

@section('content')
	<div class="container-fluid flex-grow-1 container-p-y">
		<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> User Accounts</h4>

		<!-- Basic Bootstrap Table -->

		<div class="card">
			<h5 class="card-header">Users</h5>
			<div class="card-body">
				<div class="table-responsive text-nowrap">
					<table class="table table-striped" id="userTbl">
						<thead>
							<tr>
								{{-- <th>Profile Picture</th> --}}
								<th>Name</th>
								<th>Contact #</th>
								<th>Email</th>
								<th>Date Created</th>
								<th>Role</th>
								<th>Status</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody class="table-border-bottom-0">
							@foreach ($users as $user)
								<tr>
									{{-- <td width="10">
										<img src="{{ asset($user->profile_picture) }}" alt="Avatar" class="rounded-circle" width="50" />
									</td> --}}
									<td>{{ $user->name }}</td>
									<td>{{ $user->phone_number }}</td>
									<td>{{ $user->email }}</td>
									<td>{{ $user->created_at }}</td>
									<td>{{ $user->role->role }}</td>
									<td id="tdId{{ $user->id }}">
										@if ($user->status == 1)
											<span id="status{{ $user->id }}" class="badge bg-label-success me-1">Active</span>
										@else
											<span id="status{{ $user->id }}" class="badge bg-label-danger me-1">Inactive</span>
										@endif
									</td>
									<td>
									@if ($user->status == 1)
									<div class="dropdown" id="dropdown{{ $user->id }}">
											<button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
												<i class="bx bx-dots-vertical-rounded"></i>
											</button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
												<a class="dropdown-item" href="javascript:void(0);" onclick="disable({{$user->id }})"><i class="bx bx-trash me-1"></i> Disable</a>
											</div>
										</div>
									@endif
										
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!--/ Basic Bootstrap Table -->
	</div>
@endsection
@section('usersScript')
<script>
function disable(id) {
			// alert('IDIDIIDDI');
			Swal.fire({
				title: 'Disable this account',
				text: "Are you sure about this?",
				icon: 'question',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes'
			}).then((result) => {
				if (result.isConfirmed) {
					document.getElementById("myDiv").style.display = "block";
					$.ajax({
						url: "diableAccount/" + id,
						method: "POST",
						data: {
							id: id
						},
						headers: {
							'X-CSRF-TOKEN': '{{ csrf_token() }}'
						},
						success: function(data) {
							document.getElementById("myDiv").style.display = "none";
							swal.fire(
								'Diabled!',
								'Account has been disabled!',
								'success'
							).then(function() {
								var newlabel = document.createElement("span");
								newlabel.setAttribute("class", "badge bg-label-danger me-1");
								newlabel.innerHTML = "Inactive";
								// Append new label
								document.querySelector('#tdId' + id).appendChild(newlabel);
								// Remove Elements
								document.querySelector('#status' + id).remove();
								document.querySelector('#dropdown' + id).remove();
								document.getElementById(id).remove();

							});
						}
					})
				} else if (
					result.dismiss === Swal.DismissReason.cancel
				) {
					swal.fire(
						'Cancelled',
						'Event is safe',
						'error'
					)
				}
			})
		}
</script>
@endsection
