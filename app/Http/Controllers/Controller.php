<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="FreeTube",
 *      description="Swagger OpenAPI 3 for FreeTube description.",
 *      @OA\Contact(
 *          email="wa6gtzjmwi8nnqur@gmail.com"
 *      ),
 *      @OA\License(
 *          name="MIT",
 *          url="https://www.mit.edu/~amini/LICENSE.md"
 *      )
 * )
 *
 * @OA\Server(
 *      url="http://localhost/api/v1",
 * )

 *
 * @OA\Tag(
 *     name="Auth",
 * )
 *
 * @OA\Tag(
 *     name="User"
 * )
 *
 * @OA\Tag(
 *     name="Post"
 * )
 *
 * @OA\Tag(
 *     name="Comment"
 * )
 *
 * @OA\Tag(
 *     name="File"
 * )
 *
 */

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function getHello() {
        return 'Hello, World!';
    }
}
