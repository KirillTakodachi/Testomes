<?php

namespace App\Http\Controllers;

use http\Exception\InvalidArgumentException;
use Illuminate\Http\Request;

class ModalController extends Controller
{
    public function view()
    {
        return view('components.modal'); //view на компонент
    }

    public function show()
    {
        return view('layouts/app'); // view на основной вид
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
        ]);
        // Сохранение в бд или файл
//        file_put_contents('data.txt', "Username: {$request->username}, Email: {$request->email}\n", FILE_APPEND);

        return redirect()->route('home/index')->with('success', 'Данные успешно сохранены!');
    }
}
