<?php
namespace Upkareno\AutoPull\Models;

use Illuminate\Database\Eloquent\Model;

class PullRequest extends Model {
    protected $fillable = [
        'message',
        'username',
        'commit',
        'email',
        'created_at',
        'updated_at'
    ];
}