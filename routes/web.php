<?php

use App\Http\Controllers\{
    ProfileController,
    Dashboard,
    AgentController,
    CategoryController,
    SubCategoryController,
    PropertyController,
    InquiryController,
    ContactController,
    BrandsLogoController,
    BlogController,
    SeoController,
    WebController,
    AboutUsController,
    HomeController,
    ProjectController,
    LeadsController,
    Auth\AuthenticatedSessionController,
    Auth\ConfirmablePasswordController,
    Auth\EmailVerificationNotificationController,
    Auth\EmailVerificationPromptController,
    Auth\NewPasswordController,
    Auth\PasswordController,
    Auth\PasswordResetLinkController,
    Auth\RegisteredUserController,
    Auth\VerifyEmailController
};
use Illuminate\Support\Facades\Route;

// Front website routes

// Home page route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Contact form post
Route::post('/contact/submit-form', [HomeController::class, 'submitContactForm'])->name('submitContactForm');

// About page route
Route::get('/about-us', [AboutUsController::class, 'aboutus'])->name('aboutus');

// Property routes
Route::get('/properties', [PropertyController::class, 'properties'])->name('properties');
Route::get('/properties/details/{slug}', [PropertyController::class, 'propertiesDetails'])->name('propertiesDetails');
Route::get('/properties/{type}/{subtype?}', [PropertyController::class, 'propertiestypes'])->name('propertiestype');


// Agent pages routes
Route::get('/agents', [AgentController::class, 'agents'])->name('agents');

// Blogs page routes
Route::get('/blogs', [BlogController::class, 'blogs'])->name('blogs');
Route::get('/blogs/{slug}', [BlogController::class, 'blogsDetails'])->name('blogsfull');

// Contact us page
Route::get('/contactus', [ContactController::class, 'contactus'])->name('contactus');
Route::post('/contactus', [ContactController::class, 'store'])->name('contactus');

// Inquiry page routes
Route::get('/inquiry', [InquiryController::class, 'inquiry'])->name('inquiry');
Route::post('/inquiry', [InquiryController::class, 'store'])->name('submitinquiry');

// project page route
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/projects/details/{slug}', [ProjectController::class, 'projectdetails'])->name('projectsdetails');


Route::post('/submit/lead', [ProjectController::class, 'submitlead'])->name('submitlead');


// List your property page route
// Route::get('/list-your-property', [InquiryController::class, 'listyourproperty'])->name('listyourproperty');

// Privacy policy page route
Route::get('/privacy-policy', [WebController::class, 'privacypolicy'])->name('privacypolicy');

// Terms & conditions page route
Route::get('/term-and-conditions', [WebController::class, 'termandconditions'])->name('termandconditions');

