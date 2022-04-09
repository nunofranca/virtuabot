@extends('master.index')


@section('content')
    <div class="row">
        <div class="col-12">
            <button type="button" class="btn btn-success mx-3 " data-bs-toggle="modal" data-bs-target="#new-strategy">
                CADASTRAR NOVA ESTRATÉGIA
            </button>
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-success shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between">
                        <h6 class="text-white text-capitalize ps-3">Estratégias cadastradas</h6>

                    </div>
                </div>
                <div class="card-body px-0 pb-2">

                    <div class="table-responsive p-0">

                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nome
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Placares monitorados
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
                                    Sinais
                                </th>

                                <th class="text-secondary opacity-7"></th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($strategies as $strategy)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">

                                            <div class="d-flex flex-column justify-content-center">
                                                <h5 class="mb-0 text-sm">{{$strategy->name}}</h5>
                                            </div>
                                        </div>
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
                                                   id="{{$strategy->id}}"
                                                   @if($strategy->status) checked @endif>
                                            <span class="badge badge-sm bg-gradient-success">Online</span>

                                        </div>
                                    </td>
                                    <td class="align-middle text-center">
                                        <div class="form-check form-switch">
                                            <a type="button" href="{{route('strategies.show', $strategy->id)}}" class="btn badge badge-sm bg-gradient-success mt-4">VER DETALHES</a>
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
    @include('pages.strategy.__partials.new-strategy')
@stop
@section('js')
    <script src="{{mix('js/signal/js/updateStatusSignal.js')}}"></script>
@stop

