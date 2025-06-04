<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property Carbon $birthdate
 * @property int $height
 * @property int $weight
 * @property string $city
 * @property string $state
 * @property string $team
 * @property int $number
 * @property array $positions
 * @property string $bats
 * @property string $throws
 * @property string $image
 */
final class Player extends Model
{
    public function casts(): array
    {
        return [
            'birthdate' => 'date',
            'positions' => 'array',
            'image' => 'string',
        ];
    }
}
