@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-xs-12 col-sm-12" style="margin-top:50px;">
            <div class="x_panel">

                <div class="x_title">
                    <h2>Super Test Registration List</h2>
                    <div class="clearfix"></div>
                </div>
                <div>
                    <div class="x_content">
                        <table id="product_list" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Father Name</th>
                                <th>Whatsapp</th>
                                <th>Mobile</th>
                                <th>Gender</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>                       
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
     
     <script type="text/javascript">
         $(function () {
    
            var table = $('#product_list').DataTable({
                processing: true,
                serverSide: true,
                iDisplayLength: 50,
                ajax: "{{route('admin.super.list_ajax')}}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},      
                    {data: 'name', name: 'name',searchable: true},    
                    {data: 'father_name', name: 'father_name',searchable: true},          
                    {data: 'whatsapp_no', name: 'whatsapp_no',searchable: true},
                    {data: 'mobile_no', name: 'mobile_no',searchable: true}, 
                    {data: 'gender', name: 'gender' ,searchable: true,render:function(data, type, row){
                        if (row.gender == 'M') {
                            return "<label class='label label-info'>Male</label>"
                        }else{
                            return "<label class='label label-primary'>Female</label>"
                        }                        
                    }},
                    {data: 'reg_date', name: 'reg_date' ,searchable: true},
                    {data: 'action', name: 'action' ,searchable: true}, 
                ]
            });            
        });
     </script>
 @endsection