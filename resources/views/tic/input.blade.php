@extends('tic.master')

@section('name_page')
<?php $page="input"; ?>
@endsection

@section('konten')
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <!-- <div class="col-md-6"> -->
        <form action="{{ url('penduduk') }}" method="POST">
          @csrf
          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">Tabel Input</h3>
            </div>
            <div class="card-body">
              <!-- Date dd/mm/yyyy -->
              <div class="form-group">
                <label>Nama Lengkap</label>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                  </div>
                  <input type="text" name="nama" class="form-control" required>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <!-- phone mask -->
              <div class="form-group">
                <label>NIK</label>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                  </div>
                  <input type="number" name="nik" class="form-control" required>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              
              <div class="row">
                <div class="col-sm-6">
                  <!-- radio -->
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" value="Laki-laki" checked required>
                      <label class="form-check-label">Laki-laki</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" value="Perempuan">
                      <label class="form-check-label">Perempuan</label>
                    </div>
                  </div>
                </div>
			        </div>
              
              <div class="form-group">
                <label>Alamat</label>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-home"></i></span>
                  </div>
                  <input type="text" name="alamat" class="form-control" required>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              
              <div class="form-group">
                <label>Status Perkawinan</label>
                  <select class="form-control select2bs4" name="status" style="width: 100%;" required>
                    <option value = "Menikah" selected="selected">Menikah</option>
                    <option value = "Belum Menikah">Belum Menikah</option>
                    <option value = "Cerai">Cerai</option>
                  </select>
                <!-- </div> -->
                <!-- /.input group -->
              </div>
              
              <div class="form-group">
                <label>Pekerjaan</label>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                  </div>
                  <input type="text" name="pekerjaan" class="form-control" required>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              
              <div class="row">
                <div class="col-sm-6">
                  <!-- radio -->
                  <div class="form-group">
                    <label>Status Kewarganegaraan</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="kewarganegaraan" value="WNI" checked required>
                      <label class="form-check-label">WNI</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="kewarganegaraan" value="WNA">
                      <label class="form-check-label">WNA</label>
                    </div>
                  </div>
                </div>
			        </div>
              
              <div class="form-group">
                <label>Tempat Lahir</label>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-hotel"></i></span>
                  </div>
                  <input type="text" name="tempatLahir" class="form-control" required>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              
              <!-- Date mm/dd/yyyy -->
              <div class="form-group">
                <label>Tanggal Lahir</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                  </div>
                  <input type="date" name="tgl_lahir" class="form-control" required>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <div class="form-group">
                <label>Gologan Darah</label>
                  <select class="form-control select2bs4" name="goldar" style="width: 100%;" required>
                    <option value = "A" selected="selected">A</option>
                    <option value = "B">B</option>
                    <option value = "O">O</option>
                    <option value = "AB">AB</option>
                  </select>
                <!-- </div> -->
                <!-- /.input group -->
              </div>
              
              <button class="btn btn-primary" type="submit" name="input">Input</button>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        <!-- </div> -->
        </form>
      </div><!--/. container-fluid -->
    </section>
@endsection