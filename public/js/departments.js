let doctorList = null;
document.addEventListener("DOMContentLoaded", function() {
    // $("#example1").DataTable({
    //     "responsive": true, "lengthChange": false, "autoWidth": false,
    //     "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    // }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    departmentList = $('#example2').DataTable({
        "ajax": {
            "url": `${baseUrl}/departments`,
            "dataSrc": ""
        },
        "columns": [
            {"data": "id"},
            {"data": "name"},
            {"data": "department"},
            {
                "data": "id",
                "render": function (data,type, row) {
                    return `<section>
                        <button onclick="editDepartment(${data})" class="btn btn-primary" data-toggle="modal" data-target="#department-modal-${data}">Edit</button>
                        <div class="modal fade" id="department-modal-${data}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <form onsubmit="editDepartment(event)">
                                <div class="modal-header">
                                    <h4 class="modal-title">Edit Department</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                        <div class="card-body">
                                            <input type="hidden" name="id" value="${row.id}">
                                            <div class="form-group">
                                                <label for="department_name">Name</label>
                                                <input type="text" name="name" class="form-control" id="department_name" value="${row.name}">
                                            </div>
                                            <div class="form-group">
                                                <label for="department">Department</label>
                                                <input type="text" name="department" class="form-control" id="department" value="${row.department}">
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
                    return `<button onclick="deleteDepartment(${data})" class="btn btn-danger" data-id="${data}" >Delete</button>`;
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

function editDepartment(e)
{
    if(e.target) {
        e.preventDefault();
        let formEl = e.currentTarget;
        let formData = new FormData(formEl);

        fetch(`${baseUrl}/save-department`,{
            method: 'POST',
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
            },
            body: formData
        }).then(res => res.json())
            .then(res => {
                departmentList.ajax.reload();
                $(`#department-modal-${res.id}`).modal('hide');
            })
    }
}

function deleteDepartment(departmentId){
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this department!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                let url = `${baseUrl}/delete-department`;
                let formData = new FormData();
                formData.append('departmentId', departmentId);
                fetch(url, {
                    method: 'POST',
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
                    },
                    body: formData,
                }).then(res => res.json())
                    .then(res => {
                        swal("Poof! Department has been deleted!", {
                            icon: "success",
                        });

                        departmentList.ajax.reload();
                    })
            } else {
                swal("Department is safe!");
            }
        });
}
