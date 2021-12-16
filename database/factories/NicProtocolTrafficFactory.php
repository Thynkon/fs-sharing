<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NicProtocolTrafficFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $ports = [22, 80, 443];
        $nic = "eth0";

        return [
            'ip' => $this->faker->ipv4(),
            'pkt_len' => $this->faker->numberBetween(1, 2048), // from 1 to 2kb
            'ts' => $this->faker->dateTimeThisYear()->getTimestamp(),
            'port' => $this->faker->randomElement($ports),
            'iface' => $nic,
        ];
    }
}
