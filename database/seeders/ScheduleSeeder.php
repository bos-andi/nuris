<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Schedule;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Jadwal Harian
        $dailySchedules = [
            ['time' => '03.00-04.00', 'activity' => "Qiyamul Lail dan Persiapan Shalat Shubuh Berjama'ah", 'notes' => null, 'order' => 1],
            ['time' => '04.00-04.45', 'activity' => "Shalat Shubuh Berjama'ah dan Wiridan", 'notes' => null, 'order' => 2],
            ['time' => '04.45-05.30', 'activity' => "Madrasah Al-Qur'an dan Tafsir Jalalain", 'notes' => null, 'order' => 3],
            ['time' => '05.30-07.00', 'activity' => "Ro'an, Makan Pagi dan Persiapan Sekolah Formal", 'notes' => null, 'order' => 4],
            ['time' => '07.30-10.05', 'activity' => 'KBM Formal', 'notes' => null, 'order' => 5],
            ['time' => '10.05-10.50', 'activity' => "Istirahat & Sholat Dhuha Berjama'ah", 'notes' => null, 'order' => 6],
            ['time' => '10.50-12.15', 'activity' => 'KBM Formal', 'notes' => null, 'order' => 7],
            ['time' => '12.15-13.45', 'activity' => "Sholat Dhuhur berjama'ah, Makan Siang, Istirahat & Mandi untuk Persiapan Diniyah", 'notes' => null, 'order' => 8],
            ['time' => '13.45-15.00', 'activity' => 'KBM Madrasah Diniyah Salafiyah', 'notes' => null, 'order' => 9],
            ['time' => '15.00-15.15', 'activity' => 'Lalaran Nadzom', 'notes' => null, 'order' => 10],
            ['time' => '15.15-15.45', 'activity' => "Istirahat dan Shalat Ashar Berjama'ah", 'notes' => null, 'order' => 11],
            ['time' => '15.45-17.00', 'activity' => 'KBM Madrasah Diniyah Salafiyah', 'notes' => null, 'order' => 12],
            ['time' => '17.00-17.30', 'activity' => "Ro'an Sore dan Persiapan Shalat Magrib Berjama'ah", 'notes' => null, 'order' => 13],
            ['time' => '17.30-18.00', 'activity' => "Shalat Magrib Berjama'ah", 'notes' => null, 'order' => 14],
            ['time' => '18.00-19.00', 'activity' => "Makan Malam dan Persiapan Shalat Isya'", 'notes' => null, 'order' => 15],
            ['time' => '19.00-19.45', 'activity' => "Shalat Isya Berjama'ah", 'notes' => null, 'order' => 16],
            ['time' => '19.45-21.00', 'activity' => "Ilqo' Mufrodat + Taqror", 'notes' => null, 'order' => 17],
            ['time' => '21.00-03.00', 'activity' => 'Istirahat/tidur', 'notes' => null, 'order' => 18],
        ];

        foreach ($dailySchedules as $schedule) {
            Schedule::create([
                'type' => 'daily',
                'day' => null,
                'time' => $schedule['time'],
                'activity' => $schedule['activity'],
                'notes' => $schedule['notes'],
                'order' => $schedule['order'],
                'is_active' => true,
            ]);
        }

        // Jadwal Mingguan
        $weeklySchedules = [
            ['day' => 'Kamis', 'time' => '19.30-20.30', 'activity' => "Shalawat Ad Diba'i", 'notes' => null, 'order' => 1],
            ['day' => 'Sabtu', 'time' => '07.00-10.00', 'activity' => 'Esktrakulikuler', 'notes' => null, 'order' => 2],
            ['day' => 'Sabtu', 'time' => '19.30-21.00', 'activity' => 'Syawir', 'notes' => 'Sabtu I + III', 'order' => 3],
            ['day' => 'Sabtu', 'time' => '19.30-21.00', 'activity' => 'Muhadhoroh', 'notes' => 'Sabtu II + IV', 'order' => 4],
            ['day' => 'Ahad', 'time' => '16.00-17.15', 'activity' => "Ta'lim Muta'allim & Arba' Ar Rosail", 'notes' => 'Nuris 1', 'order' => 5],
            ['day' => 'Ahad', 'time' => '18.00-19.15', 'activity' => "Ta'lim Muta'allim & Arba' Ar Rosail", 'notes' => 'Nuris II', 'order' => 6],
        ];

        foreach ($weeklySchedules as $schedule) {
            Schedule::create([
                'type' => 'weekly',
                'day' => $schedule['day'],
                'time' => $schedule['time'],
                'activity' => $schedule['activity'],
                'notes' => $schedule['notes'],
                'order' => $schedule['order'],
                'is_active' => true,
            ]);
        }
    }
}
