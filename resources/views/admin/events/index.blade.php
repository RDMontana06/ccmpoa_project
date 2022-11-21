@extends('layouts.admin_layout')

@section('content')
	<div class="container-fluid flex-grow-1 container-p-y">
		<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Events</h4>

		<!-- Basic Bootstrap Table -->

		<div class="card">
			<h5 class="card-header">Events
      <button></button>
      </h5>
			<div class="card-body">
				<div class="table-responsive text-nowrap">
					<table class="table table-striped" id="userTbl">
						<thead>
							<tr>
								<th>Name</th>
								<th>Description</th>
								<th>Address</th>
								<th>Event Date</th>
								<th>Status</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody class="table-border-bottom-0">
							@foreach ($events as $event)
								<tr>
									<td>{{ $event->name }}</td>
									<td>{{ $event->description }}</td>
									<td>{{ $event->address }}</td>
									<td>{{ $event->date }}</td>
									<td>
										@if ($event->status == 1)
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
