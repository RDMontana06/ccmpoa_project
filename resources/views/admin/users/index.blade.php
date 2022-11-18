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
								<th>Profile Picture</th>
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
									<td width="10">
										<img src="{{ asset($user->profile_picture) }}" alt="Avatar" class="rounded-circle" width="50" />
									</td>
									<td>{{ $user->name }}</td>
									<td>{{ $user->phone_number }}</td>
									<td>{{ $user->email }}</td>
									<td>{{ $user->created_at }}</td>
									<td>{{ $user->role->role }}</td>
									<td>
										@if ($user->status == 1)
											<span class="badge bg-label-success me-1">Active</span>
										@else
											<span class="badge bg-label-danger me-1">Inactive</span>
										@endif
									</td>
									<td>
										<div class="dropdown">
											<button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
												<i class="bx bx-dots-vertical-rounded"></i>
											</button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
												<a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
											</div>
										</div>
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
