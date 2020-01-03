const rp = require("request-promise");

const getCode = () => {
  var options = {
      url: 'http://api-sandbox.algartelecom.com.br/oauth/grant-code',
      body: {
        client_id: "f3066fcc-30b5-3514-8e3a-bb5fc94a6661",
        client_secret: "79973269-bcdf-38c6-9046-a77e4229c2f1",
        extraInfo: {},
        redirect_uri: "http://localhost",
        state: "string"
      },
      json: true
  }

  console.log(options)

  return new Promise((resolve, reject)=>{
    rp.post(options).then( (resp) => {
      var code = resp.redirect_uri.split('&')[1].split('=')[1]
      resolve (code);
    }).catch((err) => {
      reject (err)
    })
  })

}

async function generateBody () {
  let code = await getCode();
  console.log(code)
}

generateBody()