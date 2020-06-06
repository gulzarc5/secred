@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-xs-12 col-sm-12" style="margin-top:50px;">
            <div class="x_panel">

                <div class="x_title">
                    <h2>Staudents Query</h2>
                    <div class="clearfix"></div>
                </div>
                <div>
                    <div class="x_content">
                        <table id="product_list" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Query</th>
                                <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>  
                                @if (isset($query) && !empty($query))
                                @php
                                    $q_count=1;
                                @endphp
                                    @foreach ($query as $item)
                                       <tr>
                                           <td>{{$q_count++}}</td>
                                           <td>{{$item->name}}</td>
                                           <td>{{$item->email}}</td>
                                           <td>{{$item->subject}}</td>
                                           <td>{{$item->message}}</td>
                                           <td>{{$item->created_at}}</td>
                                        </tr> 
                                    @endforeach
                                @endif                     
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
    
            var table = $('#product_list').DataTable();            
        });
     </script>
 @endsection