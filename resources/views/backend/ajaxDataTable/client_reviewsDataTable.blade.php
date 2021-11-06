 @foreach($clientrivewsD as $row)
  <tr>
   <td>{{$row->id}}</td>
   <td>{{$row->name}}</td>
   <td>{{$row->designation}}</td>
   <!-- <td>{{ Str::limit($row->description, 50)}}</td> -->
   <td>{{$row->description}}</td>
   <td>
      @if($row->status == 1)  
      <a title="inactive" href="" class="btn btn-danger btn-sm" onclick="return ClientStatusChange('{{$row->id}}','{{$row->status}}')" >Inactive</a>
     
      @elseif($row->status == 2)
       <a title="active" href="" class="btn btn-success btn-sm" onclick="return ClientStatusChange('{{$row->id}}','{{$row->status}}')" >Active</a>
      @endif
   </td>
   <td>
      <a  title="edit" href="javascript:void(0)" onclick="return editclientReviesFrom('{{$row->id}}')" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
      <a title="delete" href="{{url('delete-review',$row->id)}}"onclick="return client_revies_delete('{{$row->id}}')" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
   </td>
</tr>                 
 @endforeach 