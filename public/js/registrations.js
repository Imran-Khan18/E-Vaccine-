let registrationList = null;
document.addEventListener("DOMContentLoaded", function() {
    // $("#example1").DataTable({
    //     "responsive": true, "lengthChange": false, "autoWidth": false,
    //     "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    // }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    registrationList = $('#registrations').DataTable({
        "ajax": {
            "url": `${baseUrl}/get_registrations`,
            "dataSrc": ""
        },
        "columns": [
            {"data": "id"},
            {"data": "name"},
            {"data": "father_name"},
            {"data": "mother_name"},
            {"data": "dob"},
            {"data": "contact"},
            {"data": "nid"},
            {"data": "email"},
            {
                "data": "id",
                "render": function (data) {
                    return `<button onclick="deleteRegistration(${data})" class="btn btn-danger" data-id="${data}" >Delete</button>`;
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

function deleteRegistration(registrationId){
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this registration!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                let url = `${baseUrl}/delete-registration`;
                let formData = new FormData();
                formData.append('registrationId', registrationId);
                fetch(url, {
                    method: 'POST',
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
                    },
                    body: formData,
                }).then(res => res.json())
                    .then(res => {
                        swal("Poof! registration has been deleted!", {
                            icon: "success",
                        });

                        registrationList.ajax.reload();
                    })
            } else {
                swal("Registration is safe!");
            }
        });
}
