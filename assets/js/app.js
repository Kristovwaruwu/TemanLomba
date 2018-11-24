'use strict'

var app = new Vue({
  el: '#api',
  data: {
    showError: ''
  }, 
  mounted: function(){
  	this.getAllMenuMakanan();
  },
  methods: {
  	getAllMenuMakanan: function(){
  		
  		axios.post(	"https://api2.mainapi.net/v1/nlp/single",{header :{
        'Authorization' : 'Bearer a56cff45c4dffb53568c7ede2de76338',
        'Accept':'application/json',
        'Content-Type': 'application/json',
        "Access-Control-Allow-Origin": "*"
      }})
  		.then(function(response){
  			alert(response.data);
  		}).catch(function(error){
          app.showError = "error";
      })
  	}
  }
})