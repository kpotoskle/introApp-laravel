@extends('layouts.app')

@section('content')
    <form action="{{ route('additionSimple') }}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Nombre1</td>
                <td><input type="number" name="a" id=""></td>
            </tr>
            <tr>
                <td>Nombre2</td>
                <td><input type="number" name="b"></td>
            </tr>
            <tr>
                <td><input type="submit" value="ADDITIONNER"></td>
            </tr>
        </table>
        <div>
            Resultats : {{$somme}}
        </div>
    </form>
@endsection
