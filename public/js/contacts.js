let contactList = null;
document.addEventListener("DOMContentLoaded", function() {
    // $("#example1").DataTable({
    //     "responsive": true, "lengthChange": false, "autoWidth": false,
    //     "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    // }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    contactList = $('#appointments').DataTable({
        "ajax": {
            "url": `${baseUrl}/get_contacts`,
            "dataSrc": ""
        },
        "columns": [
            {"data": "id"},
            {"data": "name"},
            {"data": "email"},
            {"data": "subject"},
            {"data": "message"},
            {
                "data": "id",
                "render": function (data) {
                    return `<button onclick="deleteAppointment(${data})" class="btn btn-danger" data-id="${data}" >Delete</button>`;
                }
            }
        ],
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "order": [[0, 'desc' ]],
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });

});

function deleteAppointment(contactId){
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this Contact!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                let url = `${baseUrl}/delete-contact`;
                let formData = new FormData();
                formData.append('contactId', contactId);
                fetch(url, {
                    method: 'POST',
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
                    },
                    body: formData,
                }).then(res => res.json())
                    .then(res => {
                        swal("Poof! Contact has been deleted!", {
                            icon: "success",
                        });

                        contactList.ajax.reload();
                    })
            } else {
                swal("Contact is safe!");
            }
        });
}
