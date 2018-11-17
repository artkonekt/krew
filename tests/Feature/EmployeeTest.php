<?php
/**
 * Contains the EmployeeTest class.
 *
 * @copyright   Copyright (c) 2018 Attila Fulop
 * @author      Attila Fulop
 * @license     MIT
 * @since       2018-11-17
 *
 */

namespace Konekt\Krew\Tests\Feature;

use Konekt\Krew\Contracts\Employee as EmployeeContract;
use Konekt\Krew\Models\Employee;
use Konekt\Krew\Models\EmployeeProxy;
use Konekt\Krew\Tests\Feature\Traits\CreatesTestUsers;
use Konekt\Krew\Tests\TestCase;

class EmployeeTest extends TestCase
{
    use CreatesTestUsers;

    /** @test */
    public function concord_contains_the_employee_model()
    {
        $this->assertTrue(
            $this->concord->getModelBindings()->has(EmployeeContract::class),
            'The employee model should be present in Concord'
        );
    }

    /** @test */
    public function the_model_can_be_resolved_from_the_interface()
    {
        $employee = $this->app->make(EmployeeContract::class);

        $this->assertInstanceOf(EmployeeContract::class, $employee);

        // We also expect that it's the default project model from this package
        $this->assertInstanceOf(Employee::class, $employee);
    }

    /** @test */
    public function the_model_proxy_resolves_to_the_default_model()
    {
        $this->assertEquals(Employee::class, EmployeeProxy::modelClass());
    }

    public function an_employee_can_be_created()
    {
        $this->createTestUsers();

        $employee = EmployeeProxy::create([
            'user_id' => $this->userOne->id
        ]);

        $this->assertEquals($this->userOne->id, $employee->user_id);
    }
}
