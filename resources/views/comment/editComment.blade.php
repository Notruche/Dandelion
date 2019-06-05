<form action="{{route('updateComment',['id'=>$com->id])}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
@csrf
<div class="form-group">
    <textarea type="text"
      class="form-control" name="content" aria-describedby="helpId" value="{{old('content',$com->content)}}"></textarea>
  </div>

<button type="submit"> Modifier </button>