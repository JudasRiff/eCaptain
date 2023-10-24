<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Relation;

class MemberController extends Controller
{
    public function index() 
    {
        return view('simpleOverview');
    }

    /**
     * Fetch data from the form inside simpleOverview
     * Validate the data from the form
     * If approved, execute addLeadingZeroes
     * Redirect to simpleOverview
     */
    public function changeLeadingZeros(Request $request)
    {
        $length = $request->input('memberNumberLength');
        $removeZeroes = $request->input('removeAdditionalZeros');

        $request->validate([
            'memberNumberLength' => 'required|max:255|numeric|min:2|max:9',
            'removeAdditionalZeros' => 'required',
        ]);

        Relation::addLeadingZeroes($length);

        return redirect('/')->with('status', 'Waarden zijn geupdatet.');
    }
}
