function increment(btns) {
    var preval = btns.previousElementSibling.value;
    var pres = btns.previousElementSibling;
    var quntity = document.getElementById('quantity').innerText;
    if (Number(preval) < quntity) {
      var vals = Number(preval) + 1;
      pres.value = vals;
    }

  }


  function decrincrement(btns) {
    var preval = btns.nextElementSibling.value;
    var pres = btns.nextElementSibling;

    if (Number(preval) > 1) {
      var vals = Number(preval) - 1;
      pres.value = vals;
    }

  }










  function cartdata(){

   var data= document.getElementById('pdidc').innerText;
   document.getElementById('productdatana').value=data;
   var qun= document.getElementById('quantity').innerText;
   document.getElementById('adqunty145').value=qun;
   var prised= document.getElementById('prices').innerText;
   document.getElementById('prised145').value=prised;
   document.getElementById('cartform').submit();
   
   }


    function addtodata(){
      var data= document.getElementById('pdname').innerText;
      document.getElementById('productname').value=data;

      var prised= document.getElementById('quntyes142').value;
      document.getElementById('qunty145').value=prised;

      var prised= document.getElementById('prices').innerText;
      document.getElementById('prrs').value=prised;

      var proid= document.getElementById('pdidc').innerText;
      document.getElementById('psdis').value=proid;

     document.getElementById('buyform').submit();
  }

  

      
  function addvalues(personv){
    var pervalue=personv.value;
    document.getElementById('personlised').value=pervalue;
    document.getElementById('personlia').value=pervalue;
  }

