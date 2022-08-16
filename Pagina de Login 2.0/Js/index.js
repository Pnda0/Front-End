function logar(){
    var login = document.getElementById('usuario').value;
    var senha = document.getElementById('senha').value;

    if(login == 'admin' && senha =='admin'){
        alert('Sucesso');
        location.href = 'Html/home.html';
    }
        
    else{
        alert('Senha ou Usuário inválidos');
    }
}

