@extends('layouts.app')

@section('content')

  <style>
    .container {
    max-width: 1200px;
    margin: auto;
    }

    h3 a {
    text-decoration: none;
    color: #007bff;
    font-weight: bold;
    }

    h3 a:hover {
    text-decoration: underline;
    }

    .card {
    border-radius: 8px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card input,
    .card select {
    border-radius: 6px;
    }

    .btn-primary {
    background-color: #007bff;
    border: none;
    }

    .btn-primary:hover {
    background-color: #0056b3;
    }

    .table {
    border-radius: 6px;
    overflow: hidden;
    }

    .table thead {
    background-color: #007bff;
    color: white;
    }

    .table tbody tr:hover {
    background-color: #f2f2f2;
    cursor: pointer;
    }

    .cursor-pointer {
    cursor: pointer;
    }
  </style>

  <div class="d-flex align-items-center mb-4 border-bottom-line">
    <h3 class="me-auto">
    <a href="{{ route('admin') }}"> <i class="fas fa-list me-3"></i>Home</a> /
    <a href="{{ route('konseling_lanjutan') }}">Konseling Lanjutan</a>
    </h3>
    <a href="#" onclick="confirmLogout()">
    <i class="fas fa-sign-out-alt fs-5 cursor-pointer" title="Logout"></i>
    </a>
  </div>

  <h4 class="text-primary">Mahasiswa Aktif TA 2024</h4>

  <div class="card p-3 mb-3">
    <form>
    <div class="row">
      <div class="col-md-3">
      <label>NIM</label>
      <input type="text" class="form-control" placeholder="NIM">
      </div>
      <div class="col-md-3">
      <label>Nama</label>
      <input type="text" class="form-control" placeholder="Nama">
      </div>
      <div class="col-md-3">
      <label>Angkatan</label>
      <select class="form-control">
        <option>Angkatan</option>
      </select>
      </div>
      <div class="col-md-3">
      <label>Prodi</label>
      <select class="form-control">
        <option>Program Studi</option>
      </select>
      </div>
    </div>
    <div class="row mt-2">
      <div class="col-md-3">
      <label>Kelas</label>
      <select class="form-control">
        <option>Kelas</option>
      </select>
      </div>
      <div class="col-md-3">
      <label>Wali</label>
      <select class="form-control">
        <option>Wali</option>
      </select>
      </div>
      <div class="col-md-3 d-flex align-items-end">
      <button type="submit" class="btn btn-primary me-2">Cari</button>
      <button type="reset" class="btn btn-secondary">Hapus</button>
      </div>
    </div>
    </form>
  </div>

  <table class="table table-striped">
    <thead>
    <tr>
      <th>#</th>
      <th>NIM</th>
      <th>Nama Mahasiswa</th>
      <th>Tahun Masuk</th>
      <th>Program Studi</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td>1</td>
      <td>11S19027</td>
      <td>Darel Deonaldo Aloysius Pinem</td>
      <td>2019</td>
      <td>S1 Informatika</td>
    </tr>
    <tr>
      <td>2</td>
      <td>11S19050</td>
      <td>Risky Junior Martua Panggabean</td>
      <td>2019</td>
      <td>S1 Informatika</td>
    </tr>
    <tr>
      <td>3</td>
      <td>11S19055</td>
      <td>Kartika Novia Hutarauk</td>
      <td>2019</td>
      <td>S1 Informatika</td>
    </tr>
    </tbody>
  </table>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    function confirmLogout() {
    Swal.fire({
      title: 'Apakah anda yakin ingin keluar?',
      text: "Anda akan keluar dari akun ini.",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Ya, keluar!',
      cancelButtonText: 'Tidak',
      reverseButtons: true
    }).then((result) => {
      if (result.isConfirmed) {
      window.location.href = '{{ route('logout') }}'; // Arahkan ke route logout jika 'Ya' dipilih
      }
    });
    }
  </script>
@endsection