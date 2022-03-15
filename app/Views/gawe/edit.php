<?= $this->extend('layout/default') ?>
<?= $this->section('title') ?>
<title>Data Gawe &mdash; Apps Nikah</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="<?= site_url('gawe') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
              <h1>Update Gawe</h1>
            </div>
          </div>

          <div class="section-body">
          <div class="card">
                  <div class="card-header">
                    <h4>Update Data Acara</h4>
                  </div>
                  <div class="card-body">
                   <form action="<?= site_url('gawe/'.$gawe->id_gawe)?>" method="post" autocomplete="off">
                   <?= csrf_field() ?>
                   <input type="hidden" name="_method" value="PUT">
                       <div class="form-group">
                           <label>Nama Acara</label>
                           <input type="text" name="name_gawe" value="<?= $gawe->name_gawe ?>" class="form-control" required >
                       </div>

                       <div class="form-group">
                           <label>Tanggal Acara</label>
                           <input type="date" name="date_gawe" value="<?= $gawe->date_gawe ?>" class="form-control" required>
                       </div>

                       <div class="form-group">
                           <label>Informasi Acara</label>
                           <textarea name="info_gawe" cols="30" rows="10" class="form-control"><?= $gawe->info_gawe ?></textarea>
                       </div>

                       <div>
                           <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i>Update</button>
                           <button type="reset" class="btn btn-primary">Reset</button>
                       </div>

                   </form>
                  </div>
               
                </div>
          </div>
        </section>
<?= $this->endSection() ?>
