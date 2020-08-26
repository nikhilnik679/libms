const book = document.getElementById('book');

if (book) {
  book.addEventListener('click', e => {
    if (e.target.className === 'btn btn-danger delete-book') {
      if (confirm('Are you sure?')) {
        const id = e.target.getAttribute('data-id');

        fetch(`/book/delete/${id}`, {
          method: 'DELETE'
        }).then(res => window.location.reload());
      }
    }
  });
}
