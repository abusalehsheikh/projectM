<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Company $company)
    {
        if (Auth::check()){


            $companies = Company::where('user_id', Auth::user()->id)->get();



//            if (!Company::where('user_id', Auth::user()->id)->exists()) {
//                return view('companies.index', ['companies' => $companies])-with('success','no');

//            }
            $comments = $company->comments;


            return view('companies.index', ['companies' => $companies, 'comments'=>$comments]);

        }

        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::check()){
            $company = Company::create([
                'name'  => $request->input('name'),
                'description'  => $request->input('description'),
                'user_id'  => Auth::user()->id,
            ]);

            if ($company){
                return redirect()->route('companies.show', ['Company' => $company->id])
                    ->with('success', 'Company created successfully !');
            }
        }

        return back()->withInput()->with('error', 'Error creating new Company !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {

        if (Auth::check()){
        $company = Company::find($company->id);

        $comments = $company->comments;

        return view('companies.show', ['company'=>$company , 'comments'=>$comments]);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {

        $company = Company::find($company->id);

        return view('companies.edit', ['company'=>$company]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $companyUpdate = Company::where('id', $company->id)
            ->update([
                'name'  => $request->input('name'),
                'description'  => $request->input('description'),
            ]);

        if ($companyUpdate){
            return redirect()->route('companies.show',['Company' => $company->id])->with('success', 'Company Update Successfully!');
        }


        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $findCompany = Company::find($company->id);

        if ($findCompany->delete()){
            return redirect()->route('companies.index')
                ->with('success', 'Company Deleted Successfully !');
        }

        return back()->withInput()->with('error','Company could not deleted.');
    }

}
