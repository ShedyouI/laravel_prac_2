<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public $products = [
        ['id' => 1, 'title' => 'Товар 1', 'price' => 500, 'path' => 'img1.jpg'],
        ['id' => 2, 'title' => 'Товар 2', 'price' => 1500, 'path' => 'img2.jpg'],
        ['id' => 3, 'title' => 'Товар 3', 'price' => 800, 'path' => 'img3.jpg'],
        ['id' => 4, 'title' => 'Товар 4', 'price' => 2000, 'path' => 'img4.jpg'],
        ['id' => 5, 'title' => 'Товар 5', 'price' => 300, 'path' => 'img5.jpg'],
        ['id' => 6, 'title' => 'Товар 6', 'price' => 1200, 'path' => 'img6.jpg'],
        ['id' => 7, 'title' => 'Товар 7', 'price' => 900, 'path' => 'img7.jpg'],
        ['id' => 8, 'title' => 'Товар 8', 'price' => 2500, 'path' => 'img8.jpg'],
    ];

    public function showIndex()
    {
        return view('home');
    }

    public function showArray()
    {
        $array = $this->products;
        return view('array', compact('array'));
    }

    public function shuffleArray()
    {
        $array = $this->products;
        shuffle($array);
        return view('array', compact('array'));
    }

    public function sortArray()
    {
        $array = $this->products;
        usort($array, function($a, $b) {
            return $a['price'] <=> $b['price'];
        });
        return view('array', compact('array'));
    }

    public function filterArray()
    {
        $array = $this->products;
        $array = array_filter($array, function($item) {
            return $item['price'] > 1000;
        });
        return view('array', compact('array'));
    }
}