<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentPortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student_portfolios')->insert([
            [
                'title' => 'Website Perpustakaan Digital',
                'description' => 'Proyek ini adalah pembuatan sistem perpustakaan digital yang memudahkan siswa untuk meminjam buku secara online.',
                'student_name' => 'Andi Pratama',
                'school_id' => 1,
                'is_intern_project' => true,
                'company_name' => 'Techno Library',
                'yt_embed_url' => 'https://www.youtube.com/embed/example1',
                'thumbnail' => 'https://plus.unsplash.com/premium_photo-1731690343060-65cdbebe4a13?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHwyfHx8ZW58MHx8fHx8',
                'student_instagram_url' => 'https://instagram.com/andipratama',
                'student_linkedin_url' => 'https://linkedin.com/in/andipratama',
                'student_github_url' => 'https://github.com/andipratama',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Aplikasi Absensi Berbasis QR Code',
                'description' => 'Sistem absensi yang menggunakan QR code untuk meningkatkan efisiensi dan akurasi data kehadiran.',
                'student_name' => 'Siti Nurhaliza',
                'school_id' => 1,
                'is_intern_project' => false,
                'company_name' => null,
                'yt_embed_url' => 'https://www.youtube.com/embed/example2',
                'thumbnail' => 'https://plus.unsplash.com/premium_photo-1731690343060-65cdbebe4a13?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHwyfHx8ZW58MHx8fHx8',
                'student_instagram_url' => 'https://instagram.com/sitinurhaliza',
                'student_linkedin_url' => null,
                'student_github_url' => 'https://github.com/sitinurhaliza',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sistem Informasi Akademik Sekolah',
                'description' => 'Proyek ini adalah sistem untuk mengelola data akademik seperti nilai, jadwal, dan absensi.',
                'student_name' => 'Riko Saputra',
                'school_id' => 1,
                'is_intern_project' => true,
                'company_name' => 'EduTech Solutions',
                'yt_embed_url' => 'https://www.youtube.com/embed/example3',
                'thumbnail' => 'https://plus.unsplash.com/premium_photo-1731690343060-65cdbebe4a13?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHwyfHx8ZW58MHx8fHx8',
                'student_instagram_url' => null,
                'student_linkedin_url' => 'https://linkedin.com/in/rikosaputra',
                'student_github_url' => 'https://github.com/rikosaputra',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Website Profil UMKM',
                'description' => 'Membantu UMKM membuat website profil untuk mempromosikan produk mereka secara online.',
                'student_name' => 'Lisa Rahmawati',
                'school_id' => 1,
                'is_intern_project' => false,
                'company_name' => null,
                'yt_embed_url' => 'https://www.youtube.com/embed/example4',
                'thumbnail' => 'https://plus.unsplash.com/premium_photo-1731690343060-65cdbebe4a13?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHwyfHx8ZW58MHx8fHx8',
                'student_instagram_url' => 'https://instagram.com/lisarahmawati',
                'student_linkedin_url' => 'https://linkedin.com/in/lisarahmawati',
                'student_github_url' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Aplikasi Manajemen Tugas Siswa',
                'description' => 'Sebuah aplikasi untuk memonitor dan mengelola tugas siswa secara terorganisir.',
                'student_name' => 'Dani Kurniawan',
                'school_id' => 1,
                'is_intern_project' => true,
                'company_name' => 'TaskManager Inc.',
                'yt_embed_url' => 'https://www.youtube.com/embed/example5',
                'thumbnail' => 'https://plus.unsplash.com/premium_photo-1731690343060-65cdbebe4a13?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHwyfHx8ZW58MHx8fHx8',
                'student_instagram_url' => null,
                'student_linkedin_url' => null,
                'student_github_url' => 'https://github.com/danikurniawan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
