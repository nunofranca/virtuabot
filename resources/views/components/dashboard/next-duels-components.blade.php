<div>
    <div class="card">
        <div class="card-header pb-0">
            <div class="row">
                <div class="col-lg-6 col-7">
                    <h6>Próximos jogos</h6>

                </div>
                <div class="col-lg-6 col-5 my-auto text-end">
                    <div class="dropdown float-lg-end pe-4">
                        <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            <i class="fa fa-ellipsis-v text-secondary"></i>
                        </a>
                        <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Copa do mundo</a></li>
                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Euro CUP</a>
                            </li>
                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Premiership
                                    here</a></li>
                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Superliga
                                    here</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body px-0 pb-2">
            <div class="table-responsive">
                <table class="table align-items-center mb-0">
                    <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jogo
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            Hora
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Liga
                        </th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($duels as $duel)
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <div>
                                    <h6 class="mb-0 text-sm">{{$duel->clubHome}} x {{$duel->clubVisit}}</h6>
                                </div>

                            </div>
                        </td>
                        <td>
                            <h6 class="mb-0 text-sm">{{\Carbon\Carbon::parse($duel->dateHour)->format('d/m/y - H:i')}}</h6>
                        </td>
                        <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold"> {{$duel->league->name}} </span>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

