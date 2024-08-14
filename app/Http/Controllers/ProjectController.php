<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Agent;
use App\Models\Leads;

class ProjectController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $projects = Project::orderBy('created_at', 'desc')->paginate(9);
        return view('website.projects')->with('projects', $projects);
    }


    public function projectdetails(Request $request)
    {
        $project = Project::where('slug', $request->slug)->with('Agent')->firstOrFail();

        if ($project) {
            // Fetch three random projects
            $randomProjects = Project::where('id', '!=', $project->id)
            ->inRandomOrder()
            ->take(3)
            ->get();

            // Pass both the specific project and the random projects to the view
            return view('website.projectdetails', compact('project', 'randomProjects'));
        } else {
            abort(404);
        }
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
            $request->validate([
                'agent_id' => 'required|exists:agents,id',
                'thumbnail_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'developer_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'hero_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                // 'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'price' => 'required|string|max:255',
                'developer_name' => 'required|string|max:255',
                'hand_over_date' => 'required|string|max:255',
                'long_description' => 'required|string',
                'project_images' => 'nullable',
                'project_images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'during_construction' => 'required|string|max:255',
                'during_hand_over' => 'required|string|max:255',
                'project_name' => 'required|string|max:255',
                'project_address' => 'required|string|max:255',
                'project_location_url' => 'nullable|url',
                'project_video' => 'nullable|url|max:255',
                'project_boucher_image' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg,pdf',
            ]);


            // Handle file uploads
            $data = $request->except(['thumbnail_image', 'developer_image', 'hero_image', 'project_images', 'project_boucher_image']);

            // Upload thumbnail image
            $thumbnailImagePath = $request->file('thumbnail_image')->store('project_images', 'public');
            $data['thumbnail_image'] = $thumbnailImagePath;

            // Upload developer image
            $developerImagePath = $request->file('developer_image')->store('project_images', 'public');
            $data['developer_image'] = $developerImagePath;

            // Upload hero image
            $heroImagePath = $request->file('hero_image')->store('project_images', 'public');
            $data['hero_image'] = $heroImagePath;

            // Upload cover image
            // $coverImagePath = $request->file('cover_image')->store('project_images', 'public');
            // $data['cover_image'] = $coverImagePath;

            // Upload project boucher image if provided
            if ($request->hasFile('project_boucher_image')) {
                $boucherImagePath = $request->file('project_boucher_image')->store('project_images', 'public');
                $data['project_boucher_image'] = $boucherImagePath;
            }

            // Upload project images if provided
            if ($request->hasFile('project_images')) {

                $projectImagePaths = [];
                foreach ($request->file('project_images') as $image) {
                    $path = $image->store('project_images', 'public');
                    $projectImagePaths[] = $path;
                }
                $data['project_images'] = $projectImagePaths;
            }

            // Generate slug
            $data['slug'] = Str::slug($data['project_name']);

            // Create project
            $project = Project::create($data);

            return redirect()->route('admin_project');
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request)
    {
        $project = Project::findOrFail($request->id);

        $request->validate([
            'agent_id' => 'required|exists:agents,id',
            'price' => 'required|string',
            'developer_name' => 'required|string',
            'hand_over_date' => 'required|string',
            'long_description' => 'required|string',
            'during_construction' => 'required|string',
            'during_hand_over' => 'required|string',
            'project_name' => 'required|string',
            'project_address' => 'required|string',
            'project_location_url' => 'nullable|string',
            'project_video' => 'nullable|string',
            'project_boucher_image' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg,pdf',
        ]);

        $data = $request->except(['project_images', 'thumbnail_image', 'developer_image', 'hero_image', 'slug']);

        // Handle project images
        if ($request->has('project_images')) {
            $imagePaths = [];
            foreach ($request->file('project_images') as $image) {
                $path = $image->store('project_images', 'public');
                $imagePaths[] = $path;
            }
            // Delete existing project images from storage if they exist
            if ($project->project_images) {
                foreach ($project->project_images as $existingImage) {
                    Storage::disk('public')->delete($existingImage);
                }
            }
            $data['project_images'] = $imagePaths;
        }

        // Handle thumbnail image
        if ($request->hasFile('thumbnail_image')) {
            // Delete old thumbnail image
            if ($project->thumbnail_image) {
                Storage::disk('public')->delete($project->thumbnail_image);
            }
            $thumbnailImagePath = $request->file('thumbnail_image')->store('project_images', 'public');
            $data['thumbnail_image'] = $thumbnailImagePath;
        }

        // Handle developer image
        if ($request->hasFile('developer_image')) {
            // Delete old developer image
            if ($project->developer_image) {
                Storage::disk('public')->delete($project->developer_image);
            }
            $developerImagePath = $request->file('developer_image')->store('project_images', 'public');
            $data['developer_image'] = $developerImagePath;
        }

        // Handle hero image
        if ($request->hasFile('hero_image')) {
            // Delete old hero image
            if ($project->hero_image) {
                Storage::disk('public')->delete($project->hero_image);
            }
            $heroImagePath = $request->file('hero_image')->store('project_images', 'public');
            $data['hero_image'] = $heroImagePath;
        }

        // Handle cover image
        if ($request->hasFile('cover_image')) {
            // Delete old cover image
            if ($project->cover_image) {
                Storage::disk('public')->delete($project->cover_image);
            }
            $coverImagePath = $request->file('cover_image')->store('project_images', 'public');
            $data['cover_image'] = $coverImagePath;
        }

        if ($request->hasFile('project_boucher_image')) {
            $boucherImagePath = $request->file('project_boucher_image')->store('project_images', 'public');
            $data['project_boucher_image'] = $boucherImagePath;
        }

        // Handle slug
        if ($request->has('project_name') && $request->input('project_name') != $project->project_name) {
            // $data['slug'] = Str::slug($request->input('project_name'));
        }

        // Update other fields if provided
        $project->update($data);


        return redirect()->route('admin_project');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Request $request)
    {
        $project = Project::findOrFail($request->id);
        $project->delete();

        return redirect()->route('admin_project');
    }

    function adminIndex(){
        $projects = Project::with('Agent')->get();
        return view('admin.projects.projects')->with('projects', $projects);
    }

    function adminAddNew(){
        $agents = Agent::all();
        return view('admin.projects.projectsnew')->with('agents', $agents);
    }


    function editproject(Request $request) {
        $project = Project::with('Agent')->find($request->id);
        $agents = Agent::all();
        // Check if the project exists
        if ($project) {
            // Pass the project to the view for editing
            return view('admin.projects.projectedit', compact('project', 'agents'));
        } else {
            // If the project doesn't exist, you may want to handle this case
            abort(404);
        }
        }



        function submitlead(Request $request){
            $validator = \Validator::make($request->all(), [
                'type' => 'required|string|max:255',
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:15',
                'message' => 'required|string|max:255',
                'project_name' => 'required|string|max:255',
                'projects_lug' => 'required',
                'g-recaptcha-response' => 'required|recaptcha',
            ], [
                'g-recaptcha-response.required' => 'Please complete the captcha to proceed.',
                'g-recaptcha-response.recaptcha' => 'Captcha verification failed, please try again.',
            ]);


            if ($validator->fails()) {
                return redirect()->back()
                                 ->withErrors($validator)
                                 ->withInput()
                                 ->withFragment('contactSubmitForm');
            }

            $Lead = Leads::create($request->all());

            return redirect()->back()
            ->withFragment('contactSubmitForm')
            ->with('success', 'Your message has been successfully sent!');

        }
}
