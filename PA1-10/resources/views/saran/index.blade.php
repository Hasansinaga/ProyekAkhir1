@extends('admin.master')

@section('title')
    Saran
@endsection

@push('css')
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css" rel="stylesheet" />
@endpush

@push('js')
    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                language: {
                    search: "Cari:",
                    zeroRecords: "Data tidak ditemukan",
                    info: "Menampilkan _START_ hingga _END_ dari _TOTAL_ entri",
                    infoEmpty: "Tidak ada data yang tersedia",
                    infoFiltered: "(disaring dari total _MAX_ entri)",
                    paginate: {
                        first: "Pertama",
                        last: "Terakhir",
                        next: "Selanjutnya",
                        previous: "Sebelumnya"
                    }
                }
            });
        });
    </script>
@endpush

@section('content')

<div class="container">
    <table class="table table-bordered table-striped" id="myTable" style="max-width: 100%;">
        <thead>
            <tr>
                <th style="width: 10%">Nama</th>
                <th style="width: 60%">Saran</th>
                <th style="width: 15%">Tanggal Update</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($saran as $key => $item)
                <tr>
                    <td>{{ $item->masyarakat->name }}</td>
                    <td class="text-wrap">{{($item->saran)}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td><form action="{{ route('saranDelete', $item->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button   class="btn btn-danger">Hapus</button>
                   </form></td>
                </tr>
            @empty
                <tr>
                    <td colspan="2">Data Tidak Ada</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
