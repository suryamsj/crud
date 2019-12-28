<nav aria-label="Halaman">
    <ul class="pagination">
        <?php if ($aktif > 1) : ?>
            <li class="page-item">
                <a class="page-link" href="index.php?halaman=mahasiswa&page=<?= $aktif - 1; ?>" aria-label=" Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
        <?php endif; ?>
        <?php for ($i = 1; $i <= $total; $i++) : ?>
            <?php if ($i == $aktif) : ?>
                <li class="page-item active" aria-current="page"><a class="page-link" href="index.php?halaman=mahasiswa&page=<?= $i; ?>"> <?= $i; ?> <span class="sr-only">(current)</span> </a></li>
            <?php else : ?>
                <li class="page-item"><a class="page-link" href="index.php?halaman=mahasiswa&page=<?= $i; ?>"> <?= $i; ?> </a></li>
            <?php endif; ?>
        <?php endfor; ?>
        <?php if ($aktif < $total) : ?>
            <a class="page-link" href="index.php?halaman=mahasiswa&page=<?= $aktif + 1; ?>" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        <?php endif; ?>
        </li>
    </ul>
</nav>
