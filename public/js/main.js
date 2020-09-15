
console.log('Hello Webpack Encore! Edit me in assets/js/app.js');

if (window.location.pathname == "/index") {
    window.onload = function () {
      if (!("hasCodeRunBefore" in localStorage)) {
        $("#welcomeMsg").modal("toggle");
        // alert("Thank you xyz \n for coming to our site");
        localStorage.setItem("hasCodeRunBefore", true);
      }
    };
  }
  
  // $('.show_book_details').click(e => alert($(e.currentTarget).data('val')));
  
  $(".show_book_details").click(function() { 
  
   let book_title = $(this).parent().parent().find('.card-header').html();
   let book_author = $(this).parent().find('.card-title').html();
   let department_name = $(this).parent().find('.card-text').html();
  // alert(book_title);
   let emptyString = "<p> </p>";
   $(".bookTitle").html(emptyString + book_title); 
   $(".bookAuthor").html(emptyString + book_author);   
   $(".bookDepartment").html(emptyString + department_name);   
   $(".modal").modal("toggle");  
  });
  
  // const book = document.getElementById('book_list');
  
  // if (book) {
  //   book.addEventListener('click', e => {
  //     if (e.target.className === 'btn btn-danger delete-book') {
  //       if (confirm('Are you sure?')) {
  //         const id = e.target.getAttribute('data-id');
  
  //         fetch(`/Book/delete/${id}`).then(res => window.location.reload());
  //       }
  //     }
  //   });
  // }
  