

firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    // User is signed in.
    
    var user = firebase.auth().currentUser;
    
    if(user != null){
      
      var email_id = user.email;
      //alert("Welcome User : " + email_id +" User uid: "+user.uid);
      document.getElementById("email_navbar").innerHTML=email_id;
      document.getElementById("logout_button_navbar").style.display = 'block';
      document.getElementById("login_button_navbar").style.display= 'none';
      document.getElementById("register_button_navbar").style.display = 'none';
      
    }
    
  }
});
function login(){
  
  var email = document.getElementById("email_field").value;
  var password = document.getElementById("password_field").value;
  firebase.auth().signInWithEmailAndPassword(email, password)
  .then((userCredential) => {
    // Signed in
    var uid = userCredential.uid;
    //Retrieve the firebase id token
    document.location ="/login/setsession/sessionstart/"+uid
    
  })
  .catch((error) => {
    var errorCode = error.code;
    var errorMessage = error.message;
    alert(errorMessage);
  });

}


function setSession(){
  
}

function register(){
  var name = document.getElementById("name_field").value;
  var email = document.getElementById("email_field").value;
  var password = document.getElementById("password_field").value;
  var repeatPassword = document.getElementById("repeat_password_field").value;
  var verified=true;

  if (name==""){
    window.alert("The name is empty");
    verified=false;
  }


  if (password!=repeatPassword){
    window.alert("The passwords doesen't match");
    verified=false;
  }

  if (!/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email)){
    window.alert("The email is invalid")
    verified=false
  }

  if (verified==true){
    firebase.auth().createUserWithEmailAndPassword(email, password)
    .then((userCredential) => {
      // Signed in
      var user = userCredential.user;
      var uid=firebase.auth().currentUser.uid;
      document.location ="/login/setsession/sessionregister/"+uid+"/"+name+"/"+email;
    })
    .catch((error) => {
      var errorCode = error.code;
      var errorMessage = error.message;
      window.alert("Error : " + errorMessage);
    });
  }
  
}

function changePassword(){
  var password = document.getElementById("password_field").value;
  var repeatPassword = document.getElementById("repeat_password_field").value;
  var verified=true;

  if (password=="" || repeatPassword==""){
    window.alert("The name is empty");
    verified=false;
  }
  if (password!=repeatPassword){
    window.alert("The passwords doesen't match");
    verified=false;
  }

  if (verified==true){
    let user = firebase.auth().currentUser;
    user.updatePassword(password).then(() => {
      window.alert("Password changed successfuly");
      document.location ="/";
    }, (error) => {
      var errorCode = error.code;
      var errorMessage = error.message;
      window.alert("Error : " + errorMessage);
    });
  }

}

function logout(){
  var uid=firebase.auth().currentUser.uid;
  firebase.auth().signOut();
  document.location ="/login/setsession/sessiondown/"+uid
}