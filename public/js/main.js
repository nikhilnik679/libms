// if (window.location.pathname == "/index") {
//     window.onload = function () {
//       if (!("hasCodeRunBefore" in localStorage)) {
//         $("#welcomeMsg").modal("toggle");
//         // alert("Thank you xyz \n for coming to our site");
//         localStorage.setItem("hasCodeRunBefore", true);
//       }
//     };
//   }
  
  // $('.show_book_details').click(e => alert($(e.currentTarget).data('val')));
  // $(".show_book_details").click(function() { 
  //   //alert("book_title");
  //  let appendthis =  ("<div class='modal-overlay js-modal-close'></div>");

  //  let book_title = $(this).parent().parent().find('.card-header').html();
  //  let book_author = $(this).parent().find('.card-title').html();
  //  let department_name = $(this).parent().find('.card-text').html();
    
  //  let emptyString = "<p> </p>";
  //  $(".bookTitle").html(emptyString + book_title); 
  //  $(".bookAuthor").html(emptyString + book_author);   
  //  $(".bookDepartment").html(emptyString + department_name);   
  
  // });
  
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
  

  $(document).ready(function(){

    

    $('.intro').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,
      cssEase: 'linear',
      autoplay: true,
      arrows: false,
    });


    let appendthis =  ("<div class='modal-overlay js-modal-close'></div>");

    $('.show_book_details').click(function(e) {
      alert("hello");
      // e.preventDefault();
      // $("body").append(appendthis);
      // $(".modal-overlay").fadeTo(500, 0.7);
      // //$(".js-modalbox").fadeIn(500);
      // var modalBox = $(this).attr('data-modal-id');
      // $('#'+modalBox).fadeIn($(this).data());
    });  

    // $(".js-modal-close, .modal-overlay").click(function() {
    //   $(".modal-box, .modal-overlay").fadeOut(500, function() {
    //     $(".modal-overlay").remove();
    //   });
    // });
     
    // $(window).resize(function() {
    //   $(".modal-box").css({
    //     top: ($(window).height() - $(".modal-box").outerHeight()) / 2,
    //     left: ($(window).width() - $(".modal-box").outerWidth()) / 2
    //   });
    // });
     
    // $(window).resize();

  });

 