// Admin login routes
Route::middleware('guest')->prefix('admin')->group(function () {
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

// Admin panel routes
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    Route::get('/', [Dashboard::class, 'index'])->name('admin_home');

    // Agent routes
    Route::get('/agents', [AgentController::class, 'index'])->name('admin_agents');
    Route::get('/new/agents', [AgentController::class, 'agentsnew'])->name('admin_new_agents');
    Route::post('/new/agents/store', [AgentController::class, 'store'])->name('admin_new_agents_store');
    Route::get('/new/agents/destroy/{id}', [AgentController::class, 'destroy'])->name('admin_agents_destroy');
    Route::get('/edit/agents/{id}', [AgentController::class, 'editagent'])->name('admin_agents_edit_agent');
    Route::post('/edit/agents', [AgentController::class, 'update'])->name('admin_agents_edit_update');

    // Category routes
    Route::get('/category', [CategoryController::class, 'index'])->name('admin_category');
    Route::get('/new/category', [CategoryController::class, 'addNewCategory'])->name('admin_new_category');
    Route::post('/new/category', [CategoryController::class, 'store'])->name('admin_new_category');
    Route::get('/new/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('admin_category_destroy');
    Route::get('/new/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('admin_category_destroy');
    Route::get('/update/category/{id}', [CategoryController::class, 'categoryUpdate'])->name('admin_category_update');
    Route::post('/update/category', [CategoryController::class, 'update'])->name('admin_category_update_post');

    // Sub-category routes
    Route::get('/sub-category', [SubCategoryController::class, 'index'])->name('admin_sub_category');
    Route::get('/new/sub-category', [SubCategoryController::class, 'subcategorynew'])->name('admin_new_sub_category');
    Route::post('/new/sub-category', [SubCategoryController::class, 'store'])->name('admin_new_sub_category');
    Route::get('/new/sub-category/destroy/{id}', [SubCategoryController::class, 'destroy'])->name('admin_new_sub_category_destroy');
    Route::get('/edit/sub-category/{id}', [SubCategoryController::class, 'editSubCategory'])->name('admin_new_sub_category_editSubCategory');
    Route::post('/edit/sub-category/update', [SubCategoryController::class, 'update'])->name('admin_new_sub_category_update');

    // Properties routes
    Route::get('/properties', [PropertyController::class, 'index'])->name('admin_properties');
    Route::get('/new/properties', [PropertyController::class, 'addNewProperty'])->name('admin_new_properties');
    Route::post('/new/properties', [PropertyController::class, 'store'])->name('admin_new_properties');
    Route::get('/new/properties/destroy', [PropertyController::class, 'destroy'])->name('admin_new_properties_destroy');
    Route::get('/new/properties/edit', [PropertyController::class, 'propertiesEdit'])->name('admin_new_properties_edit');
    Route::post('/new/properties/update', [PropertyController::class, 'update'])->name('admin_new_properties_update');

    // Inquiries routes
    Route::get('/inquires', [InquiryController::class, 'index'])->name('admin_inquires');

    // Listing Inquiries
    // Route::get('/listing/inquires', [ListYourPropertyController::class, 'index'])->name('admin_listing_inquires');

    // Contacts routes
    Route::get('/contacts', [ContactController::class, 'index'])->name('admin_contacts');

    // SEO routes
    Route::get('/all/seo', [SeoController::class, 'index'])->name('admin_allseo');
    Route::get('/add/seo', [SeoController::class, 'addNewSeo'])->name('admin_newseo');
    Route::post('/add/seo', [SeoController::class, 'store'])->name('admin_newseo');
    Route::get('/add/seo/destroy/{id}', [SeoController::class, 'destroy'])->name('admin_newseo_destroy');

    // Brands routes
    Route::get('/brand/logos', [BrandsLogoController::class, 'index'])->name('admin_brandlogos');
    Route::get('/new/brand/logos', [BrandsLogoController::class, 'createNewBrand'])->name('admin_brandlogonew');
    Route::post('/new/brand/logos', [BrandsLogoController::class, 'store'])->name('admin_brandlogonew');
    Route::get('/new/brand/logos/destroy/{id}', [BrandsLogoController::class, 'destroy'])->name('admin_brandlogonew_destroy');

    // Blog routes
    Route::get('/blog', [BlogController::class, 'index'])->name('admin_blog');
    Route::get('/new/blog', [BlogController::class, 'addNewBlog'])->name('admin_blog_new');
    Route::post('/new/blog', [BlogController::class, 'store'])->name('admin_blog_new');
    Route::get('/new/blog/edit/{id}', [BlogController::class, 'editBlog'])->name('admin_blog_edit');
    Route::post('/new/blog/edit', [BlogController::class, 'update'])->name('admin_blog_edit_post');
    Route::get('/new/blog/destroy/{id}', [BlogController::class, 'destroy'])->name('admin_blog_destroy');

    // project routes
    Route::get('/project', [ProjectController::class, 'adminIndex'])->name('admin_project');
    Route::get('/project/new', [ProjectController::class, 'adminAddNew'])->name('admin_project_new');
    Route::post('/project/new', [ProjectController::class, 'store'])->name('admin_project_new');
    Route::get('/project/destory/{id}', [ProjectController::class, 'destroy'])->name('admin_project_destroy');
    Route::get('/project/edit/{id}', [ProjectController::class, 'editproject'])->name('admin_project_editproject');
    Route::post('/project/edit', [ProjectController::class, 'update'])->name('admin_project_update');

    //leads
    Route::get('/leads', [LeadsController::class, 'index'])->name('admin_leads');
});
