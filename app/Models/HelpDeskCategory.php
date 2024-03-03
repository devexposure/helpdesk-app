<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HelpDeskCategory extends Model
{
    use HasFactory;

    protected $table = 'help_desk_categories';

    protected $fillable = ['category_name', 'created_by'];
}
