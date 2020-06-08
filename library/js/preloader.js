// after 3 seconds
const preloader = document.querySelector('.pre_loader')

if (preloader) {
setTimeout( () => {
preloader.classList.add('hidden__preloader')
}, 2000)

}