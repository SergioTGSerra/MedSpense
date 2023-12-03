<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $doctorUser = \App\Models\User::create([
            'user_id' => Str::uuid(),
            'name' => 'Sergio Serra',
            'email' => 'sergioserra@ipvc.pt',
            'nif' => fake()->unique()->randomNumber(9),
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'user_type' => 'Doctor',
            'birth_date' => '1990-01-01',
            'gender' => 'Male',
            'phone_number' => '123-456-7890',
            'address' => '123 Main St',
            'emergency_contact' => 'Jane Doe (123-789-4560)',
            'remember_token' => Str::random(10),
        ]);

        $patientUser = \App\Models\User::create([
            'user_id' => Str::uuid(),
            'name' => 'Sergio Tiago',
            'email' => 'sergioserra.2003@gmail.com',
            'nif' => fake()->unique()->randomNumber(9),
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'user_type' => 'Patient',
            'birth_date' => '1990-01-01',
            'gender' => 'Male',
            'phone_number' => '123-456-7890',
            'address' => '123 Main St',
            'emergency_contact' => 'Jane Doe (123-789-4560)',
            'remember_token' => Str::random(10),
        ]);

        \App\Models\Doctor::create([
            'doctor_id' => $doctorUser->user_id,
            'specialty' => 'General Medicine',
            'admission_date' => '2021-01-01',
        ]);

        \App\Models\Patient::create([
            'patient_id' => $patientUser->user_id,
            'blood_type' => 'A+',
            'medical_history' => 'No medical history',
            'insurance_information' => 'No insurance',
        ]);

        $appointment = \App\Models\Appointment::create([
            'appointment_id' => Str::uuid(),
            'doctor_id' => $doctorUser->user_id,
            'patient_id' => $patientUser->user_id,
            'diagnosis' => 'No diagnosis',
            'prescription' => 'No prescription',
            'notes' => 'No notes',
            'appointment_date' => '2021-01-01 10:00:00',
        ]);

        \App\Models\Invoice::create([
            'invoice_id' => Str::uuid(),
            'status' => 'Unpaid',
            'payment_date' => '2021-01-01',
            'payment_method' => 'Cash',
            'total' => 10,
            'patient_id' => $patientUser->user_id,
            'appointment_id' => $appointment->appointment_id,
        ]);
        
    }
}
