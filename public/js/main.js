const toggleButton = document.getElementsByClassName('toggle-button')[0];
const navbarLinks = document.getElementsByClassName('navbar-links')[0];

toggleButton.addEventListener('click', () => {
  navbarLinks.classList.toggle('active');
});

// eslint-disable-next-line no-undef
$(document).ready(() => {
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
  $('.show_book_details').click(function (e) {
    const bookTitle = $(this).parent().parent().find('.card-header').html();
    const bookAuthor = $(this).parent().find('.card-title').html();
    const departmentName = $(this).parent().find('.card-text').html();

    const emptyString = '<p> </p>';
    $('.bookTitle').html(emptyString + bookTitle);
    $('.bookAuthor').html(emptyString + bookAuthor);
    $('.bookDepartment').html(emptyString + departmentName);

    $('.book_details_popup').addClass('is-on');
  });

  $('.close').click(() => {
    $('.book_details_popup').removeClass('is-on');
  });

  // show welcome message to user on /index page o

  if ($(location).attr('pathname') === '/index') {
    //  alert("Thank you xyz \n for coming to our site");
  }
});
