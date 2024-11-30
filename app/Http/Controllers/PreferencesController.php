<?php

namespace App\Http\Controllers;

use App\Models\Preferences;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;


class PreferencesController extends Controller
{
    use HasRoles;

    public function index()
    {
        $user = Auth::user();

        $favorites = Preferences::where('client_id', $user->id)
            ->with('product')
            ->get();

        return view('favorites.index', compact('favorites'));
    }

    public function destroy(Preferences $preference)
    {
        $preference->delete();
        return redirect()->route('favorites.index')->with('success', 'Product removed from favorites.');
    }
}
