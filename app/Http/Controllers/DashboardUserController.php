<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $currentUserId = auth()->user()->id;
        $users = User::where('id', '!=', $currentUserId)
                     ->latest()
                     ->paginate(10); // Adjust the number of items per page as needed
        return view('dashboard.user.index', ['users' => $users]);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4|confirmed',
         ]);

         //dd($validated);

         User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
         ]);
         return redirect('/dashboard-user')->with('pesan', 'Berhasil Mendaftarkan Akun!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect('/dashboard-user')->with('error', 'User not found.');
        }

        return view('dashboard.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email,' . $id,
        ]);

        $user = User::find($id);
        $user->name = $validated['name'];
        $user->email = $validated['email'];

        if ($request->filled('password')) {
            $validatedPassword = $request->validate([
                'password' => 'nullable|min:4|confirmed',
            ]);
            $user->password = Hash::make($validatedPassword['password']);
        }

        $user->save();

        return redirect('/dashboard-user')->with('pesan', 'User updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect('dashboard-user')->with('pesan', 'Data berhasil dihapus');
    }
}
