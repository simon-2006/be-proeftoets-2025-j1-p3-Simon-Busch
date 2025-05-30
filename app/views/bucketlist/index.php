<?php require   APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">

    <div class="row">

        <div class="col-1"></div>
        <div class="col-10">        
            <h3><?= $data['title']; ?></h3>
        </div>
        <div class="col-1"></div>
    </div>
    <!-- begin tabel -->
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Doel</th>
                        <th>Omschrijving</th>
                        <th>Land</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['Bucketlist'] as $Bucketlist) : ?>
                        <tr>
                            <td><?= $Bucketlist->Doel; ?></td>
                            <td><?= $Bucketlist->Omschrijving; ?></td>
                            <td><?= $Bucketlist->Land; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <a href="<?= URLROOT; ?>/homepages/index"><i class="bi bi-arrow-left"></i></a>
        </div>
        <div class="col-1"></div>
    </div>
    <!-- eind tabel -->

<?php require   APPROOT . '/views/includes/footer.php'; ?>