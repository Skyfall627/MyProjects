function input(x) {
    equivalentCheck();

    let y = parseFloat(document.getElementById('results').value);

    if(document.getElementById('decimalVar').value == 0){
        x += y * 10; // multiply the text by 10 and add value of x
        document.getElementById('results').value = x; // return x to text output
    
    }else{ // if decimal is true
        let decimalCount = parseInt(document.getElementById('decimalVar').value);
        if (decimalCount == 1){
            x *= 1/10; // math to place the decimal
            y += x;
            document.getElementById('results').value = y;
        }else{
            document.getElementById('results').value += x;
        }

        decimalCount++;
        document.getElementById('decimalVar').value = decimalCount;
    }
    }


function decimalPoint(){ 
    if(document.getElementById('decimalVar').value == 0){ // prevents multiple decimal points
        document.getElementById('decimalVar').value = 1;
    }
    if(parseInt(document.getElementById('operation').value)){ // if string is empty, it returns false
        document.getElementById('results').value = 0;  
    }

}

function store(){
    if(document.getElementById('storage').value == ""){
        document.getElementById('storage').value = document.getElementById('results').value;
        // document.getElementById('results').value = 0; // it was temporary
        document.getElementById('equivalent').value = 1;
    
    }else{
        operatorChecker();
    }
}


function operatorChecker(){

    let a = parseFloat(document.getElementById('storage').value);
    let b = parseFloat(document.getElementById('results').value);

    switch(parseInt(document.getElementById('operation').value)){
        case 1:
            a += b;
            break;
        case 2:
            a -= b;
            break;
        case 3:
            a *= b;
            break;
        case 4:
            a /= b;
    }
    
    document.getElementById('storage').value = a;
    document.getElementById('results').value = a;
    document.getElementById('equivalent').value = 1;
}

function operators(x){
    switch(x) {
        case 1:
            document.getElementById('operation').value = 1; // plus
            break;
        case 2:
            document.getElementById('operation').value = 2; // minus
            break;
        case 3:
            document.getElementById('operation').value = 3; // multiply
            break;
        case 4:
            document.getElementById('operation').value = 4; // divide
            break;
        default:
    }
    
    store();
}

function equivalentCheck(){ // allows last value ot remain in view
    if(parseInt(document.getElementById('equivalent').value)){
        document.getElementById('equivalent').value = 0;
        document.getElementById('results').value = 0;
    }
}

function allClear(){
    document.getElementById('results').value = 0;
    document.getElementById('storage').value = "";
    document.getElementById('operation').value = 0;
    document.getElementById('equivalent').value = 0;
}

function percent(){
    let x = parseFloat(document.getElementById('results').value);
    x *= 0.01; 
}

function square(){
    let x = parseFloat(document.getElementById('results').value);
    x *= x;
    document.getElementById('results').value = x;
}

function plusminus(){
    let x = parseFloat(document.getElementById('results').value);
    x *= -1;
    document.getElementById('results').value = x;
}

function equals(){
    operators(parseInt(document.getElementById('operation').value));
    document.getElementById('results').value = document.getElementById('storage').value;
    document.getElementById('storage').value = "";
    document.getElementById('equivalent').value = 1;
}