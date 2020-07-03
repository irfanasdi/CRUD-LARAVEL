@extends ('adminlte.master')

@section('content')
<form action="/pertanyaan" method="POST">
	{{csrf_field}}
   <div class="form-group">
    <label for="pertanyaan">Title:</label>
    <input type="text" class="form-control" name="title" placeholder="Enter Judul" id="title">
  </div>
   <div class="form-group">
    <label for="pertanyaan">Question:</label>
    <input type="text" class="form-control" name="question" placeholder="Isi Pertanyaan" id="question">
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection