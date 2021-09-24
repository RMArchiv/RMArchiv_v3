<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Logo
 * 
 * @property int $id
 * @property string $title
 * @property string $mimetype
 * @property string $filepath
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $votes_count
 * @property int $votes_value
 *
 * @package App\Models
 */
class Logo extends Model
{
	protected $table = 'logos';

	protected $casts = [
		'user_id' => 'int',
		'votes_count' => 'int',
		'votes_value' => 'int'
	];

	protected $fillable = [
		'title',
		'mimetype',
		'filepath',
		'user_id',
		'votes_count',
		'votes_value'
	];
}
