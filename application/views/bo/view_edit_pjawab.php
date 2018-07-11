<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Data Penanggung Jawab</small></h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Edit Penanggung  Jawab</h2>
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
          <?php foreach($tb_pjawab as $l){
          ?>
            <form action="<?php echo base_url('bo/Merek/update') ?>" method="post" enctype="multipart/form-data" role="form" data-parsley-validate="" class="form-horizontal form-label-left">
               <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Kode Penanggung Jawab <span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="hidden" value="<?php echo $l->id_pjawab?>"  name="id_pjawab" required="required" class="form-control col-md-7 col-xs-12">
                  <input type="text" value="<?php echo $l->kode_pjawab?>"  name="kode_pjawab" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Nama  Penanggung Jawab<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" value="<?php echo $l->nama_pjawab?>"  name="nama_pjawab" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Catatan Penanggung Jawab <span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" value="<?php echo $l->catatan_pjawab?>"  name="catatan_pjawab" required="required" class="form-control col-md-7 col-xs-12">
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
