
let numero = 10;
function adicionarnaTabela() {
    const nome = document.getElementById('nomeMusicas').value;
    const autor = document.getElementById('nomeAutor').value;
  
    const tabela = document.getElementById('tbody');
  
    const novaLinha = document.createElement('tr');
    const novoNumero = document.createElement('th');
    const novoNome = document.createElement('td');
    const novoAutor = document.createElement('td');
  
    numero++;
    novoNumero.innerHTML = numero;
    novoNome.innerText = nome;
    novoAutor.innerText = autor;
  
    novaLinha.appendChild(novoNumero);
    novaLinha.appendChild(novoAutor);
    novaLinha.appendChild(novoNome);
  
    tabela.appendChild(novaLinha);
  }
  function ordenar() {
    var rows = Array.from(document.querySelectorAll('#mtable tbody tr'));
    rows.sort(function(rowA, rowB) {
        var autorA = rowA.querySelector('.autor').innerText.toLowerCase();
        var autorB = rowB.querySelector('.autor').innerText.toLowerCase();
        
        if (autorA < autorB) return -1;
        if (autorA > autorB) return 1;
        return 0;
    });
    var tbody = document.querySelector('#mtable tbody');
    rows.forEach(function(row) {
        tbody.appendChild(row);
    });
}
