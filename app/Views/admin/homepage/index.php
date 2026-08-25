<?= $this->extend('admin/layout') ?>

<?= $this->section('admin_content') ?>
<div class="card card-dash p-4">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <div>
            <h5 class="font-weight-bold mb-1 text-dark">Homepage Banners</h5>
            <small class="text-muted">Manage the rotating banner images shown at the top of the homepage. Recommended size: 1024 x 571px (JPG, PNG, or WEBP).</small>
        </div>
        <a href="<?= base_url('/') ?>" target="_blank" class="btn btn-outline-secondary btn-sm">
            <i class="fa fa-external-link-alt mr-1"></i> View Homepage
        </a>
    </div>

    <form action="<?= base_url('admin/homepage/update') ?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <?php foreach ($slides as $i => $slide): ?>
                <div class="col-md-4 mb-4">
                    <div class="card p-3 bg-light border-0 h-100">
                        <label class="font-weight-bold text-dark">Banner <?= $i + 1 ?></label>

                        <div class="mb-3 text-center bg-white p-2 border rounded">
                            <?php if ($slide['exists']): ?>
                                <img src="<?= $slide['url'] . '?v=' . $slide['updatedAt'] ?>" alt="Banner <?= $i + 1 ?>" class="img-fluid rounded" style="max-height: 160px; object-fit: contain;">
                            <?php else: ?>
                                <div class="py-5 text-muted">
                                    <i class="fa fa-image fa-2x mb-2 d-block"></i>
                                    No image uploaded yet
                                </div>
                            <?php endif; ?>
                        </div>

                        <label class="font-weight-bold text-dark small mb-1">Replace Banner <?= $i + 1 ?></label>
                        <input type="file" name="<?= esc($slide['field']) ?>" class="form-control-file" accept="image/jpeg, image/png, image/webp">
                        <small class="text-muted mt-1 d-block">Leave blank to keep the current image.</small>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <button type="submit" class="btn btn-primary font-weight-bold">
            <i class="fa fa-save mr-1"></i> Save Banners
        </button>
    </form>
</div>
<?= $this->endSection() ?>
