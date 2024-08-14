<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agents = Agent::all();
        return view('admin.agents.agents')->with('agents', $agents);
    }


    function agentsnew() {
        return view('admin.agents.addnewagent');
    }


    function editagent(Request $request) {
        $agent = Agent::findOrFail($request->id);
        return view('admin.agents.editagent')->with('agent', $agent);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:agents,email',
            'descignation' => 'required|string',
            'whatsapp_number' => 'required|string|max:20',
            'phone_number' => 'required|string|max:20',
            'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'rating' => 'nullable|numeric|min:0|max:5',
        ]);

        $path = $request->file('profile_image')->store('agent_profile_images', 'public');

        $agent = Agent::create([
            'name' => $request->name,
            'email' => $request->email,
            'descignation' => $request->descignation,
            'whatsapp_number' => $request->whatsapp_number,
            'phone_number' => $request->phone_number,
            'profile_image' => $path,
            'rating' => $request->rating,
        ]);

        return redirect()->route('admin_agents');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $agent = Agent::findOrFail($id);
        return response()->json($agent);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $agent = Agent::findOrFail($request->id);

        $request->validate([
            'name' => 'required|string|max:255',
            'descignation' => 'required|string',
            'whatsapp_number' => 'required|string|max:20',
            'phone_number' => 'required|string|max:20',
            'rating' => 'nullable|numeric|min:0|max:5',
        ]);

        if ($request->hasFile('profile_image')) {
            // Delete the old image
            Storage::disk('public')->delete($agent->profile_image);

            // Store the new image
            $path = $request->file('profile_image')->store('agent_profile_images', 'public');
            $agent->profile_image = $path;
        }

        $agent->update($request->only([
            'name',
            'email',
            'descignation',
            'whatsapp_number',
            'phone_number',
            'rating',
        ]));

        return redirect()->route('admin_agents');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $agent = Agent::findOrFail($request->id);

        // Delete the image
        Storage::disk('public')->delete($agent->profile_image);

        $agent->delete();

        return redirect()->route('admin_agents');
    }

    /**
     * Fetch random 8 agents.
     */
    public function randomAgents()
    {
        $agents = Agent::inRandomOrder()->take(8)->get();
        return $agents;
    }

    function agents()  {
        $agent = Agent::orderBy('id', 'desc')->paginate(10);
        return view('website.agents')->with('agents', $agent);
    }

    function agentsDetails()  {
        return view('website.agentsDetails');
    }

}
