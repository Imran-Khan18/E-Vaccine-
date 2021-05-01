let ambulanceRequests = null;
document.addEventListener("DOMContentLoaded", function() {
    // $("#example1").DataTable({
    //     "responsive": true, "lengthChange": false, "autoWidth": false,
    //     "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    // }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    ambulanceRequests = $('#ambulance-requests').DataTable({
        "ajax": {
            "url": `${baseUrl}/get_ambulance_requests`,
            "dataSrc": ""
        },
        "columns": [
            {"data": "id"},
            {"data": "name"},
            {"data": "age"},
            {"data": "phone"},
            {"data": "address"},
            {"data": "contact"},
            {"data": "payment"},
            {
                "data": "id",
                "render": function (data) {
                    return `<button onclick="deleteAmbulanceRequest(${data})" class="btn btn-danger" data-id="${data}" >Delete</button>`;
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

function deleteAmbulanceRequest(ambulanceRequestId){
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this Ambulance Request!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                let url = `${baseUrl}/delete-ambulance-request`;
                let formData = new FormData();
                formData.append('ambulanceRequestId', ambulanceRequestId);
                fetch(url, {
                    method: 'POST',
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
                    },
                    body: formData,
                }).then(res => res.json())
                    .then(res => {
                        swal("Poof! Ambulance Request has been deleted!", {
                            icon: "success",
                        });

                        ambulanceRequests.ajax.reload();
                    })
            } else {
                swal("Ambulance Request is safe!");
            }
        });
}
