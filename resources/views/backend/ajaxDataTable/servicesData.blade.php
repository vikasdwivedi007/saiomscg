
 @foreach($servicesData as $row)
      <tr>
         <td>{{$row->id}}</td>
         <td>{{$row->title}}</td>
         <td>{!! ($row->description) !!}</td>
         <td>
            @if($row->status == 1)  
            <button title="active" onclick="return servicesStatusChange('{{$row->id}}','{{$row->status}}')"  class="btn btn-success btn-sm">Active</button>
            @elseif($row->status == 2)
          <button title="active" onclick="return servicesStatusChange('{{$row->id}}','{{$row->status}}')"  class="btn btn-danger btn-sm">Inactive</button>
            @endif
         </td>
         <td>
            <a  onclick="return openServiceEditPopup('{{$row->id}}')" title="edit" href="javascript:void(0)" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
            <a title="delete" href="javascript:void(0)" onclick="return servicesDelete('{{$row->id}}')" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
         </td>
      </tr>
 @endforeach 
 <script type="text/javascript">
   
 </script>