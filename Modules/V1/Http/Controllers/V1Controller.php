<?php

namespace Modules\V1\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\V1\Http\Requests\UserCreatePostRequest;
use Modules\V1\Services\UserService;

class V1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('v1::index');
    }
}
