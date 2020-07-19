<?php

namespace App\Http\Controllers\Api;

use App\Frequency;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Validator;

class FrequencyController extends Controller
{
    public $successStatus = 200;
    protected $DATE = "Y-m-d";

    /**
     * index frequency api
     * @param Request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 400);
        }
        try {
            $user = User::findOrFail($request->json('user_id'));

            $frequencies = Frequency::frequenciesThisMonth($user->id);
            $formated_frequencies = [];

            foreach ($frequencies as $frequency) {
                $formated_frequencies[] = Carbon::createFromFormat('Y-m-d H:i:s', $frequency->created_at)->format($this->DATE);
            }

            return response()->json(["success" => true, "frequencies" => $formated_frequencies], $this->successStatus);
        }
        catch (\Exception $e) {
            return response()->json(["success" => false, "error" => $e], 400);
        }
    }

    /**
     * store frequency api
     * @param Request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        //TO DO: validate input (id and date)
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'date' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 400);
        }
        try {
            $user = User::findOrFail($request->json('user_id'));

            $frequency = new Frequency();
            $frequency->student_id = $user->id;
            $frequency->created_at = Carbon::createFromFormat($this->DATE, $request->json('date'))->toDateTimeString();
            $frequency->updated_at = Carbon::today();

            $frequency->save();

            return response()->json(["success" => true, "msg" => "Frequency created!"], 201);
        }
        catch (\Exception $e) {
            return response()->json(["success" => false, "error" => $e], 400);
        }
    }
}
