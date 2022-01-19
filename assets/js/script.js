$(function() {
    $('.table').DataTable();

    //créer une facture
    $('#create').on('click', function(e) {
        let formOrder = $('#formOrder')
        if (formOrder[0].checkValidity()) {
            e.preventDefault();
            $.ajax({
                type: 'post',
                url: 'http://localhost:3308/LoacalServer/JavaScript/Ajax/bills/src/process.php',
                data: formOrder.serialize() +'&action=create',
                asynch : false,
                success: function(data) {
                    console.log(data);
                }
            })
        }
    })
})
