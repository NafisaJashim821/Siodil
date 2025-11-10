

document.addEventListener("DOMContentLoaded", function () {
  const cards = document.querySelectorAll("#ingredientCards .col-md-4");
  const pageButtons = document.querySelectorAll(".page-btn");

  const cardsPerPage = 12;
  let currentPage = 1;

 
  function showPage(page) {
    const start = (page - 1) * cardsPerPage;
    const end = start + cardsPerPage;

    cards.forEach((card, index) => {
      card.style.display = (index >= start && index < end) ? "block" : "none";
    });

   
    pageButtons.forEach(btn => btn.classList.remove("active"));
    pageButtons[page - 1].classList.add("active");
  }


  pageButtons.forEach((btn, index) => {
    btn.addEventListener("click", () => {
      currentPage = index + 1;
      showPage(currentPage);
    });
  });

  // Show first page by default
  showPage(currentPage);
});
