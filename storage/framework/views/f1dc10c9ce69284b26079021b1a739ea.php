<script src="<?php echo e(asset('assets/js/libs/jquery-3.1.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/sweetalerts/sweetalert2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/notification/snackbar/snackbar.min.js')); ?>"></script>.
    <script src="<?php echo e(asset('plugins/nicescroll/nicescroll.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/currency/currency.js')); ?>"></script>

    <script>
        function noty(msg, option = 1) {
            Snackbar.show({
                text: msg.toUpperCase(),
                actionText: 'CERRAR',
                actionTextColor: '#fff',   
                backgroundColor: option == 1 ? '#3b3f5c', '#e7515a',
                pos: 'top-right'
            });
        }
    </script>

    <?php echo \Livewire\Livewire::scripts(); ?><?php /**PATH /Users/guille/Herd/ElGatoNegro/resources/views/layouts/theme/scripts.blade.php ENDPATH**/ ?>