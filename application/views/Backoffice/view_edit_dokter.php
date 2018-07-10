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
            <h2>Edit Data Dokter</h2>
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
          <?php foreach($tb_dokter as $ci){
          ?>
            <form action="<?php echo base_url('Backoffice/dokter/update') ?>" method="post" enctype="multipart/form-data" role="form" data-parsley-validate="" class="form-horizontal form-label-left">
               <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Dokter <span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="hidden" value="<?php echo $ci->id_dokter?>"  name="id_dokter" required="required" class="form-control col-md-7 col-xs-12">
                  <input type="text" value="<?php echo $ci->nama_dokter?>"  name="nama_dokter" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">No. Izin Praktek <span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" value="<?php echo $ci->no_izin_praktek?>"  name="no_izin_praktek" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Spesialis<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select class="select2_single form-control" name="spesialis">
                    <option>Pilih Spesialis</option>
                    <option value="Bebas" <?php $ci->kategori_dokter == 'Bebas' ? print "selected" : "" ?>>Bebas</option>
                    <option value="Spesialis Penyakit Dalam"<?php $ci->spesialis == 'Spesialis Penyakit Dalam' ? print "selected" : "" ?>>Spesialis Penyakit Dalam</option>
                    <option value="Spesialis Anak"<?php $ci->spesialis == 'Spesialis Anak' ? print "selected" : "" ?>> Spesialis Anak</option>
                    <option value="Spesialis Gigi"<?php $ci->spesialis == 'Spesialis Gigi' ? print "selected" : "" ?>> Spesialis Gigi</option>
                    <option value="Spesialis Anastesi"<?php $ci->spesialis == 'Spesialis Anastesi' ? print "selected" : "" ?>> Spesialis Anastesi</option>
                    <option value="Spesialis Andrologi" <?php $ci->spesialis == 'Spesialis Andrologi' ? print "selected" : "" ?>> Spesialis Andrologi</option>
                    <option value="Spesialis Bedah"<?php $ci->spesialis == 'Spesialis Bedah' ? print "selected" : "" ?>> Spesialis Bedah</option>
                    <option value="Spesialis Mulut"<?php $ci->spesialis == 'Spesialis Mulut' ? print "selected" : "" ?>> Spesialis Mulut</option>
                    <option value="Spesialis Bedah Plastik"<?php $ci->spesialis == 'Spesialis Bedah Plastik' ? print "selected" : "" ?>> Spesialis Bedah Plastik</option>
                    <option value="Spesialis Bedah Saraf"<?php $ci->spesialis == 'Spesialis Bedah Saraf' ? print "selected" : "" ?>> Spesialis Bedah Saraf</option>
                    <option value="Spesialis THT"<?php $ci->spesialis == 'Spesialis THT' ? print "selected" : "" ?>> Spesialis THT</option>
                    <option value="Spesialis Akupasi"<?php $ci->spesialis == 'Spesialis Akupasi' ? print "selected" : "" ?>> Spesialis Akupasi</option>
                    <option value="Spesialis Radiologi"<?php $ci->spesialis == 'Spesialis Radiologi' ? print "selected" : "" ?>> Spesialis Radiologi</option>
                    <option value="Spesialis Geriatri"<?php $ci->spesialis == 'Spesialis Geriatri' ? print "selected" : "" ?>> Spesialis Geriatri</option>
                    <option value="Spesialis Urologi"<?php $ci->spesialis == 'Spesialis Urologi' ? print "selected" : "" ?>> Spesialis Urologi</option>
                    <option value="Spesialis Jantung dan Pembuluh Darah"<?php $ci->spesialis == 'Spesialis Jantung dan Pembuluh Darah' ? print "selected" : "" ?>> Spesialis Jantung dan Pembuluh Darah</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="first-name">Alumni<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" value="<?php echo $ci->alumni?>" name="alumni" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="first-name">No. Handphone<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" value="<?php echo $ci->no_hp?>" name="no_hp" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="first-name">Alamat<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" value="<?php echo $ci->alamat?>" name="alamat" required="required" class="form-control col-md-7 col-xs-12">
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
          <?php }?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
