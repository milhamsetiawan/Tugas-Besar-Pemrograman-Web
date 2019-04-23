    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url('assets/js/jquery-3.3.1.js'); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/');?>js/jquery.dataTables.js"></script>
    <script>
    $(document).ready(function() {
        $('#dataOrder').DataTable();
    } );
    function jumbotronMSG(id)
    {
        $.get({
            url: '<?php echo base_url('Dashboard/valJumbo/'); ?>'+id,
            success: function(res){
               $("#message").html(res);
            },
        });
    }

    </script>
  </body>
</html>