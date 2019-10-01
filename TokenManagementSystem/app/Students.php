<?php

namespace App
;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Subjects;
use App\Submissions;
use Carbon\Carbon;
use \Auth;

class Students extends Model
{

	use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sName', 'sEmail', 'sYear', 'sBranch', 'sRollNo',
    ];

    public function user(){

    	return $this->belongsTo(User::class, $foreignKey='sEmail', $ownerKey='email');

    }
    
}
