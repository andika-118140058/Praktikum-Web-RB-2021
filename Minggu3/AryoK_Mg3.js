function setDarkMode(isDark) {
    if(isDark) {
        document.body.setAttribute('id', 'darkmode')
    }
    else {
        document.body.setAttribute('id', 'lightmode')
    }
}

  var input  = document.getElementById('input')
  var button = document.getElementById('button')
  var demo   = document.getElementById('demo')

  button.addEventListener("click", function(e){
      e.preventDefault();
      var valinp = input.value;
      var hasil = 1;
      for(var i = valinp; i>0; i--){
          hasil *=i;
      }
      demo.innerHTML = `The Factorial ${valinp} of ${hasil}`;
})


function getddl(){
    document.getElementById('demo1').innerHTML=
    ("The Weather So " + form.ddlselect[form.ddlselect.selectedIndex].text)
}