<!-- Modal -->
<div class="modal fade" id="new-strategy" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastro de estratégias</h5>
                <button type="button" class="btn-close bg-danger" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('strategies.post')}}">
                    @csrf
                    <div class="form-group">
                        <div class="d-flex justify-content-between">
                            <label for="name"></label>
                            <input type="text" class="form-control fs-5 bg-gray-200 p-3" id="name"
                                   aria-describedby="homeHelp" name="name" placeholder="Nome da estratégia">
                        </div>
                    </div>
                    <div class="d-grid gap-2 mt-4">

                        <button type=submit class="btn btn-success">Salvar</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
