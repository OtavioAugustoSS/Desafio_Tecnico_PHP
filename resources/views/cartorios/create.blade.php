<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Novo Cartório</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Cadastrar Novo Cartório</h2>
            <a href="{{ route('cartorios.index') }}" class="btn btn-secondary">Voltar</a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('cartorios.store') }}" method="POST">
                    @csrf <div class="mb-3">
                        <label for="nome" class="form-label">Nome do Cartório</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>

                    <div class="mb-3">
                        <label for="cnpj" class="form-label">CNPJ</label>
                        <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="00.000.000/0000-00" required>
                    </div>

                    <div class="mb-3">
                        <label for="nome_tabeliao" class="form-label">Nome do Tabelião</label>
                        <input type="text" class="form-control" id="nome_tabeliao" name="nome_tabeliao" required>
                    </div>

                    <div class="mb-3">
                        <label for="municipio_id" class="form-label">Município</label>
                        <select class="form-select" id="municipio_id" name="municipio_id" required>
                            <option value="">Selecione um município...</option>
                            @foreach($municipios as $municipio)
                                <option value="{{ $municipio->id }}">{{ $municipio->nome }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4 form-check">
                        <input type="checkbox" class="form-check-input" id="ativo" name="ativo" value="1" checked>
                        <label class="form-check-label" for="ativo">Cartório Ativo</label>
                    </div>

                    <button type="submit" class="btn btn-success">Salvar Cartório</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('cnpj').addEventListener('input', function (e) {
            var x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,3})(\d{0,3})(\d{0,4})(\d{0,2})/);
            e.target.value = !x[2] ? x[1] : x[1] + '.' + x[2] + (x[3] ? '.' + x[3] : '') + (x[4] ? '/' + x[4] : '') + (x[5] ? '-' + x[5] : '');
        });
    </script>
</body>
</html>