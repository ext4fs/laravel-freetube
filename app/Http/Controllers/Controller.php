<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="FreeTube OpenAPI",
 *      description="Swagger OpenAPI 3.0 for FreeTube.",
 *      @OA\Contact(
 *          email="ext2fs@proton.me"
 *      ),
 *      @OA\License(
 *          name="MIT",
 *          url="https://www.mit.edu/~amini/LICENSE.md"
 *      )
 * )
 * @OA\Server(
 *      url="http://127.0.0.1:80/api/v1",
 *      description="API server"
 * )
 * @OA\Server(
 *      url="http://localhost/api/v1",
 *      description="API server"
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function getHello() {
        return 'Hello, World!';
    }
}
