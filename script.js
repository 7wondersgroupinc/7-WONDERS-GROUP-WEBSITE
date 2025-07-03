
function checkCode() {
  const code = document.getElementById('accessCode').value;
  if (code === '1964') {
    window.location.href = "mailto:jessica@7wondersgroupinc.com";
  } else {
    document.getElementById('message').innerText = "Incorrect code. Access denied.";
  }
}
