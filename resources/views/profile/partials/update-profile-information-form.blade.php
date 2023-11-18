<div class="card mb-4">
    <div class="card-header">Profile Information</div>
    <div class="card-body">
        <div class="large font-italic text-muted mb-4">Perbarui informasi profil dan alamat email akun Anda.</div>
        <form action="" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label class="small mb-1" for="inputUsername">Username</label>
                <input class="form-control" id="inputUsername" type="text">
            </div>
            <div class="mb-3">
                <label class="small mb-1" for="inputUsername">Email</label>
                <input class="form-control" id="inputUsername" type="text" value="{{$user->email}}">
            </div>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>
</div>