

let max= 0;
let position=0;

function maxNumber(array) {
  for (i=0; i < array.length; i++){
    if (array[i]> max){
      max = array[i];
      position = i;
    }
  }
  }
  maxNumber([5,13,25,8,4,32]);
  console.log(max);
  console.log(position);
