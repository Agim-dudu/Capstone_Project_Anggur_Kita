<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\AvatarUpdateRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\ProfileAddressUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(): View
    {
        // Ambil data kota dari RajaOngkir atau sumber lainnya
        $responseProvince = Http::withHeaders([
            'key' => env('RAJAONGKIR_API_KEY'),
        ])->get('https://api.rajaongkir.com/starter/province');
        // dd($responseProvince->json());

        $responseCity = Http::withHeaders([
            'key' => env('RAJAONGKIR_API_KEY'),
        ])->get('https://api.rajaongkir.com/starter/city');
        // dd($response->json());

        $province = $responseProvince['rajaongkir']['results'];
        $cities = $responseCity['rajaongkir']['results'];
        
        $user = Auth::user();
        return view('profile.edit', [
            'user' => $user,
            'provinces' => $province,
            'cities' => $cities,
        ]);
    }

    public function updateAddress(ProfileAddressUpdateRequest $request)
    {
        $user = $request->user();

        $user->update($request->validated());

        return redirect()->back()->with('success', 'Update Address updated successfully.');
    }




    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();

        if ($user) {
            $user->fill($request->validated());

            if ($user->isDirty('email')) {
                $user->email_verified_at = null;
            }

            $user->save();

            return redirect()->back()->with('success', 'Username & Email updated successfully.');
        }

        return redirect()->back()->with('error', 'User not authenticated.');
    }


    public function updateAvatar(AvatarUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();

        if ($user) {
            // Delete the previous profile picture if it exists
            if ($user->avatar) {
                Storage::delete('public/avatars/' . $user->avatar);
            }

            // Save the new profile picture with a unique name
            $avatarName = time() . '.' . $request->file('avatar')->getClientOriginalExtension();
            Storage::putFileAs('public/avatars', $request->file('avatar'), $avatarName);

            // Update user's avatar path in the database
            $user->avatar = $avatarName;
            $user->save();

            return redirect()->back()->with('success', 'Avatar updated successfully.');
        }

        return redirect()->back()->with('error', 'User not authenticated.');
    }



    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
