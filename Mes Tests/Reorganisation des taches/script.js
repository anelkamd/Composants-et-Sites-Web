function initialize() {
    const buttons = document.querySelectorAll('button');
  
    buttons.forEach(button => {
      button.addEventListener('click', event => {
        const taskDiv = event.target.parentElement; // Obtenir la div de la tâche
        const allTasks = Array.from(document.querySelectorAll('div')); // Obtenir toutes les tâches
  
        if (event.target.classList.contains('upButton')) {
          // Vérifier si la tâche peut monter
          const previousTask = taskDiv.previousElementSibling;
          if (previousTask) {
            // Monter la tâche
            taskDiv.parentElement.insertBefore(taskDiv, previousTask);
          }
        } else if (event.target.classList.contains('downButton')) {
          // Vérifier si la tâche peut descendre
          const nextTask = taskDiv.nextElementSibling;
          if (nextTask) {
            // Descendre la tâche
            taskDiv.parentElement.insertBefore(nextTask, taskDiv);
          }
        }
  
        // Mettre à jour les boutons après le changement de position
        updateButtons();
      });
    });
  
    updateButtons(); // Initialiser les boutons
  }
  
  function updateButtons() {
    const divs = document.querySelectorAll('div');
    
    divs.forEach((div, index) => {
      // Supprimer les anciens boutons avant de les réinitialiser
      div.querySelectorAll('button').forEach(btn => btn.remove());

      // Si la div n'est pas la première, ajouter un bouton "Monter"
      if (index > 0) {
        const upButton = document.createElement('button');
        upButton.classList.add('upButton');
        upButton.type = 'button';
        upButton.innerHTML = '↑';
        upButton.addEventListener('click', () => moveUp(div));
        div.appendChild(upButton);
      }

      // Si la div n'est pas la dernière, ajouter un bouton "Descendre"
      if (index < divs.length - 1) {
        const downButton = document.createElement('button');
        downButton.classList.add('downButton');
        downButton.type = 'button';
        downButton.innerHTML = '↓';
        downButton.addEventListener('click', () => moveDown(div));
        div.appendChild(downButton);
      }

    });
  }
  
  // Ajout du contenu HTML comme précédemment
  document.body.innerHTML = `
  <div>
      <span>Prepare presentation</span>
      <button class="downButton" type="button">&darr;</button>
  </div>
  <div>
      <span>Read emails</span>
      <button class="downButton" type="button">&darr;</button>
      <button class="upButton" type="button">&uarr;</button>
  </div>
  <div>
      <span>Monthly report</span>
      <button class="upButton" type="button">&uarr;</button>
  </div>`;
  
  initialize(); // Initialiser la fonction
  