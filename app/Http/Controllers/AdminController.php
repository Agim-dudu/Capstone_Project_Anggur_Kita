<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Redirect;

class AdminController extends Controller
{
    /**
     * Menampilkan dashboard admin.
     */
    public function dashboard()
    {
        return view('admin.dashboard'); // Sesuaikan dengan nama file view yang sesuai
    }

    /**
     * Menampilkan daftar pengguna.
     */
    public function user()
    {
        // Logic untuk menampilkan daftar pengguna

        $users = User::all(); // Mengambil data pengguna dari database

        return view('admin.user', ['users' => $users]);
    }

    public function create() {
        return view('admin.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validateData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'province_id' => ['required', 'string', 'max:255'],
            'province' => ['required', 'string', 'max:255'],
            'city_id' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'postal_code' => ['required', 'string', 'max:255'],
        ]);

        User::create($validateData);

        return redirect()->route('user')->with('success', 'User berhasil ditambahkan');

    }

    public function edit(User $id) {
        return view('admin.edit',[
            'user' => $id,

        ]);
    }
    
    public function update(Request $request, User $user) {
        $validateData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'province_id' => ['required', 'string', 'max:255'],
            'province' => ['required', 'string', 'max:255'],
            'city_id' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'postal_code' => ['required', 'string', 'max:255'],
        ]);
    
        // Update user data
        $user->update($validateData);
    
        return redirect()->route('user')->with('success', 'User berhasil diupdate');
    }
    

    public function destroy($id)
    {
        // Temukan pengguna berdasarkan ID
        $user = User::find($id);

        // Jika pengguna ditemukan, hapus
        if ($user) {
            $user->delete();
            return Redirect::route('user')->with('success', 'User deleted successfully');
        } else {
            // Jika pengguna tidak ditemukan
            return Redirect::route('user')->with('error', 'User not found');
        }
    }
}
