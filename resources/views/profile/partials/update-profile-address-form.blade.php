<!-- views/profile/partials/profile-address-form.blade.php -->

<div class="card mb-4">
    <div class="card-header">Profile Address</div>
    <div class="card-body">
        <form action="{{ route('profile.address')}}" method="POST">
            @method('PUT')
            @csrf
            <div class="row gx-3 mb-3">
                <div class="col-md-6">
                    <label class="small mb-1" for="first_name">Nama Depan</label>
                    <input class="form-control" id="first_name" name="first_name" type="text" value="{{ $user->first_name }}">
                </div>

                <div class="col-md-6">
                    <label class="small mb-1" for="last_name">Nama Belakang</label>
                    <input class="form-control" id="last_name" name="last_name" type="text" value="{{ $user->last_name }}">
                </div>
            </div>

            <div class="row gx-3 mb-3">
                <div class="col-md-6">
                    <label class="small mb-1" for="phone">Nomer Telpon</label>
                    <input class="form-control" id="phone" name="phone" type="text" value="{{ $user->phone }}">
                </div>

                <div class="col-md-6">
                    <label class="small mb-1" for="postal_code">Code Pos</label>
                    <input class="form-control" id="postal_code" name="postal_code" type="text" value="{{ $user->postal_code }}">
                </div>
            </div>

            <div class="row gx-3 mb-3">
                <div class="col-md-6">
                    <label class="small mb-1" for="province_id">Provinsi</label>
                    <select id="province_id" name="province_id" type="text" class="form-control">
                        <option value="{{ $user->province_id }}">{{ $user->province }}</option>
                        @foreach ($provinces as $province)
                        <option value="{{ $province['province_id'] }}">{{ $province['province'] }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="small mb-1" for="city_id">Kota</label>
                    <select id="city_id" name="city_id" type="text" class="form-control">
                        <option value="{{ $user->city }}">{{ $user->city }}</option>
                        @foreach ($cities as $city)
                        <option value="{{ $city['city_id'] }}">{{ $city['city_name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <input class="form-control" id="province" name="province" type="text" value="{{ $user->province }}" hidden>
                <input class="form-control" id="city" name="city" type="text" value="{{ $user->city }}" hidden>
            </div>
            <div class="mb-3">
                <label class="small mb-1" for="address">Detail Alamat</label>
                
                <input class="form-control" id="address" name="address" type="text" value="{{ $user->address }}">
            </div>

            <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>
</div>
