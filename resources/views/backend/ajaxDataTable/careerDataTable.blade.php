@foreach($careerData as $row)
<tr>
   <td>{{$row->id}}</td>
   <td>{{$row->job_post}}</td>
   <td>{{$row->location}}</td>
   <td>{{$row->description}}</td>
   <td>
      @if($row->status == 1)  
      <a title="active" href="javascript:void(0)" onclick="return careerStatusChange('{{$row->id}}','{{$row->status}}')" class="btn btn-success btn-sm">Active</a>
      @elseif($row->status == 2)
      <a title="inactive" href="javascript:void(0)" onclick="return careerStatusChange('{{$row->id}}','{{$row->status}}')" class="btn btn-danger btn-sm">Inactive</a>
      @endif
   </td>
   <td>
      <a  title="edit" href="javascript:void(0)" onclick="return openCareerEditPopup('{{$row->id}}')" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
      <a title="delete" href="javascript:void(0)"  onclick="return careerDelete('{{$row->id}}')" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
   </td>
</tr>             	 	
@endforeach 