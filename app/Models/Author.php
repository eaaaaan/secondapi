<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Author extends Model{
        public $timestamps = false;
        protected $primaryKey = 'id';
        protected $table = 'tblauthors';
        // column sa table
        protected $fillable = [
        'fullname', 'gender', 'birthday',
        ];
    }