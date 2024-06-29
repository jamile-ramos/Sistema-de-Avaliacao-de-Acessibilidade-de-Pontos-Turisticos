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


/*js da percentagem*/
document.addEventListener('DOMContentLoaded', function() {
    const percentages = document.querySelectorAll('.percentage');

    percentages.forEach(percentage =>{
        let value = parseFloat(percentage.dataset.value);
        value *= 10;
        console.log(`${value}%`)
        percentage.style.width = `${value}%`
    })
});
