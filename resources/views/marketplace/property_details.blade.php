<!-- Modal -->
<div class="modal fade" id="property-details{{ $marketplace->id }}" tabindex="-1" role="dialog"
	aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Property Details</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-6">
						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								@foreach ($marketplace->attachment as $attachment)
									<div class="carousel-item active">
										<img src="{{ asset($attachment->attachment) }}" class="d-block w-100 h-100" alt="...">
									</div>
								@endforeach
							</div>
							<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
					<div class="col-md-6">
						<h4>{{ $marketplace->property_name }}</h4>
						<hr>
						<p><b>Description: </b> {{ $marketplace->description }}</p>
						<hr>
						<p><b>Price: </b> ${{ number_format($marketplace->price, 2) }}</p>
						<hr>
						<p><b>Contact Person: </b> {{ $marketplace->contact_person }}</p>
						<hr>
						<p><b>Contact Number: </b>{{ $marketplace->contact_number }}</p>
						<hr>
						<p><b>Location: </b> <a href='https://www.google.com/maps/place/{{ $marketplace->location }}' id='google_map_data'
								target='_blank'>{{ $marketplace->location }}</a></p>
					</div>
				</div>


			</div>
		</div>
	</div>
</div>
