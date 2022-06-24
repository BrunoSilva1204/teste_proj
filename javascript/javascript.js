function function_select(funcao){
    switch(funcao){
        case 1:
            case_1();
            break;
        case 2:
            //quanquer coisa;
            break;
        case 3:
            //quanquer coisa;
            break;
        case 4:
            //quanquer coisa;
            break;
        default:
        //quanquer coisa;
        break;
            
    }
}

function case_1(){
    document.getElementById("content").innerHTML += 
              "<h3>This is the text which has been inserted by JS</h3>";
}