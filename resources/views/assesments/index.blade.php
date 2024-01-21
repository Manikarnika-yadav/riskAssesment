<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>RISK ASSESMENT</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" >
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<link  href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
</head>
<body>
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>RISK ASSESMENT </h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" onClick="add()" href="javascript:void(0)"> Create Risk</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="card-body">
        <table class="table table-bordered" id="ajax-crud-datatable">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>risk_scenerio</th>
                    <th>threat</th>
                    <th>threat_prob</th>
                    <th>vulnerability</th>
                    <th>vulnerability_crit</th>
                    <th>cia</th>
                    <th>access</th>
                    <th>actors</th>
                    <th>motive</th>
                    <th>likelihood</th>
                    <th>risk_val</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
 
<!-- boostrap employee model -->
<div class="modal fade" id="assesment-modal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="javascript:void(0)" id="AssesmentForm" name="AssesmentForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="risk_scenerio" class="col-sm-2 control-label">risk_scenerio</label>
                            <div class="col-sm-12">
                            <input type="text" class="form-control" id="risk_scenerio" name="risk_scenerio" placeholder="Enter risk_scenerio" maxlength="50" required="">
                        </div>
                    </div>  
                    <div class="form-group">
                        <label for="threat" class="col-sm-2 control-label">threat</label>
                            <div class="col-sm-12">
                            <input type="text" class="form-control" id="threat" name="threat" placeholder="Enter threat" maxlength="50" required="">
                        </div>
                    </div>  
                    <div class="form-group">
                        <label for="threat_prob" class="col-sm-2 control-label">threat_prob</label>
                            <div class="col-sm-12">
                            <input type="text" class="form-control" id="threat_prob" name="threat_prob" placeholder="Enter threat_prob" maxlength="50" required="">
                        </div>
                    </div>  
                    <div class="form-group">
                        <label for="vulnerability" class="col-sm-2 control-label">vulnerability</label>
                            <div class="col-sm-12">
                            <input type="text" class="form-control" id="vulnerability" name="vulnerability" placeholder="Enter vulnerability" maxlength="50" required="">
                        </div>
                    </div>  
                    <div class="form-group">
                        <label for="vulnerability_crit" class="col-sm-2 control-label">vulnerability_crity</label>
                            <div class="col-sm-12">
                            <input type="text" class="form-control" id="vulnerability_crit" name="vulnerability_crit" placeholder="Enter vulnerability_crit" maxlength="50" required="">
                        </div>
                    </div>  
                    <div class="form-group">
                        <label for="cia" class="col-sm-2 control-label">cia</label>
                            <div class="col-sm-12">
                            <input type="text" class="form-control" id="cia" name="cia" placeholder="Enter cia" maxlength="50" required="">
                        </div>
                    </div>  
                    <div class="form-group">
                        <label for="access" class="col-sm-2 control-label">access</label>
                            <div class="col-sm-12">
                            <input type="text" class="form-control" id="access" name="access" placeholder="Enter access" maxlength="50" required="">
                        </div>
                    </div>  
                    <div class="form-group">
                        <label for="actors" class="col-sm-2 control-label">actors</label>
                            <div class="col-sm-12">
                            <input type="text" class="form-control" id="actors" name="actors" placeholder="Enter actors" maxlength="50" required="">
                        </div>
                    </div>  
                    <div class="form-group">
                        <label for="motive" class="col-sm-2 control-label">motive</label>
                            <div class="col-sm-12">
                            <input type="text" class="form-control" id="motive" name="motive" placeholder="Enter motive" maxlength="50" required="">
                        </div>
                    </div>  
                    <div class="form-group">
                        <label for="likelihood" class="col-sm-2 control-label">likelihood</label>
                            <div class="col-sm-12">
                            <input type="text" class="form-control" id="likelihood" name="likelihood" placeholder="Enter likelihood" maxlength="50" required="">
                        </div>
                    </div>  
                    <div class="form-group">
                        <label for="risk_val" class="col-sm-2 control-label">risk_val</label>
                            <div class="col-sm-12">
                            <input type="text" class="form-control" id="risk_val" name="risk_val" placeholder="Enter risk_val" maxlength="50" required="">
                        </div>
                    </div>  
                     
                    <div class="col-sm-offset-2 col-sm-10"><br/>
                        <button type="submit" class="btn btn-primary" id="btn-save">Save changes</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>
<!-- end bootstrap model -->
<script type="text/javascript">
$(document).ready( function () {
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
 
    $('#ajax-crud-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ url('ajax-crud-datatable') }}",
        columns: [
            { data: 'id', name: 'id' },
            { data: 'risk_scenerio', name: 'risk_scenerio' },
            { data: 'threat', name: 'threat' },
            { data: 'threat_prob', name: 'threat_prob' },
            { data: 'vulnerability', name: 'vulnerability' },
            { data: 'vulnerability_crit', name: 'vulnerability_crit' },
            { data: 'cia', name: 'cia' },
            { data: 'access', name: 'access' },
            { data: 'actors', name: 'actors' },
            { data: 'motive', name: 'motive' },
            { data: 'likelihood', name: 'likelihood' },
            { data: 'risk_val', name: 'risk_val' },
            { data: 'created_at', name: 'created_at' },
            { data: 'action', name: 'action', orderable: false},
        ],
        order: [[0, 'desc']]
    });
});
 
function add(){
    $('#AssesmentForm').trigger("reset");
    $('#AssesmentModal').html("Add Risk");
    $('#assesment-modal').modal('show');
    $('#id').val('');
}   
     
function editFunc(id){
    $.ajax({
        type:"POST",
        url: "{{ url('edit') }}",
        data: { id: id },
        dataType: 'json',
        success: function(res){
            $('#AssesmentModal').html("Edit Risk");
            $('#assesment-modal').modal('show');
            $('#id').val(res.id);
            $('#risk_scenerio').val(res.risk_scenerio);
            $('#threat').val(res.threat);
            $('#threat_prob').val(res.threat_prob);
            $('#vulnerability').val(res.vulnerability);
            $('#vulnerability_crit').val(res.vulnerability_crit);
            $('#cia').val(res.cia);
            $('#access').val(res.access);
            $('#actors').val(res.actors);
            $('#motive').val(res.motive);
            $('#likelihood').val(res.likelihood);
            $('#risk_val').val(res.risk_val);
        }
    });
}  
 
function deleteFunc(id){
    if (confirm("Delete Record?") == true) {
        var id = id;
        // ajax
        $.ajax({
            type:"POST",
            url: "{{ url('delete') }}",
            data: { id: id },
            dataType: 'json',
            success: function(res){
                var oTable = $('#ajax-crud-datatable').dataTable();
                oTable.fnDraw(false);
            }
        });
    }
}
 
$('#AssesmentForm').submit(function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        type:'POST',
        url: "{{ url('store')}}",
        data: formData,
        cache:false,
        contentType: false,
        processData: false,
        success: (data) => {
            $("#assesment-modal").modal('hide');
            var oTable = $('#ajax-crud-datatable').dataTable();
            oTable.fnDraw(false);
            $("#btn-save").html('Submit');
            $("#btn-save"). attr("disabled", false);
        },
        error: function(data){
            console.log(data);
        }
    });
});
</script>
</body>
</html>