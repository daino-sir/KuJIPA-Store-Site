

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyCkN4AjXxfFlEDPNMjZiqf0QgcjXrLY150",
    authDomain: "kujipa-store-site.firebaseapp.com",
    projectId: "kujipa-store-site",
    storageBucket: "kujipa-store-site.appspot.com",
    messagingSenderId: "627781583436",
    appId: "1:627781583436:web:0dc532c8645f9cd50d6ae9",
    measurementId: "G-H6BLCG1ZV2"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
  
  const auth = firebase.auth()

  function signUp(){
      var email= document.getElementById("email");
      var password= document.getElementById("password");

      const promise = auth.createUserWithEmailAndPassword(email.value. password.value);
      promise.catch(e => alert(e.message));

      alert("Signed In");
  }
