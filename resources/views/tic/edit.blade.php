@extends('tic.master')

@section('name_page')
<?php $page="data"; ?>
@endsection

@section('konten')
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <!-- <div class="col-md-6"> -->
        <form action="{{ url('penduduk/'.$model->id) }}" method="POST">
          @csrf
          <input type="hidden" name="_method" value="PATCH">
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
                  <input type="text" name="nama" class="form-control" value='{{ $model->nama }}' required>
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
                  <input type="number" name="nik" class="form-control" value='{{ $model->nik }}' required>
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
                      <input class="form-check-input" type="radio" name="gender" value="Laki-laki"
                      @if($model->gender == 'Laki-laki')
                        checked
                        @endif
                        required>
                        <label class="form-check-label">Laki-laki</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="Perempuan"
                        @if($model->gender == 'Perempuan')
                          checked
                        @endif
                        >
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
                  <input type="text" name="alamat" class="form-control" value='{{ $model->alamat }}' required>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              
              <div class="form-group">
                <label>Status Perkawinan</label>
                  <select class="form-control select2bs4" name="status" style="width: 100%;" required>
                    <option value = "Menikah" <?php if($model->status == 'Menikah') echo'selected';?>>Menikah</option>
                    <option value = "Belum Menikah" <?php if($model->status == 'Belum Menikah') echo'selected';?>>Belum Menikah</option>
                    <option value = "Cerai" <?php if($model->status == 'Cerai') echo'selected';?>>Cerai</option>
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
                  <input type="text" name="pekerjaan" class="form-control" value='{{ $model->pekerjaan }}' required>
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
                      <input class="form-check-input" type="radio" name="kewarganegaraan" value="WNI" <?php if($model->kewarganegaraan == 'WNI') echo'checked';?> required>
                      <label class="form-check-label">WNI</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="kewarganegaraan" value="WNA" <?php if($model->kewarganegaraan == 'WNA') echo'checked';?>>
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
                  <input type="text" name="tempatLahir" class="form-control" value='{{ $model->tempat_lahir }}' required >
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
                  <input type="date" name="tgl_lahir" class="form-control" value='{{ $model->tanggal_lahir }}' required>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <div class="form-group">
                <label>Gologan Darah</label>
                  <select class="form-control select2bs4" name="goldar" style="width: 100%;" required>
                    <option value = "A" <?php if($model->goldar == 'A') echo'selected';?>>A</option>
                    <option value = "B" <?php if($model->goldar == 'B') echo'selected';?>>B</option>
                    <option value = "O" <?php if($model->goldar == 'O') echo'selected';?>>O</option>
                    <option value = "AB" <?php if($model->goldar == 'AB') echo'selected';?>>AB</option>
                  </select>
                <!-- </div> -->
                <!-- /.input group -->
              </div>
              
              <button class="btn btn-primary" type="submit" name="input">Edit</button>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        <!-- </div> -->
        </form>
      </div><!--/. container-fluid -->
    </section>
@endsection