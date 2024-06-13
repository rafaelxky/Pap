// Executa um fetch do externo.php e coloca a resposta no id 'externo'
fetch('externo.php')
  .then(response => response.text())
  .then(data => {
    document.getElementById('externo').innerHTML = data;

    // Adicionar a classe 'active' ao item de navegação correspondente
    if (typeof activePage !== 'undefined') {
      const navItems = {
        index: 'index.php',
        des: 'des.php',
        creditos: 'creditos.php',
        galeria: 'galeria.php',
        avaliacoes: 'reviews.php',
        login: 'login.php',
      };

      for (const [key, value] of Object.entries(navItems)) {
        if (key === activePage) {
          const activeLink = document.querySelector(`a[href="${value}"]`);
          if (activeLink) {
            activeLink.parentElement.classList.add('active');
          }
        }
      }
    }
  })
  .catch(error => {
    console.error('Error fetching data:', error);
  });

// Executa um fetch do head.php e coloca a resposta no id 'head'
fetch('head.php')
  .then(response => response.text())
  .then(data => {
    document.getElementById('head').innerHTML = data;
  })
  .catch(error => {
    console.error('Error fetching data:', error);
  });




// Executa um fetch do footer.php e coloca a resposta no id 'footer'
fetch('footer.php')
  .then(response => response.text())
  .then(data => {
    document.getElementById('footer').innerHTML = data;
  })
  .catch(error => {
    console.error('Error fetching data:', error);
  });

console.log("O externo.js foi executado!");

