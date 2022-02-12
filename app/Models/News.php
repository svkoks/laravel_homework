<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    public function getNews(): array
    {
        return DB::table($this->table)
                ->select(['id', 'title', 'slug', 'status', 'text'])
                ->get()
                ->toArray();
    }

    public function getNewsById($id)
    {
        return DB::table($this->table)->find($id);
    }
}