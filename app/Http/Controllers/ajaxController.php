<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\group;

class ajaxController extends Controller
{
    public function CreateGroup(Request $request)
    {
        try {
            $rules = [
                'name'              => 'required',
                'message'           => 'required',
                'startDate'         => 'required',
            ];

            $endDate = null;
            $limit = null;
            $groupType = 0;

            if ($request->Nodate == 'false') {
                $rules['endDate'] = 'required';
                $endDate = $request->endDate;
            }

            if ($request->noLimit == 'false') {
                $rules['participantCount'] = 'required';
                $limit = $request->participantCount;
            }

            if ($request->acountTypeRadioBtn == 'true') {
                $groupType = 1; // public group
            }

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                return response()->json(['error' => $validator->messages()->all()]);
            }

            DB::beginTransaction();

            group::create([
                'name' => $request->name,
                'message' => $request->message,
                'start_date' => $request->startDate,
                'end_date' => $endDate,
                'count' => $limit,
                'type' => $groupType,
                'status' => 1
            ]);

            DB::commit();
            return response()->json(['success' => 'Group Created Successfully!']);

        } catch (\Throwable $e) {
            DB::rollback();
            Log::error($e);
            return response()->json(['error' => 'An error occurred while processing your request.Try again later!'.$e->getMessage()]);
        }

    }
}
