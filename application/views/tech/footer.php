<footer class="tempting-azure-gradient p-3 fixed-bottom">

    <h4 class="h6 text-center"><a href="javascript:void(0);">Lab Info </a> | copyrights <?php echo date('Y') ?></h6>



</footer>
<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        w = window.open();
        w.document.write(printContents);
        w.print();
        w.close();
    }
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

<script type='text/javascript' src="<?php echo base_url(); ?>assets/ajax/technician.js"></script>
<script>
    getComplaint('<?php echo base_url(); ?>');
</script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</body>

</html>