<?php

use Illuminate\Database\Seeder;
use App\Pulse;
use Carbon\Carbon;

class PulseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 30; $i++){
            $now = Carbon::now();
            $pulse = new  Pulse;
            $pulse->value = rand(85, 120);
            $pulse->created_at = $now->subDays($i);
            $pulse->save();
        }
    }
}
