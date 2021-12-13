(function(){
  
  let screen = document.querySelector('.screen');
  let buttons = document.querySelectorAll('.btn');
  let clear = document.querySelector('.btn-clear');
  let equal = document.querySelector('.btn-equal');
  
  buttons.forEach(function(button){
    button.addEventListener('click', function(e){
      let value = e.target.dataset.num;
      screen.value += value; // add value here with expression 'screen.value + value = value' instead of assigning it
    })
  });
  
  equal.addEventListener('click', function(e){
    if(screen.value === ''){
      screen.value = 'Please Enter a Value';
    } else {
      let answer = eval(screen.value);
      screen.value = answer; // since eval() is used, we can executes a string expression. Remove the + symbol and just assign answer to the screen.value() to show answer
    }
  })
  
  clear.addEventListener('click', function(e){
    screen.value = '';
  })
 
})();
