@extends('layout')
@section('content')
    <div class="jumbotron bg-fej text-center">
        <h1>COVID</h1>
        <h3>Külkereskedelmi folyamatok 2020. január–május</h3>
    </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 align-content-center bg-torzs">
                <h3>Az ön általválasztott régióba található régiók adatai.</h3
            </div>
            <h3>Világkereskedelem</h3>
            <p><a href="https://www.ksh.hu/docs/hun/xftp/idoszaki/kulker/kul_foly_2020_05/index.html#avilgkereskedelemjelentsmrtkbenvisszaesett" target="_blank">A világkereskedelem jelentős mértékben visszaeset</a>
            <p>A világkereskedelem jelentős mértékben visszaesett
                „…2020 I. negyedévében a globális gazdasági folyamatok középpontjában a koronavírus okozta járvánnyal kapcsolatos intézkedések álltak. A járvány kiindulópontjának számító Kínában megtört a több évtizede tartó konjunktúra, és 2020 I. negyedévében 6,8%-kal csökkent a gazdaság teljesítménye. A világgazdaság legjelentősebb szereplőjének számító Egyesült Államokban 0,3%-ra lassult a növekedés üteme. A szűkebb környezetünket jelentő Európai Unióban (EU27) 2,6 %-kal csökkent a gazdaság teljesítménye.”</p>
            <p><img src="../img/vilag.png" class="img-thumbnail" alt="grafikon" title="grafikon"/></p>
            <p><a href="https://www.cpb.nl/en/worldtrademonitor" target="_blank">Forrás: CPB Netherlands Bureau for Economic Policy Analysis, World Trade Monitor. </a></p>
        </div>

        <div class="col-sm-12 align-content-center" >
            <table class="col-sm-7  table table-striped">
                <thead>
                <tr>
                    <th scope="col">Régió neve</th>
                    <th scope="col">Dátum</th>
                    <th scope="col">Százalékpont</th>
                </tr>
                </thead>
                <tbody>
                @foreach($adatok as $item)
                    <tr>
                        <th>{{$item->zonanev}}</th>
                        <th>{{$item->datum}}</th>
                        <th>{{$item->szazalekpont}}</th>
                </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>

@endsection
