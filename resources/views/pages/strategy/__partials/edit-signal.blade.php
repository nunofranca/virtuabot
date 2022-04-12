<!-- Modal -->
<div class="modal fade" id="edit-signal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Sinal</h5>
                <button type="button" class="btn-close bg-danger" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" name="editSignal">
                    @csrf
                    @method('put')

                    <div class="form-group">
                        <label for="strategy_id">Estratégia</label>
                        <select name="strategy_id" id="strategy_id" class="form-control fs-5 bg-gray-200 p-3 mb-3" readonly>
                            <option value="{{$strategy->id}}">{{$strategy->name}}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between">
                            <input type="number" class="form-control fs-5 bg-gray-200 p-3" id="home"
                                   aria-describedby="homeHelp" name="home">
                            <div class="form-control fs-5 text-center"><strong> X</strong> </div>
                            <input type="number" class="form-control fs-5 bg-gray-200 p-3" id="visit" name="visit">
                        </div>
                    </div>
                    <div class="form-group">
                       <input type="number" min="1" step="1" class="form-control mt-4 fs-5 bg-gray-200 p-3" name="gap" placeholder="Intervalo de entradas" id="gap">
                    </div>
                    <div class="d-grid gap-2 mt-4">

                        <button type=submit class="btn btn-success">Salvar</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
