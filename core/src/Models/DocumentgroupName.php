<?php namespace EvolutionCMS\Models;

use Illuminate\Database\Eloquent;

/**
 * EvolutionCMS\Models\DocumentgroupName
 *
 * @property int $id
 * @property string $name
 * @property int $private_memgroup
 * @property int $private_webgroup
 *
 * @mixin \Eloquent
 */
class DocumentgroupName extends Eloquent\Model
{
	public $timestamps = false;

	protected $casts = [
		'private_memgroup' => 'int',
		'private_webgroup' => 'int'
	];

	protected $fillable = [
		'name',
		'private_memgroup',
		'private_webgroup'
	];
}
