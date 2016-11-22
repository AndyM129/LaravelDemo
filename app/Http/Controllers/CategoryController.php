<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;

class CategoryController extends Controller {

    public function listView($categoryId) {
        $this->data['categories'] = Category::all();
        $this->data['currentCategory'] = Category::find($categoryId);
        $this->data['books'] = Book::where(['category_id'=>$categoryId])->get();

//        return $this->data;
        return view('categoryList', $this->data);

//        return $request->input('andy');
    }

}
