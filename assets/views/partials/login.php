<form class="needs-validation" action="/" method="post" novalidate>
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" name="username" class="form-control" value="<?= $username ?>" required>
        <div class="invalid-feedback">
            Please enter a username.
        </div>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required>
        <div class="invalid-feedback">
            Please enter a valid password.
        </div>
    </div>
    <button class="btn btn-primary">Login</button>
</form>