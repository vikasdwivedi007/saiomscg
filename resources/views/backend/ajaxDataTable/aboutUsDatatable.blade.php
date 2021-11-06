@foreach($aboutData as $row)
<tr>
   <td>{{$row->id}}</td>
   <td>{{$row->title}}</td>
   <td>{{$row->description}}</td>
   <td>
     <a title="about us image" target="_blank" href="{{'aboutUsIamges/'.$row->images}}"> <img src="{{'aboutUsIamges/'.$row->images}}" title="about us" width="80" height="65"></a>

   </td>
   <td>
      @if($row->status == 1)  
      <a title="active" href="javascript:void(0)" onclick="return aboutUsStatusChange('{{$row->id}}','{{$row->status}}')" class="btn btn-success btn-sm">Active</a>
      @elseif($row->status == 2)
      <a title="inactive" href="javascript:void(0)" onclick="return aboutUsStatusChange('{{$row->id}}','{{$row->status}}')" class="btn btn-danger btn-sm">Inactive</a>
      @endif
   </td>
   <td>
      <a  title="edit" href="javascript:void(0)" onclick="return openAboutUsEditPopup('{{$row->id}}')" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
      <a title="delete" href="javascript:void(0)"  onclick="return aboutUsDelete('{{$row->id}}')" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
   </td>
</tr>             	 	
@endforeach 