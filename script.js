const Ajouter_Livre = document.getElementById("Ajouter_Livre");
const LivreModel = document.getElementById("LivreModel");
const closeModalBtn = document.getElementById("closeModalBtn");
const AnnulerModalBtn = document.getElementById("closearticlemodel");
Ajouter_Livre.addEventListener('click',()=>{
    LivreModel.classList.toggle("hidden");
})

closeModalBtn.addEventListener('click',()=>{
    LivreModel.classList.toggle("hidden");
})

AnnulerModalBtn.addEventListener('click',()=>{
    LivreModel.classList.toggle("hidden");
})