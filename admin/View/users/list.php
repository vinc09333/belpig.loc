<?php $this->theme->header(); ?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col page-title">
                    <h3>
                        Pages
                        <a href="/admin/users/create/">Create user</a>
                    </h3>
                </div>
            </div>

            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>Hash</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($users as $user): ?>
                <tr>
                    <th scope="row" >
                        <?= $user->id ?>
                        <input type="hidden" name="id" id="userId" value="<?= $user->id ?>" />
                    </th>
                    <td>
                        <a href="/admin/users/edit/<?= $user->id ?>">
                            <?= $user->email ?>
                        </a>
                    </td>
                    <td>
                        <?= $user->password ?>
                    </td>
                    <td>
                        <?= $user->role ?>
                    </td>
                    <td>
                        <?= $user->hash ?>
                    </td>
                    <td>
                        <?= $user->date ?>
                    </td>
                    <td>
                        <button class="btn btn-danger" onclick="user.delete()">Delete</button>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>

<?php $this->theme->footer(); ?>