
function checkCode() {
  const code = document.getElementById('accessCode').value;
  if (code === '1964') {
    window.location.href = "mailto:jessica@7wondersgroupinc.com";
  } else {
    document.getElementById('message').innerText = "Incorrect code.";
  }
}
function checkCEO() {
  const code = document.getElementById('ceoCode').value;
  if (code === 'richardonly') {
    window.location.href = "janet.html";
  } else {
    document.getElementById('ceoMessage').innerText = "Access denied.";
  }
}
