@php
    // Daftar nama halaman berdasarkan route name (semua role)
    $breadcrumbs = [
        // Admin
        'admin.dashboard' => 'Dashboard',
        'admin.studentdata' => 'Data Siswa',
        'admin.studentdata.create' => 'Tambah Data Siswa',

        'admin.classdata.classdata' => 'Data Kelas',
        'admin.classdata.create' => 'Tambah Data Kelas',

        'admin.teacherdata' => 'Data Guru',
        'admin.teacherdata.create' => 'Tambah Data Guru',

        'admin.sppdata' => 'Data Pembayaran SPP',
        'admin.sppdata.create' => 'Tambah Data Pembayaran SPP',

        'admin.reportcarddata' => 'Data Raport',
        'admin.reportcarddata.create' => 'Tambah Data Raport',

        'admin.materialdata' => 'Data Materi',
        'admin.materialdata.create' => 'Tambah Data Materi',
        
        
        // Teacher
        'teacher.dashboard' => 'Dashboard',
        'teacher.studentdata' => 'Data Siswa',
        'teacher.reportcarddata' => 'Data Pengisian Raport',

        // Student
        'student.dashboard' => 'Dashboard',
        'student.sppdata' => 'Pembayaran SPP',
        'student.reportcarddata' => 'Laporan Hasil Belajar (Raport)',



        // Umum
        'profile' => 'Profile'
    ];

    // Ambil nama route saat ini
    $currentRoute = Route::currentRouteName();

    // Ambil nama halaman berdasarkan daftar, fallback ke 'Page' jika tidak ditemukan
    $breadcrumbText = $breadcrumbs[$currentRoute] ?? 'Page';
@endphp

<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm">
            <a class="opacity-5 text-white" href="javascript:;">Pages</a>
        </li>
        <li class="breadcrumb-item text-sm text-white active" aria-current="page">
            {{ $breadcrumbText }}
        </li>
    </ol>
    <h5 class="font-weight-bolder text-white mb-0">{{ $breadcrumbText }}</h5>
</nav>
