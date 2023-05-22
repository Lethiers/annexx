const allQuestion = document.querySelectorAll('.question');

const allReponse = document.querySelectorAll('.reponse');

for (let i = 0; i < allQuestion.length; i++) {

    allQuestion[i].addEventListener('click',()=>{

        if (allReponse[i].classList.contains('cacher')) {
            allReponse[i].classList.remove('cacher');
        } else {
            allReponse[i].classList.add('cacher');
        }
    })
    
}