document.querySelector('a#notificate_url').href = 'https://pxl.leads.su/click/72c0cb6b29fa68ebdaa08ecc50e1cbfa?aff_sub1='+document.location.host+'&aff_sub2=popup10sec&aff_sub3=кнопка1&aff_sub4='+document.location.host; 
document.querySelector('a#notificate_url2').href = 'https://pxl.leads.su/click/72c0cb6b29fa68ebdaa08ecc50e1cbfa?aff_sub1='+document.location.host+'&aff_sub2=popup10sec&aff_sub3=кнопка12&aff_sub4='+document.location.host; 
document.querySelector('span#time15').innerText = new Date( new Date().getTime() + 15*60000).toLocaleTimeString('ru', { hour: "numeric", 
minute: "numeric"});
function showBlock() {
  if(!document.querySelector('.notificate-wrapper').classList.contains('shown'))
  {
    document.querySelector('.notificate-wrapper').classList.add('notificate-wrapper-show');
    document.querySelector('.notificate-wrapper').classList.add('shown');
  } 
}
setTimeout(function() { showBlock(); }, 10000);
function hideBlock() {
   document.querySelector('.notificate-wrapper').classList.remove('notificate-wrapper-show');
}
document.querySelector('.close-btn').addEventListener('click', hideBlock);