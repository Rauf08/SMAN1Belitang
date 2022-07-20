<script type="text/javascript" src="assets/panel/ckeditor/ckeditor.js"></script>
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
                <legend class="text-bold"> Edit Data Alumni <?php echo $query->judul_isi; ?></legend>
                <?php
                echo $this->session->flashdata('msg');
                ?>
                <form class="form-horizontal" action="panel_admin/simpan_isi/e/<?php echo $query->id_isi; ?>" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="nama_isi" value="data_alumni">
                  <input type="hidden" name="judul_isi" value="<?php echo $query->judul_isi; ?>">
                  <div class="form-group">
                    <label class="control-label col-lg-12">Gambar</label>
                    <div class="col-lg-12">
                      <input type="file" name="gambar" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-12">Isi</label>
                    <div class="col-lg-12">
                      <textarea type="text" name="ket_isi" class="form-control ckeditor" id="ckedtor" placeholder="Isi" required><?php echo $query->ket_isi; ?></textarea>
                    </div>
                  </div>
                  <hr>
                  <a href="panel_admin/data_alumni" class="btn btn-default"><< Data Alumni</a>
                  <button type="submit" name="btnsimpan" class="btn btn-primary" style="float:right;">Simpan</button>
                </form>

              </fieldset>


            </div>

        </div>
      </div>
    </div>
    <!-- /dashboard content -->

<script type="text/javascript">
CKEDITOR.replace( 'ket_isi',
{
  fullPage : true,
  removeButtons: 'Save',
  removePlugins: 'Save',
  toolbar: [
                { name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
                { name: 'editing', items : [ 'Find','Replace'] },
                { name: 'document', items : [ 'Source'] },
                '/',
                { name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript'] },
                { name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'] },
                { name: 'links', items : [ 'Link','Unlink','Anchor' ] },
                { name: 'insert', items : [ 'Table','HorizontalRule','SpecialChar'] },
                '/',
                { name: 'styles', items: ['Styles', 'Format', 'Font', 'FontSize', 'lineheight'] },
                { name: 'colors', items : [ 'TextColor','BGColor' ] },
                { name: 'tools', items : [ 'Maximize','About', 'ShowBlocks' ] }
            ],
            extraPlugins: 'lineheight',
            line_height: "10px; 20px; 40px; 60px;"
            // line_height: '1em;1.1em;1.2em;1.3em;1.4em;1.5em'
            // line_height: "1px;1.1px;1.2px;1.3px;1.4px;1.5px"
});
</script>
