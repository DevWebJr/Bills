$(function() {
    $('.table').DataTable();

    //créer une facture
    $('#create').on('click', function(e) {
        let formOrder = $('#formOrder')
        if (formOrder[0].checkValidity()) {
            e.preventDefault();
            $.ajax({
                url: 'http://localserver/JavaScript/Ajax/bills/src/process.php',
                type: 'post',
                data: formOrder.serialize() +'&action=create',
                success: function(response) {
                    console.log(response);
                }
            })
        }
    })
})
