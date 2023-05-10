  //  GỬI MAIL
   //  GỬI MAIL
    //  GỬI MAIL
     //  GỬI MAIL
      //  GỬI MAIL
       //  GỬI MAIL
        //  GỬI MAIL
         //  GỬI MAIL
   // Your web app's Firebase configuration
   var firebaseConfig = {
    apiKey: "AIzaSyB6Izsku_qLcnr9lc0Ivj5eejB7-5FCaRE",
    authDomain: "test-form-d3492.firebaseapp.com",
    databaseURL: "https://test-form-d3492.firebaseio.com",
    projectId: "test-form-d3492",
    storageBucket: "test-form-d3492.appspot.com",
    messagingSenderId: "222398070278",
    appId: "1:222398070278:web:bf51f5c8a26dcfff9ecd87",
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  
  // Refernece contactInfo collections
  let contactInfo = firebase.database().ref("infos");
  
  // Listen for a submit
  document.querySelector(".contact-form").addEventListener("submit", submitForm);
  
  function submitForm(e) {
    e.preventDefault();
  
    //   Get input Values
   
    let email = document.querySelector(".email123").value;
    let message = document.querySelector(".message123").value;
    console.log(email, message);
  
    saveContactInfo(email, message);
  
    document.querySelector(".contact-form").reset();
  
    sendEmail(email, message);
  }
  
  // Save infos to Firebase
  function saveContactInfo(email, message) {
    let newContactInfo = contactInfo.push();
  
    newContactInfo.set({
    
      email: email,
      message: message,
    });
  
  retrieveInfos ();
  }
  // Retrive Infos
  function retrieveInfos() {
  let ref = firebase.database().ref("infos");
  ref.on("value", gotData);
  }

  function gotData(data) {
  let info = data.val();
  let keys = Object.keys (info);

  for (let i = 0; i < keys.length; i++) {
  let infoData = keys[i];
  
  let email = info[infoData].email;
  let message = info[infoData].message;
  console.log(email, message);
  
  let infosResults = document.querySelector(".infos Results");
  
  
      infosResults.innerHTML += `<div>

  <a><strong>Email: <strong/>${email} </a> <br/>
  <a><strong>Message: <strong>${message}</a>
  <a><strong>Message:
  </p>
  </div>`;
  }
  }
  retrieveInfos ();
  
  
  // Send email info
  function sendEmail(email, message){
      Email.send({
          Host: "smtp.gmail.com",
          Username:'shopbiutyphun@gmail.com',
          Password: "mnjmziijitjvuwpb",
          To: 'shopbiutyphun@gmail.com',
          From: `${email}`,
          Subject: `Sent you a message`,
          Body: `Email: ${email} <br/> Message: ${message}`,
      }).then((message) => alert('mail sent success'))
  }
 
  