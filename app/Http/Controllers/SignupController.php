<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function index()
    {
        return view('signup');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'age' => 'required|integer|min:10|max:99',
            'goal' => 'required|string|max:255',
        ]);

        // Нормализация номера телефона (удаление всех нецифровых символов)
        $phone = preg_replace('/[^0-9]/', '', $validated['phone']);

        // Проверяем, существует ли пользователь с таким номером телефона
        $user = User::where('phone', $phone)->first();

        // Если пользователя нет, создаем нового
        if (!$user) {
            $user = User::create([
                'name' => $validated['name'],
                'phone' => $phone,
                'password' => Hash::make('password')
            ]);
        }

        // Создаем запись на тренировку
        Training::create([
            'user_id' => $user->id,
            'age' => $validated['age'],
            'goal' => $validated['goal'],
        ]);

        return redirect()->route('home')->with('success', 'Вы успешно записались на тренировку!');
    }
}
