const pageNumber = document.getElementById('pageNumber');
    const prevButton = document.getElementById('prevButton');
    const nextButton = document.getElementById('nextButton');

    let currentPage = 1;
    const totalPages = 15;

    prevButton.addEventListener('click', () => {
      if (currentPage > 1) {
        currentPage--;
        updatePageNumber();
      }
    });

    nextButton.addEventListener('click', () => {
      if (currentPage < totalPages) {
        currentPage++;
        updatePageNumber();
      }
    });

    function updatePageNumber() {
      pageNumber.textContent = `${currentPage} of ${totalPages}`;
    }
