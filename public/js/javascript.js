/************
  Funcion para MENU
**************/
$( document ).ready(function() {
});

/************
  FIN Funcion para MENU
**********/

// Recorrer los elementos y hacer que onchange
// ejecute una funcion para comprobar el valor de ese input

(function() {
    $('#menu_on').click(function(){
      $('#wrapper').toggleClass('visible_menu');
    })
  if(document.forms.length){
    var formulario = document.forms[0],
        elementos = formulario.elements,
        message = $('#message');//document.getElementById
        //console.log(message);
  }
  // Funcion que se ejecuta cuando el evento click es activado
  var validarInputs = function(){
    var countpass = 0;
    for (var i = 0; i < elementos.length; i++) {
      // Identificamos si el elemento es de tipo texto, email, password, radio o checkbox
      if (elementos[i].type == "text" || elementos[i].type == "email" || elementos[i].type == "password") {
        //coprobamos si hay mas de un campo password para luego validarlos
        if(elementos[i].type == "password"){ countpass++; }

        // Si es tipo texto, email o password vamos a comprobar que esten completados los input
        if (elementos[i].value.length == 0) {
          //console.log('El campo ' + elementos[i].parentElement.children[1].getAttribute('id') + ' esta incompleto');
          message.html('El campo ' + elementos[i].parentElement.children[1].getAttribute('id') + ' esta incompleto');
          elementos[i].className = elementos[i].className + " error";
          return false;
        } else {
          elementos[i].className = elementos[i].className.replace(" error", "");
        }
      }
    }
    //Comprobando que las contraseñas coincidan
    if(typeof elementos.password !== "undefined" && countpass > 1){
      if (elementos.password.value !== elementos.password2.value) {
        elementos.password.value = "";
        elementos.password2.value = "";
        elementos.password.className = elementos.password.className + " error";
        elementos.password2.className = elementos.password2.className + " error";
      }else {
        elementos.password.className = elementos.password.className.replace(" error", "");
        elementos.password2.className = elementos.password2.className.replace(" error", "");
      }
    }
    return true;
  };

  var validarRadios = function(){
    var radios = new Array,
        resultado = false,
        flag = false;
    for (var i = 0; i < elementos.length; i++){
      if (elementos[i].type == "radio"){
        radios.push(elementos[i]);
        flag = true;
      }
    }
    if(flag){
      for (var o = 0; o < radios.length; o++){
        if (radios[o].checked){
          resultado = true;
          break;
        }else{
          message.html('El campo ' + radios[o].parentElement.children[1].getAttribute('id') + ' es Obligatorio');
          radios[o].parentNode.className = radios[o].parentNode.className + " error";
          //console.log('El campo '+ radios[o].name + ' esta incompleto');
        }
      }
      if(resultado){
        for (var u = 0; u < radios.length; u++){
            radios[u].parentNode.className = radios[u].parentNode.className.replace(" error", "");
        }
          return true;
      }
    }else{
      return true;
    }
  };

  var validarCheckbox = function(){
    var checkbox = new Array,
      resultado = false,
      flag = false;
    for (var i = 0; i < elementos.length; i++){
      if (elementos[i].type == "checkbox"){
        checkbox.push(elementos[i]);
        flag = true;
      }
    }
    if(flag){
      for (var o = 0; o < checkbox.length; o++){
        if (checkbox[o].checked){
          resultado = true;
          break;
        }else{
          message.html('El campo ' + checkbox[o].parentElement.children[1].getAttribute('id') + ' es Obligatorio');
          checkbox[o].parentNode.className = checkbox[o].parentNode.className + " error";
          //console.log('El campo '+ checkbox[o].name + ' esta incompleto');
        }
      }
      if (resultado){
        for (var u = 0; u < checkbox.length; u++){
          checkbox[u].parentNode.className = checkbox[u].parentNode.className.replace(" error", "");
        }
        return true;
      }
    }else{
      return true;
    }
  };

  var enviar = function(e){
    if(!validarInputs()){
      console.log('Falto validar los Input');
      e.preventDefault();
    /*}else if(!validarRadios()){
      console.log('Falto validar los Radio Button');
      e.preventDefault();
    }else if(!validarCheckbox()){
      console.log('Falto validar Checkbox');
      e.preventDefault();*/
    }else{
      console.log('Envia');
      //e.preventDefault();
      return e;
    }
  };

  var focusInput = function(){
    this.parentElement.children[1].className = "label active";
    this.parentElement.children[0].className = this.parentElement.children[0].className.replace("error", "");
  };

  var blurInput = function(){
    if (this.value <= 0){
      this.parentElement.children[1].className = "label";
      this.parentElement.children[0].className = this.parentElement.children[0].className + " error";
    }
  };

  // --- Eventos ---
  if(document.forms.length){
    formulario.addEventListener("submit", enviar);

    for(var i = 0; i < elementos.length; i++){
      if(elementos[i].type == "text" || elementos[i].type == "email" || elementos[i].type == "password"){
        elementos[i].addEventListener("focus", focusInput);
        elementos[i].addEventListener("blur", blurInput);
      }
    }
  }
}())

