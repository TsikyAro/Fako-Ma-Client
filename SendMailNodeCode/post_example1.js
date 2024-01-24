var express = require('express');  
var app = express();  
var bodyParser = require('body-parser');  
var nodemailer = require('nodemailer');
var multer = require('multer');

// Create application/x-www-form-urlencoded parser  
var urlencodedParser = bodyParser.urlencoded({ extended: false }) 

// Multer configuration for handling file uploads
var storage = multer.memoryStorage();
var upload = multer({ storage: storage });

app.use(express.static('public'));  

app.get('/index.html',upload.single('attachment'), function (req, res) {  
  res.sendFile( __dirname + "/" + "index.html" );
})
app.post('/process_post', urlencodedParser,upload.single('attachment'), function (req, res) {  
  
  console.log("huhuhhuuh"+req.body.destinataire); 
   // Prepare output in JSON format  
   response = {  
       destinataire:req.body.destinataire,  
       objet:req.body.objet,  
       message:req.body.message,  
   };  
   console.log(response); 
   console.log("Stringify: "+JSON.stringify(response)); 
   res.end(JSON.stringify(response));  

   console.log(response.destinataire); 
   console.log(response.objet); 
   console.log(response.message); 

  //  var transporter = nodemailer.createTransport({
  //     service: 'gmail',
  //     auth: {
  //       user: 'fakomadagascar@gmail.com',
  //       pass: 'kacilbyyrtczigtg'
  //     }
  //   });
    
    // var mailOptions = {
    //   from: 'fakomadagascar@gmail.com',
    //   to: response.destinataire,
    //   subject: response.objet,
    //   html: response.message,
    //   attachments: [
    //     {
    //        filename: req.file.originalname,
    //        content: req.file.buffer
    //     }
    //  ]
    // }; 
    
    // transporter.sendMail(mailOptions, function(error, info){
    //   if (error) {
    //     console.log(error);
    //   } else {
    //     console.log('Email sent: ' + info.response);
    //   }
    // });
    
    // console.log("envoie du mail en cours...")
})  
// var server = app.listen(8000, function () {  
//   var host = server.address().address  
//   var port = server.address().port  
//   console.log("Example app listening at http://%s:%s", host, port)  
// }) 