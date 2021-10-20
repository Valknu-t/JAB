function nombre(){
    chiffre = 4;
    return chiffre;
}

function test(){
    if (nombre() == 4){
        console.log("Le nombre est le bon !");
    }

    else{
        console.log("error");
    }
}

test();
