<!-- Modal -->
<div class="modal fade" id="modal-deletar-" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">ATENÇÃO!!</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Deseja cadastrar um novo cliente ou buscar um já cadastrado?</p>
            </div>
            <div class="modal-footer">
              <form action="{{ '/pedidos/question' }}" method="get">
                @csrf
                <div>
                    <a href="{{route('clientes.create')}}" class="btn btn-danger btn-lg">Novo Cliente</a>
                    
                    <a href="#" class="btn btn-danger btn-lg">Cancelar</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
