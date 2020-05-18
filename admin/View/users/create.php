<?php $this->theme->header(); ?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col page-title">
                    <h3>Create user</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-9">
                    <form id="formUser">
                        <div class="form-group">
                            <label for="formEmail">Email</label>
                            <input type="text" name="email" class="form-control" id="formEmail" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="formPassword">Password</label>
                            <input type="password" name="password" class="form-control" id="formPassword" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="formRole">Role</label>
                            <input type="text" name="role" class="form-control" id="formRole" placeholder="Role">
                        </div>
                    </form>
                </div>
                <div class="col-3">
                    <div>
                        <p>Publish this page</p>
                        <button type="submit" class="btn btn-primary" onclick="user.add()">
                            Publish
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php $this->theme->footer(); ?>