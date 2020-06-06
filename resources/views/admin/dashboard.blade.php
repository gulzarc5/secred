@extends('admin.template.admin_master')

@section('content')

  <div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row tile_count">
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Student</span>
        <div class="count green">{{$total_student}}</div>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-clock-o"></i> Total Online Pay</span>
        <div class="count green">{{$total_online_pay}}</div>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-user"></i> Total Pay At College</span>
          <div class="count green">{{$total_college_pay}}</div>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Arts Admission</span>
        <div class="count green">{{$total_arts}}</div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Commerce Admission</span>
        <div class="count green">{{$total_commerce}}</div>
      </div>      
    </div>
    <!-- /top tiles -->

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
              <div class="x_content">
                 {{--//////////// Last Ten Sellers //////////////--}}
                 <div class="table-responsive">
                    <h2>Last 10 Admission List</h2>
                    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                            <tr class="headings">                
                                <th class="column-title">Sl No. </th>
                                <th class="column-title">Name</th>
                                <th class="column-title">Email</th>
                                <th class="column-title">Mobile No</th>
                                <th class="column-title">Payment Type</th>
                                <th class="column-title">Date</th>
                            </tr>
                        </thead>

                        <tbody>
                          @if (isset($last_student) && !empty($last_student) )
                          @php
                              $count_student = 1;
                          @endphp
                              @foreach ($last_student as $item)
                                <tr>
                                  <td>{{$count_student++}}</td>
                                  <td>{{$item->name}}</td>
                                  <td>{{$item->email}}</td>
                                  <td>{{$item->mobile}}</td>
                                  <td>
                                    @if ($item->payment_type == '2')
                                      <a class="btn btn-primary">Online Pay</a>
                                    @else
                                      <a class="btn btn-warning">Pay At College</a>
                                    @endif
                                  </td>
                                  <td>{{ \Carbon\Carbon::parse($item->created_at)->toDayDateTimeString()}}</td>
                                </tr>
                              @endforeach
                            @else
                            <tr>
                              <td colspan="6" align="center">No Student Found</td>
                            </tr>
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