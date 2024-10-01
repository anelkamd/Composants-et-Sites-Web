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
    const tasks = document.querySelectorAll('div'); // Obtenir toutes les tâches
  
    tasks.forEach((task, index) => {
      const upButton = task.querySelector('.upButton');
      const downButton = task.querySelector('.downButton');
  
      if (index === 0) {
        // Première position : seulement le bouton "Descendre"
        if (upButton) upButton.style.display = 'none';
        if (downButton) downButton.style.display = 'block';
      } else if (index === tasks.length - 1) {
        // Dernière position : seulement le bouton "Monter"
        if (upButton) upButton.style.display = 'block';
        if (downButton) downButton.style.display = 'none';
      } else {
        // Position intermédiaire : les deux boutons
        if (upButton) upButton.style.display = 'block';
        if (downButton) downButton.style.display = 'block';
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
  