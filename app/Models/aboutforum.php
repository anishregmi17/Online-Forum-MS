<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutForum extends Model
{
    use HasFactory;

    protected $fillable = ['text', 'description'];

    protected $table = 'about_forums'; // Ensure this matches the table name in your migration
}
