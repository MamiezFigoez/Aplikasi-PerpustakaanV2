@extends("template.main")
@section("content")

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2" style="font-family: cursive;font-weight: bold;">Laporan Pengembalian</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
    </div>
  </div>

  <div class="w3-container d-flex justify-content-between w-100">
   <div class="w-100 mt-3">
    <form class="d-flex" role="search">
      <input class="form-control w-100" type="search" value="{{ (request()->exists('key'))? request('key'):'' }}" placeholder="Pencarian ..." aria-label="Search" name="key" autocomplete="off">
      <button class="btn btn-outline-success" type="submit">Cari</button>
    </form>

    <div class="d-flex w-100">
      <a href="./laporan-pengembalian/create{{ (request()->exists('key'))? '?key=' . request('key'):'' }}" class="btn btn-warning mt-2"><i class="fa-solid fa-print me-2"></i> Buat Laporan</a>
    </div>

    <div class="w-100" style="overflow-x: auto;">
      <table class="table table-bordered mt-4 text-center">
        <thead>
          <tr class="bg-dark text-light">
            <th scope="col">Pengembalian ID</th>
            <th scope="col">Trans Pinjam</th>
            <th scope="col">User ID</th>
            <th scope="col">Denda</th>
            <th scope="col">Tanggal Peminjaman</th>
            <th scope="col">Tanggal Pengembalian</th>
          </tr>
        </thead>
        <tbody>
          @foreach($pengembalians as $kembali)
          <tr>
            <td scope="col">{{ $kembali->pengembalianId }}</td>
            <td scope="col">{{ $kembali->transpinjam }}</td>
            <td scope="col">{{ $kembali->userId }}</td>
            <td scope="col">Rp. {{ $kembali->denda }}</td>
            <td scope="col">{{ $kembali->tglPinjam }}</td>
            <td scope="col">{{ $kembali->tglKembali }}</td>
          </tr>
          @endForeach
        </tbody>
      </table>
    </div>


    <div class="container-fluid justify-content-end d-flex mt-4 mb-3">
      {{ $pengembalians->links() }}
    </div>
  </div>
</div>
</div>
</div>

</div>
</main>


@endSection