@extends('layouts.app')

@section('content')
<form action="{{ route('racineSimple') }}" method="POST">
    @csrf
    <table>
        <tr>
            <td>Nombre </td>
            <td><input type="number" name="a" ></td>
        </tr>
        <tr>
            <td><input type="submit" value="Raciner"></td>
        </tr>
    </table>
    <div>
        Resultats : {{$racine}}
    </div>
</form>
@endsection
