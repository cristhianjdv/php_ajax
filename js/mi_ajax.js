function fun_ajax(url, metodo, datos, callback) {
    fetch(url, {
      method: metodo,
      body:datos
    })
    .then(res => res.json())  /* todo lo que reciba siempre sera un JSON, puedes cambirlo por text o html, si no sabes mejor no lo toque :) */
    .catch(error => {
        console.error('Error:', error) /*pinto erro en log*/
    })
    .then(response =>{
        /*
        var datos = JSON.stringify(response);
        fun_controles(datos);
       */   
        return response;
    })
    .then(function(respuesta) {
      callback(null, respuesta);
    })
    .catch(function(error) {
      callback(new Error(error.message));
    });
  }