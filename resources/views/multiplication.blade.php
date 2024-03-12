@extends('layouts.app')
@section('content')
<form action="{{ route('multiplicationSimple') }}" method="POST">
    @csrf
    <table>
        <tr>
            <td>Nombre 1</td>
            <td><input type="number" name="a" id=""></td>
        </tr>
        <tr>
            <td>Nombre 2</td>
            <td><input type="number" name="b"></td>
        </tr>
        <tr>
            <td><input type="submit" value="MULTIPLIER"></td>
        </tr>
    </table>
    <div>
        Resultats : {{$mul}}
    </div>
</form>
@endsection
