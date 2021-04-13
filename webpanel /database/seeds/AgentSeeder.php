<?php

use App\Agent;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agents')->truncate();
        DB::table('agent_cards')->truncate();
        DB::table('agent_wallet')->truncate();

        $users = Agent::create([
            'name' => 'Demo',
            'email' => 'agent@dragon.com',
            'password' => bcrypt('123456'),
        ]);

        $role = Role::where('name', 'AGENT')->first();

        if($role != null) $users->assignRole($role->id);
    }
}
