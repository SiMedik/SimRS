<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Data Pensiunan</small></h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Edit data pegawai</h2>
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
            <?php foreach($tb_pensiunan as $l){?>
            <form action="<?php echo base_url('fo/pensiunan/update') ?>" method="post" enctype="multipart/form-data" role="form" data-parsley-validate="" class="form-horizontal form-label-left">
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Pilih Nama Pegawai <span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                 <select class="select2_single form-control" name="nama_pensiunan">
                    <option>Pilih Pegawai</option>
                    <?php 
                    foreach($tb_pegawai as $k){
                    ?>
                    <option value="<?php echo $k->nama_pegawai?>" <?php $k->nama_pegawai == $k->nama_pegawai ? print "selected" : "" ?>><?php echo $k->nama_pegawai?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
               <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Masukkan Tanggal Pensiun <span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="hidden" value="<?php echo $l->id_pensiunan?>"  name="id_pensiunan" required="required" class="form-control col-md-7 col-xs-12">
                  <input type="date" value="<?php echo $l->tgl_pensiun?>"  name="tgl_pensiun" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12" for="last-name">Catatan<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                   <textarea name="catatan" style="width: 100%">
                    <?php echo $l->catatan?>
                   </textarea>
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
