let ambulanceList = null;
document.addEventListener("DOMContentLoaded", function() {
    // $("#example1").DataTable({
    //     "responsive": true, "lengthChange": false, "autoWidth": false,
    //     "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    // }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    ambulanceList = $('#example2').DataTable({
        "ajax": {
            "url": `${baseUrl}/adminambulance`,
            "dataSrc": ""
        },
        "columns": [
            {"data": "id"},
            {"data": "area"},
            {"data": "price"},
            {
                "data": "id",
                "render": function (data,type, row) {
                    return `<section>
                        <button onclick="editAmbulance(${data})" class="btn btn-primary" data-toggle="modal" data-target="#ambulance-modal-${data}">Edit</button>
                        <div class="modal fade" id="ambulance-modal-${data}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <form onsubmit="editAmbulance(event)">
                                <div class="modal-header">
                                    <h4 class="modal-title">Edit Ambulance</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                        <div class="card-body">
                                            <input type="hidden" name="id" value="${row.id}">
                                            <div class="form-group">
                                                <label for="area">Area</label>
                                                <input type="text" name="area" class="form-control" id="area" value="${row.area}">
                                            </div>
                                            <div class="form-group">
                                                <label for="price">Price</label>
                                                <input type="text" name="price" class="form-control" id="price" value="${row.price}">
                                            </div>
                                        </div>

                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                                </form>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    </section>`;
                }
            },
            {
                "data": "id",
                "render": function (data) {
                    return `<button onclick="deleteAmbulance(${data})" class="btn btn-danger" data-id="${data}" >Delete</button>`;
                }
            }
        ],
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });

});

function editAmbulance(e)
{
    if(e.target) {
        e.preventDefault();
        let formEl = e.currentTarget;
        let formData = new FormData(formEl);

        fetch(`${baseUrl}/save-ambulance`,{
            method: 'POST',
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
            },
            body: formData
        }).then(res => res.json())
            .then(res => {
                ambulanceList.ajax.reload();
                $(`#ambulance-modal-${res.id}`).modal('hide');
            })
    }


}

function deleteAmbulance(ambulanceId){
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this ambulance!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                let url = `${baseUrl}/delete-ambulance`;
                let formData = new FormData();
                formData.append('ambulanceId', ambulanceId);
                fetch(url, {
                    method: 'POST',
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
                    },
                    body: formData,
                }).then(res => res.json())
                    .then(res => {
                        swal("Poof! Ambulance has been deleted!", {
                            icon: "success",
                        });

                        ambulanceList.ajax.reload();
                    })
            } else {
                swal("Ambulance is safe!");
            }
        });
}
