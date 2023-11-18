<div class="card mb-4">
    <div class="card-header">Update Password</div>
    <div class="card-body">
        <div class="large font-italic text-muted mb-4">Pastikan akun Anda menggunakan kata sandi yang panjang dan acak agar tetap aman.</div>
        <form action="{{ route('password.update') }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label class="small mb-1" for="current_password">Current Password</label>
                <input class="form-control" id="current_password" name="current_password" type="password" autocomplete="current-password">
            </div>
            <div class="mb-3">
                <label class="small mb-1" for="password">New Password</label>
                <input class="form-control" id="password" name="password" type="password" autocomplete="new-password">
            </div>
            <div class="mb-3">
                <label class="small mb-1" for="password_confirmation">Confirm Password</label>
                <input class="form-control" id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password">
            </div>

            <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>
</div>