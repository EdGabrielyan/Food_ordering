<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class FoodController extends Controller
{
    public function index()
    {
        if (request()->has('asc')) {
            if (request()->asc == 'true') {
                $foods = Food::orderBy('price')->orderBy('name')->paginate(12);
                // orderBy('name') so that for those foods with same price, it will sort alphabetically by their name
            }
            if (request()->asc == 'false') {
                $foods = Food::orderBy('price', 'DESC')->orderBy('name')->paginate(12);
            }
        } else {
            $foods = Food::paginate(12);
        }
        return view('food.home',  ['foods' => $foods]);
    }

    public function filter($type)
    {
        $foods = Food::where('type', '=', $type);

        if (request()->has('asc')) {
            if (request()->asc == 'true') {
                $sorted = $foods->orderBy('price');
            }
            if (request()->asc == 'false') {
                $sorted = $foods->orderBy('price', 'DESC');
            }
        } else {
            $sorted = $foods;
        }
        return view('food.home',  ['foods' => $foods->paginate(12)]);
    }

    public function sortByPrice($type)
    {
        if ($type) {
            $foods = Food::orderBy('price')->paginate(12);
        } else {
            $foods = Food::orderByDesc('price')->paginate(12);
        }

        return view('food.home',  ['foods' => $foods]);
    }

    public function adminIndex()
    {
        $foods = Food::orderBy('id','desc')->paginate(10);
        return view('food.viewfood',  ['foods' => $foods]);
    }

    public function show($id)
    {
        $food = Food::findOrFail($id);
        return view('food.show', ['food' => $food]);
    }

    public function getForUpdate($id)
    {
        $food = Food::findOrFail($id);
        return view('food.updatefood', ['food' => $food]);
    }

    public function destroy($id)
    {
        $food = Food::findOrFail($id);
        $food->delete();
        return redirect('/food/viewfood');
    }

    public function create(Request $food)
    {
        $food->validate([
            'name' => 'required | unique:food',
            'description' => 'required',
            'price' => 'required',
            'type' => 'required',
            'picture' => 'required'
        ]);

        if ($food->hasFile('picture')) {
            $imagePath = $food->file('picture')->store('food_images', 'public');
            $food->picture = $imagePath;
        } else {
            return back()->withErrors(['picture' => 'File upload failed.']);
        }

        Food::create([
            'name' => $food->name,
            'description' => $food->description,
            'price' => $food->price,
            'type' => $food->type,
            'picture' => $food->picture,
        ]);

        return redirect('/food/viewfood')->with('success', 'Food item added successfully!');
    }

    public function update(Request $food, $id)
    {
        $food->validate([
            'name' => [
                'required',
                 Rule::unique('food')->ignore($id),
            ],
            'description' => 'required',
            'price' => 'required',
            'type' => 'required',
            'picture' => 'required'
        ]);
        Food::where('id', $id)->update([
            'name' => $food['name'],
            'description' => $food['description'],
            'price' => $food['price'],
            'type' => $food['type'],
            'picture' => $food['picture'],
        ]);
        return redirect('/food/viewfood');
    }
}
