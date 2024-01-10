<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSkillRequest;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(){
        return response()->json(["skill"=> Skill::all()]);
    }

    public function store(StoreSkillRequest $request){
        Skill::create($request->validated());
        return response()->json(["message"=> "skill created"]);
    }

    public function update(StoreSkillRequest $request, Skill $skill){
        $skill->update($request->validated());
        return response()->json(["message"=> "skill updated"]);
    }

    public function delete(Skill $skill){
        $skill->delete();
        return response()->json(["message"=> "skill deleted"]);
    }
}
