<?php

namespace App\Models\Admin;

use App\Models\Setting\Log;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CommisionHistory
 * @package App\Models\Admin
 *
 *  @property  int  $id
 *  @property  string  $date_change
 *  @property  int  $percent
 *  @property  int  $log_id
 *  @property  string  $created_at
 * @property  string  $updated_at
 */
class CommisionHistory extends Model{
    
			 /**
			 * Get the logs for the blog history commision.
			 */
			public function logs() {
					return $this->hasMany(Log::class);
			}
}
