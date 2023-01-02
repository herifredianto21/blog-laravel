<div>
    <form action="" method="post" wire:submit.prevent='changePassword()'>
        <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="" class="form-label">Current Password</label>
                    <input type="password" class="form-control" name="example-text-input" placeholder="Current password" wire:model='current_password'>
                    <span class="text-danger">@error('current_password') {{ $message }} @enderror</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="" class="form-label">New Password</label>
                    <input type="password" class="form-control" name="example-text-input" placeholder="New password" wire:model='new_password'>
                    <span class="text-danger">@error('new_password') {{ $message }} @enderror</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="" class="form-label">Confirm new password</label>
                    <input type="password" class="form-control" name="example-text-input" placeholder="Retype new password" wire:model='confirm_new_password'>
                    <span class="text-danger">@error('confirm_new_password') {{ $message }} @enderror</span>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Change password</button>
    </form>
</div>
