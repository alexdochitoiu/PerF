@extends('layouts.index')
@section('title')
    Bine ai venit pe PerF
 @endsection

@section('content')

    <div class="container container-min container-custom content">
    <div class="row">
            <div class="text-header col-sm-12 col-xs-12">
                <p class="bine_ai_venit">Bine ai venit pe</p>
                <p class="header_perf_text">PerF</p>
            </div>
            <div class="col-sm-6 col-xs-12" >
                <div class="col-sm-6 col-xs-6">
                    <select class="form-control margin-8-0" id="sel1">
                        <option>Apartamente</option>
                        <option>Case</option>
                        <option>Terenuri</option>
                        <option>Birouri</option>
                    </select>
                </div>
                <div class="col-sm-6 col-xs-6">
                    <select class="form-control margin-8-0" id="sel2">
                        <option>Vanzare</option>
                        <option>Inchiriere</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <form class="navbar-form" role="search">
                    <div class="input-group add-on searchBar">
                        <input class="form-control" placeholder="Introduceti orasul (ex: Constanta)" name="srch-term" id="srch-term" type="text">
                        <div class="input-group-btn">
                            <button class="btn btn-default search" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
