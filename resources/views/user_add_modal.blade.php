<div class="modal fade" id="user_add_modal" tabindex="-1" aria-labelledby="user_add_modal_label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="user_add_modal_label">Add new user</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form method="post" enctype="multipart/form-data" id="user_add_form" name="user_add_form"
                action="{{ route('users.store') }}">
                @csrf
                @method('post')
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" placeholder="name" name="name">
                                <label for="name">Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" placeholder="email" name="email">
                                <label for="email">Email</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="phone" placeholder="phone" name="phone">
                                <label for="phone">Phone</label>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password" placeholder="password"
                                    name="password">
                                <label for="password">Password</label>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="designation" name="designation">
                                    <option value="Software Developer" selected>Software Developer</option>
                                    <option value="Frontend Developer">Frontend Developer</option>
                                    <option value="Full Stack Developer">Full Stack Developer</option>
                                </select>
                                <label for="designation">Select your designation</label>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="avatar" name="avatar">
                                <label class="input-group-text" for="avatar">Upload</label>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="user_add_btn">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
