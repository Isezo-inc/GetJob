var inputElements = document.querySelectorAll('input[type="text"],input[type="number"],input[type="email"],input[type="tel"],input[type="date"], select, textarea');
//var radioElements= document.querySelectorAll('input[type="radio"]');
var checkboxElements= document.querySelectorAll('input[type="checkbox"]');
function checkValidity() {};

$("body").on("input", ".save", function () {
  var id = $(this).attr('id')
  if($(this).attr('type') != "checkbox") {
    sessionStorage.setItem(id, $(this).val());
    checkValidity();
  }
});

$("body").on("click", ".save", function () {
  var id = $(this).attr('id')
  if($(this).attr('type') == "checkbox") {
    if($(this).prop("checked")){
      sessionStorage.setItem(id, "true");
    }else{
     sessionStorage.setItem(id, "false");
   }
 }
});

  for (i=0; i<inputElements.length; i++) {
   (function(inputElements) {
     var id = inputElements.getAttribute('id');
     if(sessionStorage.getItem(id)){
       inputElements.value = sessionStorage.getItem(id); // обязательно наличие у элементов id
       if(inputElements.value != '')
        inputElements.classList.add("has-val");
     }
   })(inputElements[i]);
  }

  for (i=0; i<checkboxElements.length; i++) {
   (function(checkboxElements) {
     var id = checkboxElements.getAttribute('id');
     if (sessionStorage.getItem(id) == "true") {
      document.getElementById(id).setAttribute('checked','checked');
      checkValidity();
    }else{
      document.getElementById(id).checked = false;
      checkValidity();
    };
   })(checkboxElements[i]);
  }
