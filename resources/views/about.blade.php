@extends ('layouts.main')

@section('container')      
      <h1>Latihan Laravel</h1>
       <h2>{{ $name }}</h2>
       <p>{{ $email }}</p>
       <img src="img/{{ $image }}" alt="bg_login" width="200px">

<script src="js/script.js"></script>
@endsection
