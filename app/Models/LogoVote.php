<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LogoVote
 * 
 * @property int $id
 * @property int $logo_id
 * @property int $user_id
 * @property int $vote_value
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class LogoVote extends Model
{
	protected $table = 'logo_votes';

	protected $casts = [
		'logo_id' => 'int',
		'user_id' => 'int',
		'vote_value' => 'int'
	];

	protected $fillable = [
		'logo_id',
		'user_id',
		'vote_value'
	];
}
