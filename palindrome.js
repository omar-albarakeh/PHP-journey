function length(str){
    let len=0;
    for(let i=0 ; str[i] != "" ;i++){
        len +=1;
    }
    return len;
}


function palindrome(str){
    let len=length(str);
    let is_palindrome=true;
    if(len==0){
        let x=document.createElement("div");
        x.innerHTML="string is empty";
        document.body.appendChild(x);
        return;
    }

    for(let i=0 ;i<len/2 ;i++){
        if(str[i] !== str[len-i-1]){
            is_palindrome=false;
            break;
        }
    }
    let y=document.createElement("div");
    y.innerHTML=is_palindrome?"its palindrom":"its not a palindrom ";
          document.body.appendChild(y);
}