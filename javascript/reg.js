
   const namev =document.getElementById('fullname');
   const mailv =document.getElementById('mail2');
   const phonev =document.getElementById('phone');
   const profv=document.getElementById('prof');
   const passv =document.getElementById('password');
   const rojv =document.getElementById('rojgar').value;
    //adhaarv =document.getElementById('adhaar').value;
    const adddata=document.getElementById("regg");
    const database =firebase.database();
    adddata.addEventListener('click',(e) => {
    e.preventDefault();
   
    let userRef = this.database.ref('users/' + mailv);
    userRef.child.set({'fullname': value.namev, 'mailv': value.mailv, 'phone': value.phonev ,
    'proffesion': value.profv,'password': value.passv ,'rejgar': value.rojvv
          })

        });
    


