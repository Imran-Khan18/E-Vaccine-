let doctorList = null;
document.addEventListener("DOMContentLoaded", function() {
    // $("#example1").DataTable({
    //     "responsive": true, "lengthChange": false, "autoWidth": false,
    //     "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    // }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    doctorList = $('#example2').DataTable({
        "ajax": {
            "url": `${baseUrl}/doctors`,
            "dataSrc": ""
        },
        "columns": [
            {"data": "id"},
            {"data": "name"},
            {"data": "speciality"},
            {
                "data": "id",
                "render": function (data,type, row) {
                    return `<section>
                        <button onclick="editDoctor(${data})" class="btn btn-primary" data-toggle="modal" data-target="#doctor-modal-${data}">Edit</button>
                        <div class="modal fade" id="doctor-modal-${data}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <form onsubmit="editDoctor(event)">
                                <div class="modal-header">
                                    <h4 class="modal-title">Edit Doctor</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                        <div class="card-body">
                                            <input type="hidden" name="id" value="${row.id}">
                                            <div class="form-group">
                                                <label for="doctor_name">Name</label>
                                                <input type="text" name="name" class="form-control" id="doctor_name" value="${row.name}">
                                            </div>
                                            <div class="form-group">
                                                <label for="speciality">Speciality</label>
                                                <input type="text" name="speciality" class="form-control" id="speciality" value="${row.speciality}">
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
                    return `<button onclick="deleteDoctor(${data})" class="btn btn-danger" data-id="${data}" >Delete</button>`;
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

function editDoctor(e)
{
    if(e.target) {
        e.preventDefault();
        let formEl = e.currentTarget;
        let formData = new FormData(formEl);

        fetch(`${baseUrl}/save-doctor`,{
            method: 'POST',
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
            },
            body: formData
        }).then(res => res.json())
            .then(res => {
                doctorList.ajax.reload();
                $(`#doctor-modal-${res.id}`).modal('hide');
            })
    }


}

function deleteDoctor(doctorId){
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this doctor!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                let url = `${baseUrl}/delete-doctor`;
                let formData = new FormData();
                formData.append('doctorId', doctorId);
                fetch(url, {
                    method: 'POST',
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
                    },
                    body: formData,
                }).then(res => res.json())
                    .then(res => {
                        swal("Poof! Doctor has been deleted!", {
                            icon: "success",
                        });

                        doctorList.ajax.reload();
                    })
            } else {
                swal("Doctor is safe!");
            }
        });
}
