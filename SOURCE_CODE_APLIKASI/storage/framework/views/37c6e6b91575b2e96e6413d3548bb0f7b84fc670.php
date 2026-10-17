<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        
        <?php if(Auth::user()->status == 'admin'): ?>
            <li class="nav-item has-treeview">
                <a href="<?php echo e(url('admin')); ?>" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>

            <li class="nav-item has-treeview">
                <a href="<?php echo e(route('kelola_akun')); ?>" class="nav-link mr-1">
                    &nbsp;<i class="fas fa-users mr-2"></i>
                    <p>
                        Kelola Akun
                    </p>
                </a>
            </li>

            <li class="nav-item has-treeview">
                <a href="<?php echo e(route('user_tipe')); ?>" class="nav-link mr-1">
                    &nbsp;<i class="fas fa-user mr-2"></i>
                    <p>
                       Tipe User
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-list-alt"></i>
                    <p>
                        Data Master
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo e(route('kelola_kepala_dinas')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Kepala Dinas</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo e(route('kelola_pegawai')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Pegawai</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('kelola_peraturan')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Dasar Peraturan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('kelola_dokument')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Tanda Tangan Dokumen</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('program_kerja_kepala')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Kegiatan Kepala</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('program_kerja')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Kegiatan Staff</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-list-alt"></i>
                    <p>
                        Entry SPPD
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo e(route('kelola_surattugas_kepala')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Surat Tugas Kepala</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo e(route('kelola_surattugas')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Surat Tugas Staff</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('kelola_spj_kepala')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>SPJ Kepala</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('kelola_spj')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>SPJ Staff</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-list-alt"></i>
                    <p>
                        Cetakan
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo e(route('cetak_surattugas_kepala')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Surat Tugas Kepala</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo e(route('cetak_surattugas')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Surat Tugas Staff</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo e(route('cetak_kepala_dinas')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>SPJ Kepala Dinas</p>
                        </a>

                    </li>

                    <li class="nav-item">
                        <a href="<?php echo e(route('spj_cetak')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>SPJ Staff</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-money-bill-wave ml-1 mr-1"></i>
                    <p>
                        Data Biaya
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo e(route('biaya_transportasi')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Transportasi</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo e(route('biaya_hotel')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p> Hotel </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo e(route('uang_harian')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p> Uang Harian </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo e(route('biaya_represantasi')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p> Biaya Representasi </p>
                        </a>
                    </li>
                </ul>
            </li>

        <?php elseif(Auth::user()->status == 'kwitansi'): ?>
            <li class="nav-item has-treeview">
                <a href="<?php echo e(url('kwitansi')); ?>" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-list-alt"></i>
                    <p>
                        Entry SPPD
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo e(route('kelola_spj_kepala')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>SPJ Kepala</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('kelola_spj')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>SPJ Staff</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-list-alt"></i>
                    <p>
                        Cetakan
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo e(route('cetak_kepala_dinas')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>SPJ Kepala Dinas</p>
                        </a>

                    </li>

                    <li class="nav-item">
                        <a href="<?php echo e(route('spj_cetak')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>SPJ Staff</p>
                        </a>
                    </li>
                </ul>
            </li>
        <?php else: ?>
            <li class="nav-item has-treeview">
                <a href="<?php echo e(url('surat_tugas')); ?>" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-list-alt"></i>
                    <p>
                        Data Master
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo e(route('kelola_pegawai')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Data Pegawai</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('kelola_peraturan')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Dasar Peraturan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('kelola_dokument')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Tanda Tangan Dokumen</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-list-alt"></i>
                    <p>
                        Entry SPPD
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo e(route('kelola_surattugas_kepala')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Surat Tugas Kepala</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo e(route('kelola_surattugas')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Surat Tugas Staff</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-list-alt"></i>
                    <p>
                        Cetakan
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo e(route('cetak_surattugas_kepala')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Surat Tugas Kepala</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo e(route('cetak_surattugas')); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Surat Tugas Staff</p>
                        </a>
                    </li>
                </ul>
            </li>
        <?php endif; ?>

    </ul>
</nav>
<?php /**PATH C:\xampp\htdocs\sppd-master\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>