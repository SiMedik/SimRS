<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Data Dokter</small></h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Input Data Dokter</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br>
            <form action="<?php echo base_url('fo/dokter/aksi_tambah') ?>" method="post" enctype="multipart/form-data" role="form" data-parsley-validate="" class="form-horizontal form-label-left">
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Dokter <span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text"  name="nama_dokter" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">No. Izin Praktek <span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text"  name="no_izin_praktek" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Spesialis<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select class="select2_single form-control" name="spesialis">
                    <option>Pilih Spesialis</option>
                    <option value="Spesialis Penyakit Dalam">Spesialis Penyakit Dalam</option>
                    <option value="Spesialis Anaka"> Spesialis Anak</option>
                    <option value="Spesialis Gigi"> Spesialis Gigi</option>
                    <option value="Spesialis Anastesi"> Spesialis Anastesi</option>
                    <option value="Spesialis Andrologi"> Spesialis Andrologi</option>
                    <option value="Spesialis Bedah"> Spesialis Bedah</option>
                    <option value="Spesialis Mulut"> Spesialis Mulut</option>
                    <option value="Spesialis Bedah Plastik"> Spesialis Bedah Plastik</option>
                    <option value="Spesialis Bedah Saraf"> Spesialis Bedah Saraf</option>
                    <option value="Spesialis THT"> Spesialis THT</option>
                    <option value="Spesialis Akupasi"> Spesialis Akupasi</option>
                    <option value="Spesialis Radiologi"> Spesialis Radiologi</option>
                    <option value="Spesialis Geriatri"> Spesialis Geriatri</option>
                    <option value="Spesialis Urologi"> Spesialis Urologi</option>
                    <option value="Spesialis Jantung dan Pembuluh Darah"> Spesialis Jantung dan Pembuluh Darah</option>
                  </select>
                </div>
              </div>
               <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Alumni<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text"  name="alumni" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">No. Handphone<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text"  name="no_hp" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text"  name="alamat" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                  <button class="btn btn-primary" type="button">Kembali</button>
                  <button class="btn btn-primary" type="reset">Batal</button>
                  <button type="submit" class="btn btn-success">Simpan</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
