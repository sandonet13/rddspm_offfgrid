<script>
    setTimeout(function refreshTable() {
        $.ajax({
            url: '<?php echo 'ajax/a-dashboard-scc-1' ?>',
            dataType: 'html',
            data: {
                someparam: 'someval'
            },
            success: function(data) {
                $('#div-scc1').find('div').empty().append(data);
                setTimeout(refreshTable, 1000);
                // console.log(data);
            },
        });
    }, 1000);
</script>