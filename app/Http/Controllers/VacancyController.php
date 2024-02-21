<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vacancies = Vacancy::with(['admin', 'company'])->paginate(2);
        if(isset($_GET["search"])) {
            $search = $_GET["search"];
            $vacancies = Vacancy::where('main_vacancy', 'LIKE', '%'.$search.'%')
                                ->orWhereHas('company', function ($query) use ($search) {
                                    $query->where('company_name','LIKE','%'.$search.'%');
                                })
                                ->orWhereHas('admin', function ($query) use ($search) {
                                    $query->where('username','LIKE','%'.$search.'%')
                                          ->where('nama_admin', 'LIKE', '%'.$search.'%');
                                })->paginate(2);
        }
        return view('JobVacancy', [
            "page" => "Job Vacancy",
            "vacancies" => $vacancies,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
