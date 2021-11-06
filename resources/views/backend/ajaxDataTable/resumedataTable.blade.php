 @foreach($resumM as $row)
  <tr>
   <td>{{$row->id}}</td>
   <td>{{$row->name}}</td>
   <td>{{$row->subject}}</td>
   <td>{{$row->email}}</td>
   <td>{{$row->mobile}}</td>
   <td>{{$row->position}}</td>
   <td>
      <a title="resume/cv" target="_blank" href="{{'resume/'.$row->resume}}"><i class="fa fa-file" aria-hidden="true"></i></a>
   </td>
   <td>
      @if($row->status == 1)  
      <a title="active" href="javascript:void(0)" onclick="return resumeStatsChnage('{{$row->id}}','{{$row->status}}')" class="btn btn-success btn-sm">Active</a>
      @elseif($row->status == 2)
      <a title="inactive" href="javascript:void(0)" onclick="return resumeStatsChnage('{{$row->id}}','{{$row->status}}')" class="btn btn-danger btn-sm">Inactive</a>
      @endif
   </td>
   <td>                 
      <a title="delete" href="javascript:void(0)"  onclick="return resumeDelete('{{$row->id}}')" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
   </td>
</tr> 
@endforeach 