//document.querySelector('span#time15').innerText = new Date( new Date().getTime() + 15*60000).toLocaleTimeString('ru', { hour: "numeric", minute: "numeric"});
function showBlock() {
  if(!document.querySelector('.notificate-wrapper').classList.contains('shown'))
  {
    document.querySelector('.notificate-wrapper').classList.add('notificate-wrapper-show');
    document.querySelector('.notificate-wrapper').classList.add('shown');
    // setTimeout(function () {
    //   hideBlock();
    // }, 6000);
  } 
}
if(document.location.host != 'godzaim.ru')
  setTimeout(function () { showBlock(); }, 3000);

function hideBlock() {
   document.querySelector('.notificate-wrapper').classList.remove('notificate-wrapper-show');
}
document.querySelector('.close-btn').addEventListener('click', hideBlock);