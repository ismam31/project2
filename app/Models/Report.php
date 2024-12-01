<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    // Report.php
public function menu()
{
    return $this->belongsTo(Menu::class);
}
}
