<?php

namespace App\Http\Controllers;

use App\Models\Billboard;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BillboardController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:255'
        ]);

        $billboard = Billboard::create($data);

        return response()->json([
            'status' => 201,
            'data' => $billboard
        ], 201);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request)
    {
        $billboards = Billboard::all();

        return response()->json([
            'status' => 200,
            'data' => $billboards
        ], 200);
    }

    public function show(Request $request, $id)
    {
        $request['id'] = $id;
        $id = $request->validate([
            'id' => 'required|int|exists:billboards,id',
        ]);

        $billboard = Billboard::find($id);

        return response()->json([
            'status' => 200,
            'data' => $billboard
        ], 200);
    }

    /**
     * @param Request $request
     * @param $id
     * @return JsonResponse
     */
    public function update(Request $request, $id)
    {
        $request['id'] = $id;
        $data = $request->validate([
            'id' => 'required|int|exists:billboards,id',
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:255',
        ]);

        $billboard = Billboard::find($id);
        $billboard->update($data);

        return response()->json([
            'status' => 200,
            'data' => $billboard
        ], 200);
    }

    /**
     * @param Request $request
     * @param $id
     * @return JsonResponse
     */
    public function delete(Request $request, $id)
    {
        $request['id'] = $id;
        $this->validate($request, [
            'id' => 'required|int|exists:billboards,id'
        ]);

        $billboard = Billboard::find($id);
        $billboard->delete();

        return response()->json([
            'status' => 200,
            'data' => $billboard
        ], 200);
    }
}
