<div class="footer">
    <div class="copyright">
        <p>Copyright © Designed &amp; Developed by I-Dev </p>
    </div>
</div>

</div>



<script src="<?= base_url() ?>assets/vendor/global/global.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<!-- <script src="<?= base_url() ?>assets/vendor/chart.js/Chart.bundle.min.js"></script> -->
<script src="<?= base_url() ?>assets/js/custom.min.js"></script>
<script src="<?= base_url() ?>assets/js/dlabnav-init.js"></script>
<script src="<?= base_url() ?>assets/vendor/owl-carousel/owl.carousel.js"></script>

<script src="<?= base_url() ?>assets/vendor/peity/jquery.peity.min.js"></script>

<script src="<?= base_url() ?>assets/vendor/apexchart/apexchart.js"></script>

<script src="<?= base_url() ?>assets/js/dashboard/dashboard-1.js"></script>
<script src="<?= base_url() ?>assets/js/toastr.js"></script>


<script src="<?= base_url() ?>assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/js/plugins-init/datatables.init.js"></script>

<!-- SHOW TOASTR NOTIFICATION -->
<?php if ($this->session->flashdata('flash_message') != "") : ?>

<script type="text/javascript">
    toastr.success('<?php echo $this->session->flashdata("flash_message"); ?>');
</script>

<?php endif; ?>

<!-- SHOW TOASTR NOTIFICATION -->
<?php if ($this->session->flashdata('flash_error') != "") : ?>

<script type="text/javascript">
    toastr.error('<?php echo $this->session->flashdata("flash_error"); ?>');
</script>

<?php endif; ?>

<!-- SHOW TOASTR NOTIFICATION -->
<?php if ($this->session->flashdata('flash_warning') != "") : ?>

<script type="text/javascript">
    toastr.warning('<?php echo $this->session->flashdata("flash_warning"); ?>');
</script>

<?php endif; ?>

<script>
    $(function () {
        $('.desc').keyup(updateCount);
        $('.desc').keydown(updateCount);
        function updateCount() {
            var cs = 400 - $(this).val().length;
            let characters = $('.characters');
            $('.characters').text(cs);
            console.log(characters);
        }
    })
    $(function () {
        $('#landing_title').keyup(updateSlug);
        $('#landing_title').keydown(updateSlug);
        function updateSlug() {
            var title =  $('#landing_title').val();
            var slug = title.replace(/\s+/g, '_').toLowerCase();
           $('#slug').val('https://www.moajud.net/'+slug);
        }
    })
</script>

</body>

</html>