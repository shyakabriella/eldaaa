<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable; // Import the Notifiable trait
use App\Notifications\ApplicationApproved;
use App\Notifications\ApplicationRejected;

class Application extends Model
{
    use HasFactory, Notifiable; // Add the Notifiable trait

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'nid',
        'phone',
        'email',
        'gender',
        'province',
        'district',
        'sector', 
        'village',
        'ubudehe',
        'asset',
        'education',
        'disability',
        'desease',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sendApplicationApprovedNotification()
    {
        $this->notify(new ApplicationApproved($this));
    }

    public function sendApplicationRejectedNotification()
    {
        $this->notify(new ApplicationRejected($this));
    }
}
