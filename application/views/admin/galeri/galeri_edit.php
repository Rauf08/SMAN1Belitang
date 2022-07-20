<style>
  label{font-weight: bold;}
</style>
<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="panel panel-flat">

            <div class="panel-body">

              <fieldset class="content-group">
                <legend class="text-bold"> Edit Galeri</legend>
                <?php
                echo $this->session->flashdata('msg');
                ?>
                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label class="control-label col-lg-12">Nama Galeri</label>
                    <div class="col-lg-12">
                      <input type="text" name="nama_galeri" class="form-control" placeholder="Nama Galeri" value="<?php echo $query->nama_galeri; ?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-12">Gambar Galeri</label>
                    <div class="col-lg-12">
                      <input type="file" name="gambar" class="form-control">
                    </div>
                  </div>

                  <hr>
                  <a href="panel_admin/galeri" class="btn btn-default"><< Data Galeri</a>
                  <button type="submit" name="btnsimpan" class="btn btn-primary" style="float:right;">Simpan</button>
                </form>

              </fieldset>


            </div>

        </div>
      </div>
    </div>
    <!-- /dashboard content -->
