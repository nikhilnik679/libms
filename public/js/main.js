$(document).ready(function(){

  // index page slider 

        $('.intro').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: false,
          cssEase: 'linear',
          autoplay: true,
          arrows: false,
        });
        
  // view_book page show book details on info button click

      $('.show_book_details').click(function(e) {
        
        let book_title = $(this).parent().parent().find('.card-header').html();
        let book_author = $(this).parent().find('.card-title').html();
        let department_name = $(this).parent().find('.card-text').html();
          
        let emptyString = "<p> </p>";
        $(".bookTitle").html(emptyString + book_title); 
        $(".bookAuthor").html(emptyString + book_author);   
        $(".bookDepartment").html(emptyString + department_name);   

        $(".book_details_popup").addClass("is-on");           
      });  

      $('.close').click(function(e) {
        $(".book_details_popup").removeClass("is-on");
      });  
  
  // show welcome message to user on /index page o

      if ( $(location).attr('pathname') == "/index" ) {

      //  alert("Thank you xyz \n for coming to our site");
        
      }

});

 

  