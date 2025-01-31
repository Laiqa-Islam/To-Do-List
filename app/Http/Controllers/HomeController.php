<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Lists;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // Index page
    public function index()
    {
        if(Auth::check()){
           return redirect("/home");
        }
        return view("index");
    }

    //registerPage get
    public function register()
    {
        return view("register");
    }

    //registerPage Post
    public function registerPost(Request $request)
    {
        $formsfield = $request->validate([
            "name" => "required",
            "email" => ["required", "email", Rule::unique("users", "email")],
            "password" => "required|min:6",
        ]);

        $formsfield["password"] = bcrypt($request->password);
        $user = User::create($formsfield);
        auth('web')->login($user);

        return redirect("/home");
    }

    //Login get
    public function login()
    {
        return view("login");
    }

    //Login post
    public function loginPost(Request $request)
    {
        $formsfields = $request->validate([
            "email" => ["required", "email"],
            "password" => "required"
        ]);

        if (auth('web')->attempt($formsfields)) {
            $request->session()->regenerate();
            return redirect('/home')->with('success', 'You have been logged in');
        } else {
            return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
        }
    }

    //Logout user
    public function logout(Request $request)
    {
        auth('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'You have been logged out');
    }

    //home get
    public function home()
    {
        // Fetch the user's lists sorted by 'rating' in descending order
        $sortedLists = auth('web')->user()->Lists()->orderBy('priority', 'desc')->get();

        // Pass the sorted lists to the view
        return view("/home", ["lists" => $sortedLists]);
    }



    //Home Post
    public function homePost(Request $request)
    {
        $listsfield = $request->validate([
            "title" => "required",
            "priority" => "required|min:1|max:5",
        ]);

        $listsfield['user_id'] = auth('web')->id();
        Lists::create($listsfield);
        return redirect('/home');
    }

    //Update list status in database
    public function status(Lists $list)
    {
        if ($list->user_id != auth('web')->user()->id) {
            abort(403, 'Unauthorized Action');
        } else {
            if ($list->status == 'incomplete') {
                $formsField = ['status' => 'complete'];
                $list->update($formsField);
            } elseif ($list->status == 'complete') {
                $formsField = ['status' => 'incomplete'];
                $list->update($formsField);
            }
            return back()->with('success', 'Listing Updated Successfully!');
        }
    }


    //Edit List Get
    public function editList(Lists $list)
    {
        return view('edit', ['list' => $list]);
    }

    //Edit ListPost
    public function editListPost(Request $request, Lists $list)
    {
        if ($list->user_id != auth('web')->user()->id) {
            abort(403, 'Unauthorized Action');
        } else {
            $formsFiled = $request->validate([
                "title" => "required",
                "priority" => "required|min:1|max:5",
            ]);
            $list->update($formsFiled);

            return redirect('/home')->with("success", "List Updated Successfully!");
        }
    }

    //Delete ListPost
    public function deleteList(Request $request, Lists $list)
    {
        if ($list->user_id != auth("web")->user()->id) {
            abort(403, "Unauthorized Action");
        } else {
            $list->delete();
            return redirect("/home")->with("success", "List Deleted Successfully!");
        }
    }

    //get all the lists from the database
    public function getAllLists()
    {
        $list = Lists::all(); // Fetch data from the database
        return response()->json($list); // Return data as JSON
    }
}
