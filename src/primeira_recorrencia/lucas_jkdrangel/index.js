let array = [...Array(26)].fill(0)
let key = prompt('Entrada')
key = key.split('')
let test = false

key.forEach(el => {
    array[el.charCodeAt()-'A'.charCodeAt()]+=1
    if(array[el.charCodeAt()-'A'.charCodeAt()]>1 && !test){
        console.log(el);
        test = true
    }
});
if(!test) console.log(null)

