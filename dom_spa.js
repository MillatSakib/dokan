 // Function to show a specific page and hide others
 function showPage(pageId) {
    const pages = document.querySelectorAll('.page');
    for (const page of pages) {
        page.classList.remove('active');
    }
    const currentPage = document.getElementById(pageId);
    currentPage.classList.add('active');
}