<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Desafio - Cartórios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        
        @if(session('sucesso'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('sucesso') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Lista de Cartórios</h2>
            <a href="{{ route('cartorios.create') }}" class="btn btn-primary">Novo Cartório</a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-hover mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>CNPJ</th>
                            <th>Tabelião</th>
                            <th>Município</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($cartorios as $cartorio)
                            <tr>
                                <td>{{ $cartorio->id }}</td>
                                <td>{{ $cartorio->nome }}</td>
                                <td>{{ $cartorio->cnpj }}</td>
                                <td>{{ $cartorio->nome_tabeliao }}</td>
                                <td>{{ $cartorio->municipio?->nome ?? '-' }}</td>
                                <td>
                                    @if($cartorio->ativo)
                                        <span class="badge bg-success">Ativo</span>
                                    @else
                                        <span class="badge bg-danger">Inativo</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('cartorios.edit', $cartorio->id) }}" class="btn btn-sm btn-warning">Editar</a>

                                    <form action="{{ route('cartorios.destroy', $cartorio->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Tem certeza que deseja excluir este cartório? Esta ação não pode ser desfeita.');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center text-muted py-4">Nenhum cartório cadastrado ainda.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>