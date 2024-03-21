<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\FPCController;
use Illuminate\Http\JsonResponse;

class FPCControllerTest extends TestCase
{
    public function test_get_firstteam()
    {
        //Arrange
        $controller = new FPCController();

        // Act
        $response = $controller->FirsTeam();
        $data = $response->getData(true);

        // Assert
        $this->assertInstanceOf(JsonResponse::class, $response);
        $this->assertTrue($data['Points'] > 30);
    }
}
