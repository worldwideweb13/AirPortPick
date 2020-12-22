<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_table extends Model
{
    use HasFactory;
    // Add [pid] to fillable property to allow mass assignment on ...エラー対応
    // カラムの編集不可の設定を編集を可能に変更
    // https://qiita.com/toro_ponz/items/b33c757cb7ba5bb48ed4
    protected $fillable = ['pid'];
}
