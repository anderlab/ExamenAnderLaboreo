@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Hoteles de 1ª</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Direccion</th>
      <th>Categoria</th>
    </tr>
    @foreach ($hotels as $hotel)
    <tr>

    @if(($hotel->completo)==true)
      <td style="color: red;">{{$hotel->id}}</td>
      <td  style="color: red;">{{$hotel->nombre}}</td>
      <td style="color: red;" >{{$hotel->direccion}}</td>
      <td style="color: red;">{{$hotel->categoria}}</td>
    @else     
    <td>{{$hotel->id}}</td>
      <td>{{$hotel->nombre}}</td>
      <td>{{$hotel->direccion}}</td>
      <td>{{$hotel->categoria}}</td>
    </tr>
  @endif

  @endforeach
  </table>

@endsection
