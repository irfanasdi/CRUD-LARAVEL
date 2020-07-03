@extends ('adminlte.master')

@section ('content')
	<table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>Title</th>
        <th>Question</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($pertanyaan as $value)
      <tr>
        <td>{{$loop->iteration }}</td>
        <td>{{$value->title}}</td>
        <td>{{$value->Question}}</td>
      </tr> 
      @endforeach
    </tbody>
  </table>
@endsection