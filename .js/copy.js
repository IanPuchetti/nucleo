var copyTextareaBtn = document.querySelector('.copiar');

copyTextareaBtn.addEventListener('click', function(event) {
  var copyTextarea = document.querySelector('.acopiar');
  copyTextarea.select();

  try {
    var successful = document.execCommand('copy');
    var msg = successful ? 'successful' : 'unsuccessful';
    console.log('Copying text command was ' + msg);
  } catch (err) {
    console.log('Oops, unable to copy');
  }
});