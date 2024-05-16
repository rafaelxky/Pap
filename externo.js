// executa um fetch do externo.php e coloca a resposta no id 'externo'
fetch('externo.php')
  .then(response => response.text())
  .then(data => {
    document.getElementById('externo').innerHTML = data;
  })
  .catch(error => {
    console.error('Error fetching data:', error);
  });