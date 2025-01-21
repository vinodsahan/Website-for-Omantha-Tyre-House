const firebaseConfig = {
    apiKey: "AIzaSyDLQ0V4BDnzZBzh4VQLA7uxyiTxT12qYKg",
    authDomain: "omanthatirehousein.firebaseapp.com",
    databaseURL: "https://omanthatirehousein-default-rtdb.firebaseio.com",
    projectId: "omanthatirehousein",
    storageBucket: "omanthatirehousein.appspot.com",
    messagingSenderId: "853080403400",
    appId: "1:853080403400:web:e9f6a8431908ab4518e4fd"
  };

  //initialize firebase
  firebasee.initializeApp(firebaseConfig);

  //referenceee our database
  const omanthaTireHouseDB = firebasee.database().ref('OmanthaTireHouse')

  