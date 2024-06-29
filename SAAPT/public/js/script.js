const menu = this.document.querySelector('nav ul')
window.addEventListener('scroll', function(){
    
    if(this.window.scrollY > 0){
        menu.style.transition = 'none'
        menu.style.top = '0'
    }else {
        menu.style.top = '80px'; 
    }
})

const back_icon = document.getElementById('back-icon')
back_icon.addEventListener('click', function(){
    document.getElementById('check').checked = false;
})


document.addEventListener('DOMContentLoaded', function(){
    const numberPercentage = document.querySelector('.number-percentage').textContent;
    const percentage = document.querySelector('.percentage');

    percentage.style.width = numberPercentage;
})