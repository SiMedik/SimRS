<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Data Pegawai</small></h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Input data pegawai</h2>
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
            <form action="<?php echo base_url('bo/pegawai/aksi_tambah') ?>" method="post" enctype="multipart/form-data" role="form" data-parsley-validate="" class="form-horizontal form-label-left">
               <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Masukkan Foto <span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="file"  name="filefoto" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Masukkan Nama Lengkap <span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text"  name="nama_pegawai" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Jenis Kelamin<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select class="select2_single form-control" name="jk">
                    <option>-Pilih Jenis Kelamin-</option>
                    <option value="Laki-laki" >Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="first-name">Tempat Lahir <span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" name="tempat_lahir" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal Lahir<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="date" name="tgl_lahir" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor Induk Kependudukan<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" name="nik" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor Induk Pegawai<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" name="nip" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12">Agama</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select class="select2_single form-control" name="agama">
                    <option>-Pilih agama-</option>
                    <option value="Islam">Islam</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Kristen">Kristen</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12">Pendidikan Terakhir</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select class="select2_single form-control" name="pendidikan_terakhir">
                    <option>-Pilih Pendidikan Terakhir-</option>
                    <option value="SD Sederajat">SD Sederajat</option>
                    <option value="SMP Sederajat">SMP Sederajat</option>
                    <option value="SMA Sederajat">SMA Sederajat</option>
                    <option value="D1">D1</option>
                    <option value="D2">D2</option>
                    <option value="D3">D3</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                  </select>
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" name="alamat" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">No.Handphone<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="number" name="no_hp" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12">Jabatan</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select class="select2_single form-control" name="jabatan">
                    <option>Pilih jabatan</option>
                    <?php 
                    foreach($tb_jabatan as $l){
                    ?>
                    <option value="<?php echo $l->nama_jabatan?>"><?php echo $l->nama_jabatan?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12">Pangkat</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select class="select2_single form-control" name="pangkat">
                    <option>Pilih Pangkat</option>
                    <?php 
                    foreach($tb_jenjang as $l){
                    ?>
                    <option value="<?php echo $l->nama_jenjang?>"><?php echo $l->nama_jenjang?></option>
                    <?php } ?>
                  </select>
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
