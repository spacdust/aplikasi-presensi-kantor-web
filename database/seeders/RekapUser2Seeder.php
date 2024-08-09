<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Presence;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RekapUser2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Presence::factory(1)->createMany([
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-10-1'),
                "presence_enter_time" => Carbon::parse('08:10:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Terlambat",
                "working_hours" => Carbon::parse('08:20:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-10-4'),
                "presence_enter_time" => Carbon::parse('07:35:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:55:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-10-5'),
                "presence_enter_time" => Carbon::parse('07:35:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:55:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-10-6'),
                "presence_enter_time" => Carbon::parse('07:35:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:55:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-10-7'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-10-8'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],

            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-10-11'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-10-12'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-10-13'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-10-14'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-10-15'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-10-18'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-10-19'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-10-20'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-10-21'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-10-22'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-10-25'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-10-26'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-10-27'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-10-28'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-10-29'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-10-31'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
        ]);

        Presence::factory(1)->createMany([

            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-11-3'),
                "presence_enter_time" => Carbon::parse('07:35:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:55:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-11-6'),
                "presence_enter_time" => Carbon::parse('07:35:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:55:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-11-7'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-11-8'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-11-9'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-11-10'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-11-13'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],

            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-11-14'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-11-15'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-11-16'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-11-17'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-11-20'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-11-21'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-11-22'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-11-23'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-11-24'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-11-27'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-11-28'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-11-29'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-11-30'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
        ]);

        Presence::factory(1)->createMany([
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-12-1'),
                "presence_enter_time" => Carbon::parse('07:35:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:55:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-12-4'),
                "presence_enter_time" => Carbon::parse('07:35:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:55:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-12-5'),
                "presence_enter_time" => Carbon::parse('07:35:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:55:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-12-6'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-12-7'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-12-8'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-12-11'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-12-12'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-12-13'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-12-14'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-12-15'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-12-18'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-12-19'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-12-20'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-12-21'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-12-22'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-12-26'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-12-27'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-12-28'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2023-12-29'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
        ]);
        Presence::factory(1)->createMany([
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2024-1-2'),
                "presence_enter_time" => Carbon::parse('07:35:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:55:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2024-1-3'),
                "presence_enter_time" => Carbon::parse('07:35:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:55:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2024-1-4'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2024-1-5'),
                "presence_enter_time" => Carbon::parse('07:35:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('07:35:00'),
                "is_permission" => 1,
                "status" => "Izin",
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2024-1-8'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2024-1-9'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2024-1-10'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2024-1-11'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2024-1-12'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2024-1-15'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2024-1-16'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2024-1-17'),
                "presence_enter_time" => Carbon::parse('07:36:00')->format('H:i:s'),
                "presence_out_time" => Carbon::parse('16:30:00'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
                "working_hours" => Carbon::parse('08:54:00')
            ],
            [
                "user_id" => 2,
                "attendance_id" => 1,
                "presence_date" => Carbon::parse('2024-1-18'),
                "presence_enter_time" => Carbon::parse('07:40:00')->format('H:i:s'),
                "is_permission" => 0,
                "status" => "Tepat Waktu",
            ],
        ]);
    }
}
