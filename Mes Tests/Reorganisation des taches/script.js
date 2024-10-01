function initialize() {
    const buttons = document.querySelectorAll('button');
  
    buttons.forEach(button => {
      button.addEventListener('click', event => {
        const div = button.closest('div');
  
        if (button.classList.contains('upButton')) {
          moveUp(div);
        } else if (button.classList.contains('downButton')) {
          moveDown(div);
        }
      });
    });
  
    function moveUp(div) {
      const prevDiv = div.previousElementSibling;
      if (prevDiv) {
        div.parentNode.insertBefore(div, prevDiv);
      }
    }
  
    function moveDown(div) {
      const nextDiv = div.nextElementSibling;
      if (nextDiv) {
        div.parentNode.insertBefore(nextDiv, div);
      }
    }
  }
  
  // Simuler l'interface HTML du document
  document.body.innerHTML = `
  <div>
      <span>Préparer la présentation</span>
      <button class="downButton" type="button">↓</button>
  </div>
  <div>
      <span>Lire les e-mails</span>
      <button class="downButton" type="button">↓</button>
      <button class="upButton" type="button">↑</button>
  </div>
  <div>
      <span>Rapport mensuel</span>
      <button class="upButton" type="button">↑</button>
  </div>`;
  
  // Initialiser les événements
  initialize();
  
  // Simuler des clics pour tester le déplacement des divs
  document.querySelectorAll("button")[0].click(); // Descendre "Préparer la présentation"
  document.querySelectorAll("button")[3].click(); // Monter "Rapport mensuel"
  document.querySelectorAll("button")[1].click(); // Descendre "Lire les e-mails"
  
  // Afficher le nouvel ordre des divs dans la console
  console.log(document.body.innerHTML);