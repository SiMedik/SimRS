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
            <h2>Ubah data pegawai</h2>
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
            <?php foreach($tb_pegawai as $l){?>
            <form action="<?php echo base_url('fo/pegawai/update') ?>" method="post" enctype="multipart/form-data" role="form" data-parsley-validate="" class="form-horizontal form-label-left">
               <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Masukkan Foto <span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <img width="65px" height="70px" src="<?php echo base_url ('upload/foto_pegawai/'.$l->foto); ?> ">
                  <br>
                  <input type="hidden" value="<?php echo $l->id_pegawai?>" name="id_pegawai" class="form-control col-md-7 col-xs-12">
                  <input type="file" value="<?php echo $l->foto?>" name="filefoto" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Masukkan Nama Lengkap <span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" value="<?php echo $l->nama_pegawai?>"  name="nama_pegawai" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Jenis Kelamin<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select class="select2_single form-control" name="jk">
                    <option></option>
                    <option value="Laki-laki" <?php $l->jk == 'Laki-laki' ? print "selected" : "" ?>>Laki-laki</option>
                    <option value="Perempuan" <?php $l->jk == 'Perempuan' ? print "selected" : "" ?>>Perempuan</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="first-name">Tempat Lahir <span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" value="<?php echo $l->tempat_lahir?>" name="tempat_lahir" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal Lahir<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="date" value="<?php echo $l->tgl_lahir?>" name="tgl_lahir" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor Induk Kependudukan<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" value="<?php echo $l->nik?>" name="nik" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="first-name">Nomor Induk Pegawai<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" value="<?php echo $l->nip?>" name="nip" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12">Agama</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select class="select2_single form-control" name="agama">
                    <option>-Pilih agama-</option>
                    <option value="Islam" <?php $l->agama == 'Islam' ? print "selected" : "" ?>>Islam</option>
                    <option value="Hindu" <?php $l->agama == 'Hindu' ? print "selected" : "" ?>>Hindu</option>
                    <option value="Budha" <?php $l->agama == 'Budha' ? print "selected" : "" ?>>Budha</option>
                    <option value="Kristen" <?php $l->agama == 'Kristen' ? print "selected" : "" ?>>Kristen</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12">Pendidikan Terakhir</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select class="select2_single form-control" name="pendidikan_terakhir">
                    <option></option>
                    <option value="SD Sederajat" <?php $l->pendidikan_terakhir == 'SD Sederajat' ? print "selected" : "" ?>>SD Sederajat</option>
                    <option value="SMP Sederajat" <?php $l->pendidikan_terakhir == 'SMP Sederajat' ? print "selected" : "" ?>>SMP Sederajat</option>
                    <option value="SMA Sederajat" <?php $l->pendidikan_terakhir == 'SMA Sederajat' ? print "selected" : "" ?>>SMA Sederajat</option>
                    <option value="D1" <?php $l->pendidikan_terakhir == 'D1' ? print "selected" : "" ?>>D1</option>
                    <option value="D2" <?php $l->pendidikan_terakhir == 'D2' ? print "selected" : "" ?>>D2</option>
                    <option value="D3" <?php $l->pendidikan_terakhir == 'D3' ? print "selected" : "" ?>>D3</option>
                    <option value="S1" <?php $l->pendidikan_terakhir == 'S1' ? print "selected" : "" ?>>S1</option>
                    <option value="S2" <?php $l->pendidikan_terakhir == 'S2' ? print "selected" : "" ?>>S2</option>
                    <option value="S3" <?php $l->pendidikan_terakhir == 'S3' ? print "selected" : "" ?>>S3</option>
                  </select>
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" value="<?php echo $l->alamat?>" name="alamat" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">No.Handphone<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="number" value="<?php echo $l->no_hp?>" name="no_hp" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12">Jabatan</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select class="select2_single form-control" name="jabatan">
                    <option>Pilih jabatan</option>
                    <?php 
                    foreach($tb_jabatan as $k){
                    ?>
                    <option value="<?php echo $k->nama_jabatan?>" <?php $k->nama_jabatan == $k->nama_jabatan ? print "selected" : "" ?>><?php echo $k->nama_jabatan?></option>
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
                    foreach($tb_jenjang as $k){
                    ?>
                    <option value="<?php echo $k->nama_jenjang?>" <?php $k->nama_jenjang == $k->nama_jenjang ? print "selected" : "" ?>><?php echo $k->nama_jenjang?></option>
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
          <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
