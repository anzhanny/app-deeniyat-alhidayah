@extends('layouts.layout')
@section('content')
      <div class="row">
        <div class="col-12">
          
          <div class="card mb-4">
          
            <div class="card-header pb-0">
              <div class="d-flex justify-content-between mb-0">
              <!-- tambah data -->
              <a href="{{ route('teacherdata.create') }}">
                <button class="btn btn-primary">
                  <i class="ni ni-fat-add"></i> Tambah Data
                </button>
              </a>
                  <button class="btn btn-success">
                    <i class="ni ni-cloud-download-95"></i> Download File
                  </button>
              </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table text-center align-items-center mb-0"> 
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-dark text-xs font-weight-bolder opacity-7">Nama Guru</th>
                      <th id="sortNis" onclick="sortTable(2)" style="cursor:pointer;" class="text-center text-uppercase text-dark text-xs font-weight-bolder opacity-7">Kelas diampu ↑↓</th>
                      <th class="text-center text-uppercase text-dark text-xs font-weight-bolder opacity-7">No Telp</th>
                      <th class="text-center text-uppercase text-dark text-xs font-weight-bolder opacity-7">Email</th>
                      <th  class="text-center text-uppercase text-dark text-xs font-weight-bolder opacity-7">Jenis Kelamin</th>
                      <th class="text-center text-uppercase text-dark text-xs font-weight-bolder opacity-7">Tanggal Lahir</th>
                      <th id="sortKelas" onclick="sortTable(6)" style="cursor:pointer;" class="text-center text-uppercase text-dark text-xs font-weight-bolder opacity-7">Pendidikan</th>
                      <th id="sortKelas" onclick="sortTable(7)" style="cursor:pointer;"  class="text-center text-uppercase text-dark text-xs font-weight-bolder opacity-7">Status ↑↓</th>
                      <th  class="text-center text-uppercase text-dark text-xs font-weight-bolder opacity-7">Foto</th>
                      <th class="text-center text-dark text-uppercase text-xs font-weight-bolder opacity-7">Aksi</th>
                    </tr>
                  </thead>

                  <tbody>
  <tr>
    <td class="align-middle text-center text-sm">Ust. Hasan Basri</td>
    <td class="align-middle text-center text-sm">VII A</td>
    <td class="align-middle text-center text-sm">081234567890</td>
    <td class="align-middle text-center text-sm">hasan.basri@guru.madrasah.sch.id</td>
    <td class="align-middle text-center text-sm">Laki-laki</td>
    <td class="align-middle text-center text-sm">1979-04-17</td>
    <td class="align-middle text-center text-sm">S1 Pendidikan Agama</td>
    <td class="align-middle text-center text-sm">
      <span class="badge badge-sm bg-gradient-success">Aktif</span>
    </td>
    <td class="align-middle text-center text-sm">
      <img src="foto/hasan_basri.jpg" alt="Foto Hasan" width="40" height="40" class="rounded-circle">
    </td>
    <td class="align-middle">
      <button type="button" class="btn btn-primary btn-icon btn-sm p-1" style="width: 30px; height: 30px;" title="Edit Guru">
        <a href="javascript:;" class="text-white font-weight-bold text-xs">
          <i class="fa fa-edit pt-1" aria-hidden="true"></i>
        </a>
      </button>
      <button type="button" class="btn btn-danger btn-icon btn-sm p-1" style="width: 30px; height: 30px;" title="Hapus Guru">
        <a href="javascript:;" class="text-white font-weight-bold text-xs">
          <i class="fa fa-trash pt-1" aria-hidden="true"></i>
        </a>
      </button>
    </td>
  </tr>

  <tr>
    <td class="align-middle text-center text-sm">Ustadzah Laila Khairunisa</td>
    <td class="align-middle text-center text-sm">IX B</td>
    <td class="align-middle text-center text-sm">085612345678</td>
    <td class="align-middle text-center text-sm">laila.khairunisa@guru.madrasah.sch.id</td>
    <td class="align-middle text-center text-sm">Perempuan</td>
    <td class="align-middle text-center text-sm">1988-08-21</td>
    <td class="align-middle text-center text-sm">S1 Pendidikan Bahasa Arab</td>
    <td class="align-middle text-center text-sm">
      <span class="badge badge-sm bg-gradient-success">Aktif</span>
    </td>
    <td class="align-middle text-center text-sm">
      <img src="foto/laila_khairunisa.jpg" alt="Foto Laila" width="40" height="40" class="rounded-circle">
    </td>
    <td class="align-middle">
      <button type="button" class="btn btn-primary btn-icon btn-sm p-1" style="width: 30px; height: 30px;" title="Edit Guru">
        <a href="javascript:;" class="text-white font-weight-bold text-xs">
          <i class="fa fa-edit pt-1" aria-hidden="true"></i>
        </a>
      </button>
      <button type="button" class="btn btn-danger btn-icon btn-sm p-1" style="width: 30px; height: 30px;" title="Hapus Guru">
        <a href="javascript:;" class="text-white font-weight-bold text-xs">
          <i class="fa fa-trash pt-1" aria-hidden="true"></i>
        </a>
      </button>
    </td>
  </tr>

  <tr>
    <td class="align-middle text-center text-sm">Ust. Zulfikar Alim</td>
    <td class="align-middle text-center text-sm">VIII C</td>
    <td class="align-middle text-center text-sm">089912345678</td>
    <td class="align-middle text-center text-sm">zulfikar.alim@guru.madrasah.sch.id</td>
    <td class="align-middle text-center text-sm">Laki-laki</td>
    <td class="align-middle text-center text-sm">1983-12-09</td>
    <td class="align-middle text-center text-sm">S2 Pendidikan Bahasa Inggris</td>
    <td class="align-middle text-center text-sm">
      <span class="badge badge-sm bg-gradient-warning">Tidak Aktif</span>
    </td>
    <td class="align-middle text-center text-sm">
      <img src="foto/zulfikar_alim.jpg" alt="Foto Zulfikar" width="40" height="40" class="rounded-circle">
    </td>
    <td class="align-middle">
      <button type="button" class="btn btn-primary btn-icon btn-sm p-1" style="width: 30px; height: 30px;" title="Edit Guru">
        <a href="javascript:;" class="text-white font-weight-bold text-xs">
          <i class="fa fa-edit pt-1" aria-hidden="true"></i>
        </a>
      </button>
      <button type="button" class="btn btn-danger btn-icon btn-sm p-1" style="width: 30px; height: 30px;" title="Hapus Guru">
        <a href="javascript:;" class="text-white font-weight-bold text-xs">
          <i class="fa fa-trash pt-1" aria-hidden="true"></i>
        </a>
      </button>
    </td>
  </tr>
</tbody>


                </table>
              </div>
            </div>
          </div>
                      
          <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-end">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">
                    <i class="fa fa-angle-left"></i>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">
                    <i class="fa fa-angle-right"></i>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>

        </div>
      </div>

      <script>
        let sortDirection = {};

        function sortTable(columnIndex) {
          const table = document.querySelector("table");
          const rows = Array.from(table.querySelectorAll("tbody tr"));

          // Toggle sort direction
          sortDirection[columnIndex] = !sortDirection[columnIndex];
          const direction = sortDirection[columnIndex] ? 1 : -1;

          rows.sort((a, b) => {
            const cellA = a.children[columnIndex].textContent.trim().toLowerCase();
            const cellB = b.children[columnIndex].textContent.trim().toLowerCase();

            return cellA.localeCompare(cellB) * direction;
          });

          // Hapus dan masukkan ulang baris yang sudah diurut
          const tbody = table.querySelector("tbody");
          tbody.innerHTML = "";
          rows.forEach(row => tbody.appendChild(row));
        }
      </script>

      @endsection