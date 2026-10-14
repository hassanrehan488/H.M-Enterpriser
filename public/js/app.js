function copyTracking(){
 const el=document.getElementById('tracking');
 if(!el) return;
 navigator.clipboard.writeText(el.innerText).then(()=>alert('Tracking ID copied!'));
}
document.querySelectorAll('form').forEach(form=>{
 form.addEventListener('submit',()=>{
   const btn=form.querySelector('button[type="submit"]');
   if(btn){btn.dataset.original=btn.innerText; btn.innerText='Please wait...';}
 });
});
