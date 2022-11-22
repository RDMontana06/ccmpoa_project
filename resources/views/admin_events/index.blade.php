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
									<td id="tdId{{ $event->id }}">
										@if ($event->status == 'Active')
											<span id="status{{ $event->id }}" class="badge bg-label-success me-1">Active</span>
										@elseif($event->status == 'Inactive')
											<span id="status{{ $event->id }}" class="badge bg-label-danger me-1">Inactive</span>
										@else
											<span id="status{{ $event->id }}" class="badge bg-label-warning me-1">Cancelled</span>
										@endif
									</td>
									<td>
									@if ($event->status == 'Active')
										<div class="dropdown" id="dropdown{{ $event->id }}">
											<button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
												<i class="bx bx-dots-vertical-rounded"></i>
											</button>
												<div class="dropdown-menu">
												<a class="dropdown-item edit" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
												<a class="dropdown-item" onclick='return cancel({{ $event->id }})' href="javascript:void(0);"><i class="bx bx-trash me-1" ></i> Cancel</a>
												{{-- <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-file me-1"></i> View Details</a> --}}
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
			console.log(events);
			table.on('click', '.edit', function() {
				$('.images').remove();
				$tr = $(this).closest('tr');
				if ($($tr).hasClass('child')) {
					$tr = $tr.prev('.parent');
				}

				var data = table.row($tr).data();
				console.log(data[0]);
				var obj = events.find(event => event.id == data[0]);
				console.log("Objects "+ obj.attachment);
				// var attachment =
				if(obj.attachment){
					obj.attachment.forEach(function(element) {
						// code
						console.log("elem   " + element.file_name);
						$('.imageUploaded').append(appendDiv(element));
						
					});
				}
			

				$('#ename').val(obj.name);
				$('#eaddress').val(obj.address);
				$('#edate').val(obj.date);
				$("#edate").attr({
					"min" : obj.date,
				});
				$('#eexpiry_date').val(obj.expiration_date);
				$('#edescription').val(obj.description);
				$('#eorganizer').val(obj.organizer);
				$('#eorganizer_email').val(obj.organizer_email);
				$('#eorganizer_website').val(obj.organizer_website);

				$('#editForm').attr('action', 'updateEvents/' + obj.id)
				$('#editEventModal').modal('show');
			})
		})
		function appendDiv(elem){
			console.log(elem);
			var data = "<div class='col-md-4 col-lg-4 images' id='file"+elem.id+"'>"
			data += '<img class="img-thumbnail img-responsive" style="box-shadow: 0 3px 10px rgb(0 0 0 / 0.2); min-height:50px; width:100%;"  src="{{URL::asset("/")}}/'+ elem.file_name +' " />';
			data += "<button type='button' class='form-control btn btn-danger btn-block' id="+elem.id+" onclick='remove("+elem.id+")'>Remove image</button> ";
			data += "<input type='text' name='filesAttach[]' value="+elem.id+" id='editA"+elem.id+"' hidden>";
			data += "</div>"
			return data;
		}
		function remove(idx) {
			console.log(idx);
			 document.querySelector("#file" + idx).innerHTML = "";
		}
		function cancel(id) {
			// alert('IDIDIIDDI');
			Swal.fire({
				title: 'Cancel this event',
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
						url: "cancelEvent/" + id,
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
								'Cancelled!',
								'Event has been cancelled!',
								'success'
							).then(function() {
								var newlabel = document.createElement("span");
								newlabel.setAttribute("class", "badge bg-label-warning me-1");
								newlabel.innerHTML = "Cancelled";
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
