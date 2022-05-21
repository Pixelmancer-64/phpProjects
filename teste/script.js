const element = document.querySelector('h1');
console.log(element)
const physicalBody =  document.querySelector('body')

element.textContent = "Javascript é bizarro!!!"

function fiesta(){
    physicalBody.classList.add('active')
}

function noMoreFiesta(){
    physicalBody.classList.remove('active')
}
