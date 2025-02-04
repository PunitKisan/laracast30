<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job extends Model {
    use HasFactory;
    protected $table = 'job_listings';
    protected $fillable = [ 'title', 'salary' ];

    public function employer(): \Illuminate\Database\Eloquent\Relations\BelongsTo {
        return $this->belongsTo(Employer::class);
    }
    public function tags(): \Illuminate\Database\Eloquent\Relations\belongsToMany {
        return $this->belongsToMany(Tag::class, foreignPivotKey: 'job_listing_id');
    }
//    public static function all(): array {
//        return [
//            [
//                'id'     => 1,
//                'title'  => 'Directory',
//                'salary' => '$50,000'
//            ], [
//                'id'     => 2,
//                'title'  => 'Programmer',
//                'salary' => '$100,000'
//            ], [
//                'id'     => 3,
//                'title'  => 'Teacher',
//                'salary' => '$40,000'
//            ]
//        ];
//    }
//
//    public static function find( int $id ): ?array {
//        $job = Arr::first( static::all(), fn( $jobs ) => $jobs['id'] == $id );
//        if ( !$job ) {
//            abort( 404 );
//        }
//        return $job;
//    }
}
