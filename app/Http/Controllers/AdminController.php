<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $adminRequests = User::where('is_admin', NULL)->get();
        $revisorRequests = User::where('is_revisor', NULL)->get();
        $writerRequests = User::where('is_writer', NULL)->get();

        return view('admin.dashboard', compact('adminRequests', 'revisorRequests', 'writerRequests'));
    }

    public function setAdmin(User $user){
        $user->update([
            'is_admin'=> true,
        ]);

        return redirect(route('admin.dashboard'))->with('message', "You made ' $user->name ' an Administrator");
    }

    public function setRevisor(User $user){
        $user->update([
            'is_revisor'=> true,
        ]);

        return redirect(route('admin.dashboard'))->with('message', "You made ' $user->name ' a Revisor");
    }

    public function setWriter(User $user){
        $user->update([
            'is_writer'=> true,
        ]);

        return redirect(route('admin.dashboard'))->with('message', "You made ' $user->name ' an Author");
    }

    public function editTag(Request $request, Tag $tag){
        $request->validate([
            'name' => 'required|unique:tags',
        ]);

        $tag->update([
            'name' => strtolower($request->name),
        ]);

        return redirect(route('admin.dashboard'))->with('message', "You have updated the tag to ' #$request->name '");
    }

    public function deleteTag(Tag $tag){
        foreach ($tag->articles as $article) {
            $article->tags()->detach($tag);
        }

        $tag->delete();

        return redirect(route('admin.dashboard'))->with('message', "You have deleted tag ' #$tag->name '");
    }

    public function editCategory(Request $request, Category $category){
        $request->validate([
            'name' => 'required|unique:categories',
        ]);

        $category->update([
            'name' => strtolower($request->name),
        ]);

        return redirect(route('admin.dashboard'))->with('message', "You have updated the category to' $category->name '");
    }

    public function deleteCategory(Category $category){

        $category->delete();

        return redirect(route('admin.dashboard'))->with('message', "You have deleted category: ' $category->name '");
    }

    public function storeCategory(Request $request){
        $newName = Category::create([
            'name' => strtolower($request->name),
        ]);

        return redirect(route('admin.dashboard'))->with('message', "You add category: ' $newName->name '");
    }
}
