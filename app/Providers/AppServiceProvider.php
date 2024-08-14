<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
use App\Models\Inquiry;
use App\Models\Contact;
use App\Models\Category;
use App\Models\ListYourProperty;
use App\Models\Leads;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (!App::runningInConsole()) {
            $totalInquiries = Inquiry::count();
            $totalListingInquiries = ListYourProperty::count();
            $totalLeads = Leads::count();
            $totalContact = Contact::count();
            $categories = Category::with('subCategories')->get();

            $formattedInquiries = $totalInquiries;
            $formattedContact = $totalContact;

            View::share([
                'inquiry' => $formattedInquiries,
                'contact' => $formattedContact,
                'category' => $categories,
                'totalListingInquiries' => $totalListingInquiries,
                'totalLeads' => $totalLeads,
            ]);
        }
    }
}
