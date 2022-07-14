<div id="upload-crop-profile-modal" class="modal upload-crop-profile-modal is-xsmall has-light-bg">
    <div class="modal-background"></div>
    <div class="modal-content">

        <div class="card">
            <div class="card-heading">
                <h3>Upload Picture</h3>
                <!-- Close X button -->
                <div class="close-wrap">
                    <span class="close-modal">
                            <i data-feather="x"></i>
                        </span>
                </div>
            </div>
            <div class="card-body">
                <label class="profile-uploader-box" for="upload-profile-picture">
                    <span class="inner-content">
                            <img src="assets/img/illustrations/profile/add-profile.svg" alt="">
                            <span>Click here to <br>upload a profile picture</span>
                    </span>
                    <input type="file" id="upload-profile-picture" accept="image/*">
                </label>
                <div class="upload-demo-wrap is-hidden">
                    <div id="upload-profile"></div>
                    <div class="upload-help">
                        <a id="profile-upload-reset" class="profile-reset is-hidden">Reset Picture</a>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button id="submit-profile-picture" class="button is-solid accent-button is-fullwidth raised is-disabled">Use Picture</button>
            </div>
        </div>

    </div>
</div>