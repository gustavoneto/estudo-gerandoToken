const request = require('request');

var bodyGrantCode = {
    "client_id": "f3066fcc-30b5-3514-8e3a-bb5fc94a6661",
    "client_secret": "79973269-bcdf-38c6-9046-a77e4229c2f1",
    "extraInfo": {},
    "redirect_uri": "http://localhost",
    "state": "string"
  }


request.post({url:'https://api-sandbox.algartelecom.com.br/oauth/grant-code', form: {bodyGrantCode}}, function(err,httpResponse,body){ 
    
    console.log(body);
})