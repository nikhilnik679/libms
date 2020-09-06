//alert("welcome");




const book = document.getElementById('book_list');

if (book) {
  book.addEventListener('click', e => {
    if (e.target.className === 'btn btn-danger delete-book') {
      if (confirm('Are you sure?')) {
        const id = e.target.getAttribute('data-id');
      
        fetch(`/Book/delete/${id}`).then(res => window.location.reload());
      }
    }
  });
}
