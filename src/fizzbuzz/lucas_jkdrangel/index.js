[...Array(100)].map((_, i) => i).forEach((i) =>  {
  let s = ''
  i % 3 === 0 && (s = 'Fizz'); 
  i % 5 === 0 && (s += 'Buzz'); 
  (!(i%3 === 0 || i%5 ===0 )) && (s = i)
  console.log(s)
})