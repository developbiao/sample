<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class FollowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $user = $users->first();
        $user_id = $user->id;

        // get exclude id equal 1  all user ids
        $followers = $users->slice(1);
        $follower_ids = $followers->pluck('id')->toArray();

        // follow exclude id equal 1 all users
        $user->follow($follower_ids);

        // exclude id equal 1 all user to follow user1
        // 所有用户都来关注id为1的用户
        foreach($followers as $follower)
        {
            $follower->follow($user_id);
        }
    }
}
