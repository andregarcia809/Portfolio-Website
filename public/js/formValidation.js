var config={apiKey:"AIzaSyDSyCqJA4EkbEjUleEYrxyakjK5ibgGdWw",authDomain:"andresgarcia809com.firebaseapp.com",databaseURL:"https://andresgarcia809com.firebaseio.com",projectId:"andresgarcia809com",storageBucket:"andresgarcia809com.appspot.com",messagingSenderId:"510496040145"};firebase.initializeApp(config);var messageRef=firebase.database().ref("messages"),contactFormEl=document.querySelector("#contact__form").addEventListener("submit",submitForm);function submitForm(e){e.preventDefault();var t=getInputVal("name"),a=getInputVal("email"),r=getInputVal("subject"),s=getInputVal("message"),o=document.querySelector(".alert");t.length<=2&&(e.preventDefault(),o.innerHTML="Name fieldd must have more characters",o.style.backgroundColor="red",o.style.display="block",clearTimeout(submitForm())),5<=a.length&&a.includes("@")&&a.includes(".")||(e.preventDefault(),o.innerHTML="Enter a valid E-mail address",o.style.backgroundColor="red",o.style.display="block",clearTimeout(submitForm())),r.length<=2&&(e.preventDefault(),o.innerHTML="Subject field  must have more characters",o.style.backgroundColor="red",o.style.display="block",clearTimeout(submitForm())),s.length<=10&&(e.preventDefault(),o.innerHTML="Message field  must have more characters",o.style.backgroundColor="red",o.style.display="block",clearTimeout(submitForm())),saveMessage(t,a,r,s),document.querySelector(".alert").style.display="block",setTimeout(function(){document.querySelector(".alert").style.display="none"},3e3),document.querySelector("#contact__form").reset()}function getInputVal(e){return document.getElementById(e).value}function saveMessage(e,t,a,r){messageRef.push().set({name:e,email:t,subject:a,message:r})}