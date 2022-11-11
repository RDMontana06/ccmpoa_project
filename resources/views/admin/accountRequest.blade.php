@extends('layouts.admin_layout')

@section('content')
	<div class="container-fluid flex-grow-1 container-p-y">
		<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account Requests</h4>

		<!-- Basic Bootstrap Table -->
		<div class="card">
			<h5 class="card-header">Account Requests</h5>
			<div class="card-body">
				<div class="table-responsive text-nowrap">
					<table class="table table-striped" id="acctReqTbl">
						<thead>
							<tr>
								<th>Email</th>
								<th>Message</th>
								<th>Date Requested</th>
								<th>Status</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody class="table-border-bottom-0">
							@foreach ($acctRequests as $acctRequest)
								<tr id="trId{{ $acctRequest->id }}">
									<td>{{ $acctRequest->email }}</td>
									<td>{{ $acctRequest->message }}</td>
									<td>{{ $acctRequest->created_at }}</td>
									<td id="statusTdId{{ $acctRequest->id }}">
										@if ($acctRequest->status == 'Approved')
											<span class="badge bg-label-success me-1">Approved</span>
										@elseif($acctRequest->status == 'Rejected')
											<span class="badge bg-label-danger me-1">Rejected</span>
										@else
											<span class="badge bg-label-warning me-1">Pending</span>
										@endif
									</td>
									<td>
										@if ($acctRequest->status == 'Pending')
											<div class="dropdown" id="dropdownTdAction{{ $acctRequest->id }}">
												<button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
													<i class="bx bx-dots-vertical-rounded"></i>
												</button>
												<div class="dropdown-menu" id="tdAction{{ $acctRequest->id }}" data-id="{{ $acctRequest->id }}">
													@if ($acctRequest->status == 'Pending')
														<a class="dropdown-item" id="{{ $acctRequest->id }}" href="#" onclick="approve(this.id)"><i
																class="bx bx-check me-1"></i>
															Approve</a>
														<a class="dropdown-item" id="{{ $acctRequest->id }}" href="#" onclick="reject(this.id)"><i
																class="bx bx-trash me-1"></i> Reject</a>
													@endif
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
@section('adminScripts')
	<script>
		function approve(id) {
			var element = document.getElementById('tdAction' + id);
			var dataID = element.getAttribute('data-id');
			console.log(id);
			console.log(dataID);
			Swal.fire({
				title: 'Are you sure?',
				text: "You won't be able to revert this!",
				icon: 'question',
				showCancelButton: true,
				confirmButtonColor: '#0f854f',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Approved'
			}).then((result) => {
				if (result.isConfirmed) {
					// alert(id);
					// return false;
					$.ajax({
						url: "approveRequest/" + id,
						method: "POST",
						data: {
							id: id
						},
						headers: {
							'X-CSRF-TOKEN': '{{ csrf_token() }}'
						},
						success: function(data) {
							console.log(data);
							Swal.fire(
								'Approved!',
								'Request has been approved.',
								'success'
							).then(function() {
								document.getElementById("statusTdId" + id).innerHTML =
									"<span class='badge bg-label-success me-1'>Approved</span>";
								document.querySelector('#dropdownTdAction' + id).remove();
							});
						}
					});

				}
			})
		}

		function reject(id) {
			var element = document.getElementById('tdAction' + id);
			var dataID = element.getAttribute('data-id');
			console.log(id);
			console.log(dataID);
			Swal.fire({
				title: 'Are you sure?',
				text: "You won't be able to revert this!",
				icon: 'question',
				showCancelButton: true,
				confirmButtonColor: '#0f854f',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Reject'
			}).then((result) => {
				if (result.isConfirmed) {
					$.ajax({
						url: "rejectRequest/" + id,
						method: "POST",
						data: {
							id: id
						},
						headers: {
							'X-CSRF-TOKEN': '{{ csrf_token() }}'
						},
						success: function(data) {
							console.log(data);
							Swal.fire(
								'Rejected!',
								'Request has been rejected.',
								'success'
							).then(function() {
								document.querySelector('#trId' + id).remove();
							});
						}
					});

				}
			})
		}
	</script>
@endsection
