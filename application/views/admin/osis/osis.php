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
          <h5 class="panel-title"> Data OSIS</h5>
          <hr style="margin:0px;">
          <div class="heading-elements">
            <ul class="icons-list">
              <li><a data-action="collapse"></a></li>
            </ul>
          </div>

                    <br>
                    <a href="panel_admin/osis/t" class="btn btn-primary">Tambah OSIS</a>

        </div>
        <div class="table-responsive">
        <table class="table datatable-basic table-bordered" width="100%">
          <thead>
            <tr>
              <th width="30px;">No.</th>
              <th>Judul OSIS</th>
              <th>Isi OSIS</th>
              <th width="160">Tanggal Posting</th>
              <th class="text-center" width="130">Aksi</th>
            </tr>
          </thead>
          <tbody>
              <?php
              $no = 1;
              foreach ($v_kat->result() as $baris) {?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $baris->judul_kat; ?></td>
                  <td><?php echo substr(htmlentities(strip_tags($baris->ket_kat)), 0, 115); ?>...</td>
                  <td><?php echo date('d-m-Y H:i:s', strtotime($baris->tgl_kat)); ?></td>
                  <td align="center">
                      <a href="panel_admin/osis/e/<?php echo $baris->id_kat; ?>" class="btn btn-success btn-xs" title="Edit"><i class="icon-pencil"></i></a>
                      <a href="panel_admin/hapus_kat/osis/<?php echo $baris->id_kat; ?>" class="btn btn-danger btn-xs" title="Hapus" onclick="return confirm('Apakah Anda yakin?')"><i class="icon-trash"></i></a>
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
