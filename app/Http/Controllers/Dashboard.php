<?php

namespace App\Http\Controllers;
use App\Models\Property;
use App\Models\Agent;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Inquiry;
use App\Models\Contact;
use App\Models\BrandsLogo;
use App\Models\Blog;
use App\Models\Project;


use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


use Illuminate\Http\Request;

class Dashboard extends Controller
{
    function index(){
        $totalWeeklyInquiries = Inquiry::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
        $totalDailyInquiries = Inquiry::whereBetween('created_at', [Carbon::now()->startOfDay(), Carbon::now()->endOfDay()])->count();


        $data = [
            'totalWeeklyInquiries' => $totalWeeklyInquiries,
            'totalDailyInquiries' => $totalDailyInquiries,
            'total_agents' => Agent::count(),
            'total_categories' => Category::count(),
            'total_sub_categories' => SubCategory::count(),
            'total_contacts' => Contact::count(),
            'total_brands' => BrandsLogo::count(),
            'total_blogs' => Blog::count(),
            'total_properties' => Property::count(),
            'total_projects' => Project::count(),
        ];

        return view('admin.home')->with('data', $data);
    }
}
