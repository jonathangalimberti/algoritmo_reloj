let h = 00;
let m = 00;
let s = 00;
setInterval(() => {
    
         if(s<60){
        
        console.log(`la hora es ${h}:${m}:${s}`);
            s=s+1;
           
        } 
        if (s === 60){
            s=00; 
            m=m+1;
        } 
        if (m === 60){
        
            m = 00;
            h = h+1;
           
        }
        if (h === 24)
        {
            
            h = 00;
        }


    }, 1000);

   
