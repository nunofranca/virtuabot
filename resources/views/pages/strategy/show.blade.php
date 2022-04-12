@extends('master.index')
@section('content_herder')
    <div class="d-flex justify-content-between">
        <p>Placares monitorados da estratégia - {{$strategy->name}}</p>
        <button type="button" class="btn btn-success mx-3 " data-bs-toggle="modal" data-bs-target="#new-signal">
            CADASTRAR NOVO SINAL
        </button>
    </div>
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-success shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between">
                        <h6 class="text-white text-capitalize ps-3">Placares monitorados</h6>

                    </div>
                </div>
                <div class="card-body px-0 pb-2">

                    <div class="table-responsive p-0">

                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Placar
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Intervalo
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Frequencia
                                </th>

                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    % Frequencia
                                </th>

                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Última Ocorrencia
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Status
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Açoes
                                </th>

                                <th class="text-secondary opacity-7"></th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($signals as $signal)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">

                                            <div class="d-flex flex-column justify-content-center">
                                                <h5 class="mb-0 text-sm">{{$signal->home}} X {{$signal->visit}}</h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{$signal->gap}} minutos</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">0</p>
                                    </td>

                                    <td class="align-middle text-center text-sm">
                                        <span class="text-xs font-weight-bold mb-0">0%</span>
                                    </td>

                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" name="status" type="checkbox"
                                                   id="{{$signal->id}}"
                                                   @if($signal->status) checked @endif>
                                            <span class="badge badge-sm bg-gradient-success">Online</span>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center">
                                        <div class="form-check form-switch mt-3">
                                            <div class="btn-group">
                                                <button data-id="{{$signal->id}}" data-type="edit"
                                                        class="btn btn-warning text-white active"
                                                        aria-current="page">Editar
                                                </button>
                                                <a href="#" class="btn btn-danger">Excluir</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('pages.strategy.__partials.edit-signal')
    @include('pages.strategy.__partials.new-signal')
@stop
@section('js')
    <script src="{{mix('js/signal/js/updateStatusSignal.js')}}"></script>

    <script>

        const edits = document.querySelectorAll("button[data-type='edit']")

        for (let i = 0; i < edits.length; i++) {

            edits[i].addEventListener('click', function (){

                signal(this.getAttribute('data-id'))
                    .then(res => res.json())
                    .then(res => {
                        const form = document.querySelector("form[name='editSignal']")
                        const idHome = document.querySelector("#home");
                        const idVisit = document.querySelector("#visit");
                        const idGap = document.querySelector("#gap");


                        form.setAttribute('action', `/painel/sinais/${res.id}`)
                        idHome.value = res.home
                        idVisit.value = res.visit
                        idGap.value = res.gap
                        const editSignal = new bootstrap.Modal(document.querySelector('#edit-signal'))
                        editSignal.toggle()


                    })
            })

        }

        function signal(id) {
            return fetch(`/api/signal/${id}`)

        }
    </script>

    <script>

    </script>
@stop

