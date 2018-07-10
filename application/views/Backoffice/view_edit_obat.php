<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Data Obat</small></h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Edit Data Obat</h2>
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
          <?php foreach($tb_obat as $ci){
          ?>
            <form action="<?php echo base_url('Backoffice/obat/update') ?>" method="post" enctype="multipart/form-data" role="form" data-parsley-validate="" class="form-horizontal form-label-left">
               <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Kode obat <span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="hidden" value="<?php echo $ci->id_obat?>"  name="id_obat" required="required" class="form-control col-md-7 col-xs-12">
                  <input type="text" value="<?php echo $ci->kode_obat?>"  name="kode_obat" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Obat <span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" value="<?php echo $ci->nama_obat?>"  name="nama_obat" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Kategori Obat<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select class="select2_single form-control" name="kategori_obat">
                    <option>Pilih Kategori</option>
                    <option value="Bebas" <?php $ci->kategori_obat == 'Bebas' ? print "selected" : "" ?>>Bebas</option>
                    <option value="Keras" <?php $ci->kategori_obat == 'Keras' ? print "selected" : "" ?>>Keras</option>
                    <option value="Psikotropika" <?php $ci->kategori_obat == 'Psikotropika' ? print "selected" : "" ?>>Psikotropika</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Jenis Obat<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select class="select2_single form-control" name="jenis_obat">
                    <option>Pilih Jenis Obat</option>
                    <option value="Tablet" <?php $ci->jenis_obat == 'Tablet' ? print "selected" : "" ?>>Tablet</option>
                    <option value="Serbuk" <?php $ci->jenis_obat == 'Serbuk' ? print "selected" : "" ?>>Serbuk</option>
                    <option value="Pil" <?php $ci->jenis_obat == 'Pil' ? print "selected" : "" ?>>Pil</option>
                    <option value="Cair"<?php $ci->jenis_obat == 'Cair' ? print "selected" : "" ?>>Cair</option>
                    <option value="Kapsul"<?php $ci->jenis_obat == 'Kapsul' ? print "selected" : "" ?>>Kapsul</option>
                    <option value="Kaplet"<?php $ci->jenis_obat == 'Kaplet' ? print "selected" : "" ?>>Kaplet</option>
                    <option value="Larutan"<?php $ci->jenis_obat == 'Larutan' ? print "selected" : "" ?>>Larutan</option>
                    <option value="Ekstrat"<?php $ci->jenis_obat == 'Ekstrat' ? print "selected" : "" ?>>Ekstrat</option>
                    <option value="Salep"<?php $ci->jenis_obat == 'Salep' ? print "selected" : "" ?>>Salep</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="first-name">Merek Obat<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" value="<?php echo $ci->merek_obat?>" name="merek_obat" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="first-name">Expired<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="date" value="<?php echo $ci->expired?>" name="expired" required="required" class="form-control col-md-7 col-xs-12">
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
