  button.style.visibility = "hidden";
           var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
     
    }
}



/*admin*/
 var Text = 'hello';

    function setInput(button) {  button.style.visibility = "hidden";
       var buttonVal = button.name,
       textbox = document.getElementById('input_' + buttonVal);
       textbox.value = Text ;
    }

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
 $('body').on('scroll mousewheel touchmove', function(e) {
      e.preventDefault();
      e.stopPropagation();
      return false;
});

