<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $data = json_decode(file_get_contents(public_path('articles.json')), true);
        return view('welcome', ['data' => $data]);
    }
    public function show($index)
    {
        $data = json_decode(file_get_contents(public_path('articles.json')), true);
        
        // Проверяем, существует ли элемент по индексу
        if (!isset($data[$index])) {
            abort(404); // Если элемент не найден, возвращаем 404
        }
    
        $item = $data[$index];
    
        return view('gallery', ['item' => $item]);
    }
}