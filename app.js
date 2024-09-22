// register check section

function valid() {
  // name check
  const uname = document.querySelector("#uname").value;
  const namecheck = /[A-Za-z]$/;

  if (!namecheck.test(uname)) {
    alert("Enter Your Valid Name");
    return false;
  } else {
    // alert("Name Done..");
    true;
  }

  // password check

  const pass = document.querySelector("#pass").value;

  if (pass.length >= 8) {
    // alert("Paswword Done..");
    true;
  } else {
    alert("Password should be more than 8");
    return false;
  }

  const confirmpass = document.querySelector("#confirmpass").value;
  if (pass == confirmpass) {
    // alert("password same");
    true;
  } else {
    alert("Confirm Password Not Match");
    return false;
  }

  // number check

  const number = document.querySelector("#phone-no").value;

  if (number.length == 10) {
    // alert("Number Right");
    true;
  } else {
    alert("Enter Your Correct Number");
    return false;
  }
}

// display delete function

function del() {
  return confirm("Are You sure You want delete this record ?");
}
