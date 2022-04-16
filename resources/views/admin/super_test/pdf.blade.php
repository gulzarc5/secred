<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <title>Super Test Registration List</title>
</head>
<style>
    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    #customers td, #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }
    
    #customers tr:nth-child(even){background-color: #f2f2f2;}
    
    #customers tr:hover {background-color: #ddd;}
    
    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #04AA6D;
      color: white;
    }
    @page {
    size: A4 landscape
}
    </style>
<body>
  <h1>Super Test Registration List</h1>
  <div>
    <table cellspacing="0" width="70%" id="customers">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Father</th>
            <th>Mother</th>
            <th>Sex</th>
            <th>Medium</th>
            <th>School</th>
            <th>HSLC Roll - No</th>
            <th>mobile / Whatsapp</th>
            <th>Address</th>
        </tr>
        </thead>
        <tbody>      
            @if (isset($list) && !empty($list))
                @foreach ($list as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->father_name}}</td>
                        <td>{{$item->mother_name}}</td>
                        <td>
                            @if ($item->gender == '1')
                                M
                            @else
                                F
                            @endif
                        </td>
                        <td>{{$item->medium}}</td>
                        <td>{{$item->school}}</td>
                        <td>{{$item->hslc_roll}} - {{$item->hslc_no}}</td>
                        <td>{{$item->mobile_no}} - {{$item->whatsapp_no}}</td>
                        <td>{{$item->village}}, {{$item->land_mark}}, {{$item->po}} ,{{$item->district}}</td>
                    </tr>
                @endforeach
            @endif                 
        </tbody>
    </table>
  </div>
</body>
</body>
</html>