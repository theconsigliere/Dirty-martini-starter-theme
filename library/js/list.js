const lists = document.querySelectorAll('.list__item')

if (lists) {

    function showList(event) {
        
        // get individual list item
        let thisItem = event.target.closest('.list__item')

        // Show / hide desc

        const desc = thisItem.querySelector('.list__item_desc')
     
        //get a perfect slide down 
        
        if ( desc.offsetHeight > 0 ) {
            console.log('scrollUp')
            desc.style.height = `0px`;
        } else {
            console.log('scrollDown')
            desc.style.height = `${desc.scrollHeight}px`;
        }


        // get icon div
        const icon = thisItem.querySelector('.list__item_title').querySelector('.list__item_span')

        // toggle between down arrow and straight bullet point
        icon.children[0].classList.toggle('js_list__left')
        icon.children[1].classList.toggle('js_list__right')


    }


    lists.forEach( list => {
        list.addEventListener('click', showList)
    })
}


