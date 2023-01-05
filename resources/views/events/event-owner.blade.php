<div id="owner-modal" class="modal owner-modal is-small has-light-bg">
	<div class="modal-background"></div>
	<div class="modal-content" style="overflow:hidden;">

		<div class="card">
			<div class="card-heading">
				<h3>Event Owner Details</h3>
				<!-- Close X button -->
				<div class="close-wrap">
					<span class="close-modal">
						<i data-feather="x"></i>
					</span>
				</div>
			</div>
			<div class="card-body">
					<div class='card equal-height'>
						<div class="card-image has-text-centered">
								<figure class="image is-64x64 is-inline-block">
										<img class="is-rounded" src="" alt="" id="profile" width="100px" onerror="this.src='{{url('https://via.placeholder.com/1600x460')}}';">
								</figure>
						</div>
						<div class='card-content has-text-centered'>
							<span class="fa fa-user"></span> Event Created By: <span id="name"></span><br>
							<strong><span class="fa-solid fa-envelope"></span></strong> <a href = "" id="emailId"><span id="email"></span></a><br>
							<hr>
							<div class="title is-6"> Organizer Details</div>
							<span class="fa fa-user"></span> Name: <span id="org_name"></span><br>
							<strong><span class="fa-solid fa-envelope"></span></strong> <a href = "" id="org_emailId"><span id="email"></span></a><br>
							<strong><span class="fa-solid fa-phone"></span></strong> <span id="org_contact"></span><br>
							<strong><span class="fa-solid fa-globe"></span></strong> <span id="org_website"></span><br>
						</div>
					</div>
			 		{{-- <img src="" alt="" id="profile" width="100px" onerror="this.src='{{url('https://via.placeholder.com/1600x460')}}';"> --}}
					
        {{-- <div class="columns">
          <div class="column is-two-fifths">
           
          </div>
          <div class="column">
            
          </div>
          
        </div> --}}
        

			</div>
		</div>

	</div>
</div>
