<?php

namespace Tests\Unit;

use App\Models\Election;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example(): void
    {
        //$response = $this->get('api/Elections');

        //$response->assertStatus(200);
        $elections = new Election();
        $elections = [
            $elections->label ='roger',
            $elections->description='fdfd',
            $elections->status = 'fdfd',
            $elections->date ='2000-01-01'

        ];
    }
}
