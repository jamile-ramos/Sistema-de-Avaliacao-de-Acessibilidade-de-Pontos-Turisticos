// js do menu responsivo
const menu = this.document.querySelector('nav ul')
window.addEventListener('scroll', function () {

    if (this.window.scrollY > 0) {
        menu.style.transition = 'none'
        menu.style.top = '0'
    } else {
        menu.style.top = '80px';
    }
})

const back_icon = document.getElementById('back-icon')
back_icon.addEventListener('click', function () {
    document.getElementById('check').checked = false;
})


/*js da percentagem*/
document.addEventListener('DOMContentLoaded', function () {
    const percentages = document.querySelectorAll('.percentage');

    percentages.forEach(percentage => {
        let value = parseFloat(percentage.dataset.value);
        value *= 10;
        //console.log(`${value}%`)
        percentage.style.width = `${value}%`
    })
});

// Js para persistir filtro ao redimensionar    
document.addEventListener('DOMContentLoaded', function () {
    const filterSelect = document.getElementById('filter-points')
    const filterButtons = document.querySelectorAll('.btn-filter button')

    updateFilter(filterSelect.value)

    //evento de mudanca no select
    filterSelect.addEventListener('change', function () {
        const selectValue = filterSelect.value
        updateFilter(selectValue)
    })

    //evento de clique no botao (mudanca no botao)
    filterButtons.forEach(button => {
        button.addEventListener('click', function(){
            const selectValue = button.value
            updateFilter(selectValue)
        })
    })

    window.addEventListener('resize', function () {
        const selectedValue = filterSelect.value
        updateFilter(selectedValue)
    })

    function updateFilter(value) {
        filterSelect.value = value

        filterButtons.forEach(button => {
            button.classList.remove('selected') //remove a classe select dos botoes
        })

        const selectButton = document.querySelector(`.btn-filter button[value="${value}"]`)
        if (selectButton) {
            selectButton.classList.add('selected') //adiciona selected ao valor selecionado
        }
    }
})

// Js para sumir a msg
document.addEventListener('DOMContentLoaded', function(){
    const msg = document.querySelector('.msg, .msg-erro')
    if(msg){
        setTimeout(()=>{
            msg.classList.add('fade-out')
            setTimeout(()=>{
                msg.remove()
            }, 2000)
        }, 4000)
    }
})
