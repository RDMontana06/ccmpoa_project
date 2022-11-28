<div id="edit-info" class="modal edit-info is-medium has-light-bg">
    <div class="modal-background"></div>
    <div class="modal-content">
        <div class="card">
            <div class="card-heading">
                <h3>Information</h3>
                <!-- Close X button -->
                <div class="close-wrap">
                    <span class="close-modal">
                        <i data-feather="x"></i>
                    </span>
                </div>
            </div>
            <div class="card-body">
                <form action="edit-information" method="POST" onsubmit='show_loading();' enctype="multipart/form-data" >
                    @csrf
                    <div class="field">
                        <label class="label">Studied At</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="School Name" value='@if($user->information){{$user->information->studied_at}}@endif' name='studied_at' required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">From</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Address" value='@if($user->information){{$user->information->place_from}}@endif' name='from' required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Lives In</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Address" name='lives_in' value='@if($user->information){{$user->information->lives_in}}@endif' required>
                        </div>
                    </div>
                    
            </div>

            <footer class="modal-card-foot">
                <button class="button is-success" type='submit'>Save changes</button>
                {{-- <button class="button">Cancel</button> --}}
            </footer>
         </form>
        </div>
    </div>
</div>