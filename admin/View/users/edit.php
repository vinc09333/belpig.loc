<?php $this->theme->header(); ?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col page-title">
                    <h3><?= $user->email ?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-9">
                    <form id="formUser">
                        <input type="hidden" name="id" id="formUserId" value="<?= $user->id ?>" />
                        <div class="form-group">
                            <label for="formEmail">Title</label>
                            <input type="text" name="email" class="form-control" id="formEmail" value="<?= $user->email ?>" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="formPassword">Title</label>
                            <input type="password" name="password" class="form-control" id="formPassword" value="<?= $user->password ?>" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="formRole">Title</label>
                            <input type="text" name="role" class="form-control" id="formRole" value="<?= $user->role ?>" placeholder="Role">
                        </div>
                    </form>
                </div>
                <div class="col-3">
                    <div>
                        <p>Update this page</p>
                        <button type="submit" class="btn btn-primary" onclick="user.update()">
                            Update
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php $this->theme->footer(); ?>