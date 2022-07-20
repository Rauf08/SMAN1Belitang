<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">
    <?php
    echo $this->session->flashdata('msg');
    ?>
    <!-- Dashboard content -->
    <div class="row">
      <!-- Basic datatable -->
      <div class="panel panel-flat">
        <div class="panel-heading">
          <h5 class="panel-title"> Data Galeri</h5>
          <hr style="margin:0px;">
          <div class="heading-elements">
            <ul class="icons-list">
              <li><a data-action="collapse"></a></li>
            </ul>
          </div>

                    <br>
                    <a href="panel_admin/galeri/t" class="btn btn-primary">Tambah Galeri</a>

        </div>
        <div class="table-responsive">
        <table class="table datatable-basic table-bordered" width="100%">
          <thead>
            <tr>
              <th width="30px;">No.</th>
              <th>Nama galeri</th>
              <th width="160">Tanggal Posting</th>
              <th class="text-center" width="130">Aksi</th>
            </tr>
          </thead>
          <tbody>
              <?php
              $no = 1;
              foreach ($v_galeri->result() as $baris) {?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $baris->nama_galeri; ?></td>
                  <td><?php echo date('d-m-Y H:i:s', strtotime($baris->tgl_galeri)); ?></td>
                  <td align="center">
                      <a href="panel_admin/galeri/e/<?php echo $baris->id_galeri; ?>" class="btn btn-success btn-xs" title="Edit Galeri"><i class="icon-pencil"></i></a>
                      <a href="panel_admin/galeri/h/<?php echo $baris->id_galeri; ?>" class="btn btn-danger btn-xs" title="Hapus Galeri" onclick="return confirm('Apakah Anda yakin?')"><i class="icon-trash"></i></a>
                  </td>
                </tr>
              <?php
              } ?>
          </tbody>
        </table>
        </div>
      </div>
      <!-- /basic datatable -->
    </div>
    <!-- /dashboard content -->
