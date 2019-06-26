<h1>USER: EDIT</h1>
<div id="form">
    <form action="<?= URL.'user/editSave/'.$this->user['id'] ?>" method="post">
        <label>Username</label>
        <input type="text" name="username" value="<?= $this->user['username'] ?>" /><br/>
        <label>Password</label>
        <input type="password" name="password"/><br/>
        <label>Role</label>
        <select name="role">
            <option value="default" <?= $isSelected = ($this->user['role'] == 'default') ? 'selected' : '' ?>>Default</option>
            <option value="admin" <?= $isSelected = ($this->user['role'] == 'admin') ? 'selected' : '' ?>>Admin</option>
            <option value="owner" <?= $isSelected = ($this->user['role'] == 'owner') ? 'selected' : '' ?>>Owner</option>
        </select>
        <br/>
        <label>&nbsp</label>
        <input type="submit"/>
    </form>
</div>