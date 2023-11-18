<!-- views/profile/partials/delete-password-form.blade.php -->

<div class="card mb-4 mb-xl-0">
    <div class="card-header">Delete Password</div>
    <div class="card-body">
        <form action="{{ route('profile.destroy') }}" method="POST">
            @method('delete')
            @csrf
            <!-- Password Input -->
            <input type="password" id="password" name="password" class="form-control mb-4" placeholder="Password" equired>

            <!-- Delete Account Button -->
            <button class="btn btn-danger" type="submit">Delete Account</button>
        </form>
    </div>
</div>
