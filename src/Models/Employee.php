<?php
/**
 * Contains the Employee class.
 *
 * @copyright   Copyright (c) 2018 Attila Fulop
 * @author      Attila Fulop
 * @license     MIT
 * @since       2018-11-17
 *
 */

namespace Konekt\Krew\Models;

use Illuminate\Database\Eloquent\Model;
use Konekt\Krew\Contracts\Employee as EmployeeContract;

class Employee extends Model implements EmployeeContract
{
}
