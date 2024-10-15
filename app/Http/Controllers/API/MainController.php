<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;

class MainController extends Controller
{
    /**
     * @OA\PathItem(
     *     path="/api/v1/users",
     *     @OA\Get(
     *         summary="��������� ������ �������������",
     *         description="���������� ������ ���� ������������������ �������������",
     *         operationId="getUsersList",
     *         tags={"Users"},
     *         @OA\Response(
     *             response=200,
     *             description="�������� ������",
     *             @OA\JsonContent(
     *                 type="array",
     *                 @OA\Items(ref="#/components/schemas/User")
     *             )
     *         ),
     *         @OA\Response(
     *             response=401,
     *             description="�� �����������"
     *         )
     *     )
     * )
     */
    public function index()
    {
        // ������ ��� ��������� ������ �������������
    }

    /**
     * Store a newly created resource in storage.
     
    public function store(Request $request)
    {
        //
    }*/

    /**
     * Display the specified resource.

    public function show(string $id)
    {
        //
    }*/

    /**
     * Update the specified resource in storage.

    public function update(Request $request, string $id)
    {
        //
    }*/

    /**
     * Remove the specified resource from storage.

    public function destroy(string $id)
    {
        //
    }*/
}
