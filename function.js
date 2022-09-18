function calcularIdade() {
    let userInput = document.getElementById('date').value;
    let data = new Date(userInput);
        let month_diff = Date.now() - data.getTime();
    
        let age_dt = new Date(month_diff); 
        
        let year = age_dt.getUTCFullYear();
        
        let idade = Math.abs(year - 1970);
    
        return document.getElementById('idade').value = idade;
    
}
function formatarTel(){
     let str = document.getElementById('tel').value.replace(/\D/g,"");

     return document.getElementById('tel').value = str;
}
function tirarNumeros(x){
    let str = document.getElementById(x).value.replace(/[^a-zA-Z]/g, '');

    return document.getElementById(x).value = str
}