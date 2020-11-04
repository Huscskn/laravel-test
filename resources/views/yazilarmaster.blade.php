@extends('yazilar')
@section('form')
    <form method="POST" action="yazilar">
        @csrf
        <select name="object_key">

            @foreach($kategoriler as $kategori)
                <option value="{{$kategori->id}}">{{$kategori->kategori_baslik}}</option>
            @endforeach

        </select><br>
        <select name="relation_key" >
        @foreach($yazilar as $yazi)
                <option value="{{$yazi->id}}">{{$yazi->baslik}}</option>
            @endforeach
        </select>
        <button type="submit">Ekle</button>
    </form>
    @endsection
