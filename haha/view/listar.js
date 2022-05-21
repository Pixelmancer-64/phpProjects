let xhr = new XMLHttpRequest();

xhr.open("GET", "../controller/filmeListar.php");

xhr.send(null);

xhr.onreadystatechange = function() {
	if(xhr.readyState === 4){
		if(!(xhr.status === 200 || xhr.status === 304)){
			document.querySelector("#msgErro").textContent = "Erro do cliente"+xhr.statusText;
			console.log(xhr);
			return;
		}

		if((xhr.status === 200 || xhr.status === 304)){
			console.log(xhr)
			const resposta = JSON.parse(xhr.responseText);
			console.log(resposta)
			if(resposta.erro == false){
			
				const dados = resposta.dados;
				montarTabela(dados)
				console.log(dados)
			} else{
				spanErro = document.querySelector('#msgErro');
				spanErro.textContent = resposta.msgErro;
			}

		}
	}
} 

function montarTabela(dados){
	dados.forEach(e => {
		const tr = document.createElement('tr');
		const tdId = document.createElement('td');
		tdId.textContent = e.id;
		tr.appendChild(tdId)

		const tdTitulo = document.createElement('td');
		tdTitulo.textContent = e.titulo;
		tr.appendChild(tdTitulo)

		const tdAvaliacao = document.createElement('td');
		tdAvaliacao.textContent = e.tdAvaliacao;
		tr.appendChild(tdAvaliacao);

		const tdAcoes = document.createElement('tr');
		const links = `<a href="../controller/filmeBuscar.php?id=${e.id}">EDITAR</a><a href="../controller/filmeExcluir.php?id=${e.id}">EDITAR</a>`
		tdAcoes.innerHTML = links;
		tr.appendChild(tdAcoes)

		document.querySelector('tbody').appendChild(tr)
	});
}