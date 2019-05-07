function showBlock() {
  if(!document.querySelector('.notificate-wrapper').classList.contains('shown'))
  {
    document.querySelector('.notificate-wrapper').classList.add('notificate-wrapper-show');
    document.querySelector('.notificate-wrapper').classList.add('shown');
  } 
}

setTimeout(function () { showBlock(); }, _show_modal_timer);

function hideBlock() {
   document.querySelector('.notificate-wrapper').classList.remove('notificate-wrapper-show');
}
document.querySelector('.close-btn').addEventListener('click', hideBlock);
document.querySelector('.close-btn').addEventListener('touchstart', hideBlock);