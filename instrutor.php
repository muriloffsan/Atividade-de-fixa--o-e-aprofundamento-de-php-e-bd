<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrutores</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f4f4f4; }
        button { margin-right: 5px; }
    </style>
</head>
<body>
    <h2>Instrutores</h2>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Especialidade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody id="instrutores-lista">
            <!-- Os instrutores serão inseridos aqui dinamicamente -->
        </tbody>
    </table>
    
    <script>
        let instrutores = [
            { nome: "Carlos Silva", especialidade: "Matemática" },
            { nome: "Ana Souza", especialidade: "Física" }
        ];

        function carregarInstrutores() {
            const lista = document.getElementById("instrutores-lista");
            lista.innerHTML = "";
            instrutores.forEach((instrutor, index) => {
                let row = `<tr>
                    <td>${instrutor.nome}</td>
                    <td>${instrutor.especialidade}</td>
                    <td>
                        <button onclick="editarInstrutor(${index})">Editar</button>
                        <button onclick="excluirInstrutor(${index})">Excluir</button>
                    </td>
                </tr>`;
                lista.innerHTML += row;
            });
        }

        function editarInstrutor(index) {
            let novoNome = prompt("Novo nome:", instrutores[index].nome);
            let novaEspecialidade = prompt("Nova especialidade:", instrutores[index].especialidade);
            if (novoNome && novaEspecialidade) {
                instrutores[index] = { nome: novoNome, especialidade: novaEspecialidade };
                carregarInstrutores();
            }
        }

        function excluirInstrutor(index) {
            if (confirm("Tem certeza que deseja excluir este instrutor?")) {
                instrutores.splice(index, 1);
                carregarInstrutores();
            }
        }

        carregarInstrutores();
    </script>
</body>
</html>
