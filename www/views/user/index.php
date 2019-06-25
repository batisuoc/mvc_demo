<h1>USER PAGE</h1>
<h3>ADD USER</h3>
<div id="form">
    <form action="<?= URL ?>user/create" method="post">
        <label>Username</label>
        <input type="text" name="username"/><br/>
        <label>Password</label>
        <input type="password" name="password"/><br/>
        <label>Role</label>
        <select name="role">
            <option value="default">Default</option>
            <option value="admin">Admin</option>
        </select>
        <br/>
        <label>&nbsp</label>
        <input type="submit"/>
    </form>
</div>
<h3>LIST USERS</h3>
<div id="listUser">
    <table>
        <?php foreach ($this->userList as $key => $value) { ?>
            <tr>
                <td><?= $value['id'] ?></td>
                <td><?= $value['username'] ?></td>
                <td><?= $value['role'] ?></td>
                <td><a href="<?= URL.'user/edit/'.$value['id'] ?>">Edit</a></td>
                <td><a href="<?= URL.'user/delete/'.$value['id'] ?>">Delete</a></td>
            </tr>
        <?php } ?>
    </table>
</div>