@extends('tic.master')

@section('name_page')
<?php $page="data"; ?>
@endsection

@section('konten')
<section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Data Penduduk</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Status Perkawinan</th>
                    <th>Pekerjaan</th>
                    <th>Status Kewarganegaraan</th>
                    <th>Tempat/Tanggal Lahir</th>
                    <th>Gologan Darah</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($datas as $key=>$value)
                  <tr>
                  	<td>{{ $key+1 }}</td>
                  	<td>{{ $value->nama }}</td>
                  	<td>{{ $value->nik }}</td>
                  	<td>{{ $value->gender }}</td>
                  	<td>{{ $value->alamat }}</td>
                  	<td>{{ $value->status }}</td>
                    <td>{{ $value->pekerjaan }}</td>
                    <td>{{ $value->kewarganegaraan }}</td>
                    <td>{{ $value->tempat_lahir }}<br>{{ $value->tanggal_lahir }}</td>
                    <td>{{ $value->goldar }}</td>
                    <td>
                      <a href="{{ url('penduduk/'.$value->id.'/edit') }}"><button class="btn btn-warning"><i class='fas fa-pen'></i></button></a>
                      <form action="{{ url('penduduk/'.$value->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger" type="submit"><i class='fas fa-trash'></i></button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Status Perkawinan</th>
                    <th>Pekerjaan</th>
                    <th>Status Kewarganegaraan</th>
                    <th>Tempat/Tanggal Lahir</th>
                    <th>Gologan Darah</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
      </div><!--/. container-fluid -->
    </section>
@endsection