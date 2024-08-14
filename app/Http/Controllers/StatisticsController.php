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
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    /**
     * Display the count of various entities.
     */
    public function counts()
    {
        $data = [
            'total_properties' => Property::count(),
            'total_agents' => Agent::count(),
            'total_categories' => Category::count(),
            'total_sub_categories' => SubCategory::count(),
            'total_inquiries' => Inquiry::count(),
            'total_contacts' => Contact::count(),
            'total_brands' => BrandsLogo::count(),
            'total_blogs' => Blog::count(),
        ];

        return response()->json($data);
    }
}
