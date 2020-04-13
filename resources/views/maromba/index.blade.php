<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title>Marombas</title>
    </head>
    <body>
        <div class="container-fluid">
            <h1 class="text-center">Marombas</h1>
            <hr/>

            <form method="POST" action="{{ route('maromba.search') }}">
                {{ csrf_field() }}
                <select id="gender" name="gender" class="form-control">
                    <option value="" selected="">Selecione um Genêro</option>
                    <option value="Male">Homem</option>
                    <option value="Female">Mulher</option>
                </select>
                <br/>
                <button type="submit" class="btn btn-primary">Filtrar</button>
                <a href="{{ route('maromba.index') }}" class="btn btn-danger">Limpar Filtros</a>
            </form>

            <hr/>

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>Peso</th>
                        <th>Gênero</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($marombas as $maromba)
                        <tr>
                            <td>{{ $maromba->name }}</td>
                            <td>{{ $maromba->age }}</td>
                            <td>{{ $maromba->weight }}</td>
                            <td>{{ $maromba->gender }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">Não Há Dados</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            {{ $marombas->links() }}
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
