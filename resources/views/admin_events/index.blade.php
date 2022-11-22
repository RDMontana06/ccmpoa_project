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
								<th hidden></th>
								<th>Name</th>
								<th>Address</th>
								<th>Event Date</th>
								<th>Expiration Date</th>
								<th>Status</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody class="table-border-bottom-0">
							@foreach ($events as $event)
								<tr>
								<td hidden>{{ $event->id }}</td>
									<td>{{ $event->name }}</td>
									<td>{{ $event->address }}</td>
									<td>{{ date('F j, Y, g:i a', strtotime($event->date)) }}</td>
									<td>{{ date('F j, Y, g:i a', strtotime($event->expiration_date)) }}</td>
									<td>
										@if ($event->status == 'Active')
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
			var events = {!! json_encode($events->toArray()) !!};
			table.on('click', '.edit', function() {

				$tr = $(this).closest('tr');
				console.log('tr ' + $tr);
				if ($($tr).hasClass('child')) {
					console.log('if condition');
					$tr = $tr.prev('.parent');
					console.log($tr);
				}

				var data = table.row($tr).data();
				var obj = events.find(event => event.id == data[0]);
				console.log(obj);
				// var attachment =
				obj.attachment.forEach(function(element) {
					// code
					console.log(element);
					$('.imageUploaded').append(appendDiv(element));
					
				});

				$('#ename').val(obj.name);
				$('#eaddress').val(obj.address);
				// $('#edate').val(data[3]);
				// $('#eexpiry_date').val(data[4]);
				// $('#edescription').val(data[9]);
				// $('#eorganizer').val(data[10]);
				// $('#eorganizer_email').val(data[11]);
				// $('#eorganizer_website').val(data[12]);

				$('#editForm').attr('action', 'updateEvents/' + obj.id)
				$('#editEventModal').modal('show');
			})
		})
		function appendDiv(elem){
			console.log(elem);
			var data = "<div class='col-lg-4'>"
			data += "<img class='img-thumbnail' style='box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);' src='{{URL::asset('/')}}/"+ elem.file_name +" ' />";
			data += "<button type='button' class='form-control btn btn-danger btn-block' id="+elem.id+" onclick='remove("+elem.id+")'>Remove image</button> ";
			data += "</div>"
			return data;
		}
		function remove(idx) {
			
		}
	</script>
@endsection
