<?php

namespace Modules\V1\Services;

use Modules\V1\Repositories\UserRepository;

/**
 * Class UserService
 * @package Modules\V1\Services
 */
class UserService
{
    /**
     * @var UserRepository
     */
    private $repository;

    /**
     * UserService constructor.
     * @param UserRepository $repository
     */
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $data
     * @return \Illuminate\Http\JsonResponse
     */
    public function store($data)
    {
        return response()->json([
            'created' => true,
        ], 201);

        //return $this->repository->create($data);
    }
}