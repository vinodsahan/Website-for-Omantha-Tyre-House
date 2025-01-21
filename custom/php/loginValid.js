function validateForm() {
    var username = document.forms[0]["log-mail"].value;
    var password = document.forms[0]["log-password"].value;
    if (username == "") {
      alert("Username must be filled out");
      return false;
    }
    if (password == "") {
      alert("Password must be filled out");
      return false;
    }
  }
  