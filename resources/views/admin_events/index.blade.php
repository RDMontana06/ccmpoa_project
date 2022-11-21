@extends('layouts.admin_layout')

@section('content')
	<div class="container-fluid flex-grow-1 container-p-y">
		<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Events</h4>

		<!-- Basic Bootstrap Table -->

		<div class="card">
			<h5 class="card-header">Events
				<button type="button" class="btn btn-icon btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#newEventModal"
					title="Add Event">
					<span class="tf-icons bx bx-plus-circle"></span>
				</button>
			</h5>
			<div class="card-body">
				@if ($errors->any())
					@foreach ($errors->all() as $error)
						<div class="alert alert-danger d-flex align-items-center" role="alert">
							<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
								<use xlink:href="#exclamation-triangle-fill" />
							</svg>
							<div>
								{{ $error }}
							</div>
						</div>
					@endforeach
				@endif
				<div class="table-responsive">
					<table class="table table-striped" id="eventTbl">
						<thead>
							<tr>
								<th hidden>id</th>
								<th>Name</th>
								<th>Address</th>
								<th hidden></th>
								<th hidden></th>
								<th>Event Date</th>
								<th>Expiration Date</th>
								<th>Files</th>
								<th>Status</th>
								<th hidden></th>
								<th hidden></th>
								<th hidden></th>
								<th hidden></th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody class="table-border-bottom-0">
							@foreach ($events as $event)
								<tr>
									<td hidden>{{ $event->id }}</td>
									<td>{{ $event->name }}</td>
									<td>{{ $event->address }}</td>
									<td hidden>{{ date($event->date) }}</td>
									<td hidden>{{ date($event->expiration_date) }}</td>
									<td>{{ date('F j, Y, g:i a', strtotime($event->date)) }}</td>
									<td>{{ date('F j, Y, g:i a', strtotime($event->expiration_date)) }}</td>
									<td>
										@foreach ($event->attachment as $attachment)
											<a href="{{ url($attachment->file_name) }}" target="_blank" rel="noopener noreferrer">
												<img src="{{ url($attachment->file_name) }}" alt="" srcset="" class="img-thumbnail"
													width="50%">
											</a>
										@endforeach

									</td>
									<td>
										@if ($event->status == 'Active')
											<span class="badge bg-label-success me-1">Active</span>
										@else
											<span class="badge bg-label-danger me-1">Inactive</span>
										@endif
									</td>
									<td hidden>{{ $event->description }}</td>
									<td hidden>{{ $event->organizer }}</td>
									<td hidden>{{ $event->organizer_email }}</td>
									<td hidden>{{ $event->organizer_website }}</td>
									<td>
										<div class="dropdown">
											<button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
												<i class="bx bx-dots-vertical-rounded"></i>
											</button>
											<div class="dropdown-menu">
												<a class="dropdown-item edit" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
												<a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
												<a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-file me-1"></i> View Details</a>
											</div>
										</div>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			@include('admin_events.new_event')
			@include('admin_events.edit_event')
		</div>
		<!--/ Basic Bootstrap Table -->
	</div>
@endsection
@section('eventScript')
	<script>
		// Edit Event
		$(document).ready(function() {

			var table = $('#eventTbl').DataTable({
				select: true,
			});
			console.log(table);

			table.on('click', '.edit', function() {
				$tr = $(this).closest('tr');
				console.log('tr ' + $tr);
				if ($($tr).hasClass('child')) {
					console.log('if condition');
					$tr = $tr.prev('.parent');
					console.log($tr);
				}

				var data = table.row($tr).data();
				console.log(data);

				$('#ename').val(data[1]);
				$('#eaddress').val(data[2]);
				$('#edate').val(data[3]);
				$('#eexpiry_date').val(data[4]);
				$('#edescription').val(data[8]);
				$('#eorganizer').val(data[9]);
				$('#eorganizer_email').val(data[10]);
				$('#eorganizer_website').val(data[11]);

				$('#editForm').attr('action', 'updateEvents/' + data[0])
				$('#editEventModal').modal('show');
			})
		})

		// Disable Event
	</script>
@endsection
