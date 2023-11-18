<!-- views/profile/partials/profile-picture.blade.php -->

<div class="card mb-4 mb-xl-2">
    <div class="card-header">Profile Picture</div>
    <div class="card-body text-center">

        <img class="img-account-profile rounded-circle mb-2"
            src="{{ asset('assets/storage/img/avatar.png') }}" alt>

        <form action="{{ route('update.avatar') }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <label class="small mb-1" for="avatar">JPG or PNG no larger than 2 MB</label>
            <div class="row gx-3 mb-3">
                <input class="form-control" id="avatar" name="avatar" type="file">
                <button class="btn btn-primary" type="submit">Upload new image</button>
            </div>
        </form>
    </div>
</div>
