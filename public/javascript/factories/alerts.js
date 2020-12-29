const alertSuccess = (status, message) => {

    document.getElementById('box-alert').innerHTML = '';

    if(!status){ status = 'Sucesso!'; }
    if(!message){ message = ''; }

    document.getElementById('box-alert').innerHTML += '<div class="alert alert-success" role="alert"><strong>'+status+'</strong>&nbsp;&nbsp;'+message+'</div>';

    setTimeout(() => {
        document.getElementById('box-alert').innerHTML = '';
    }, 3000);
}

const alertError = (status, message) => {

    document.getElementById('box-alert').innerHTML = '';

    if(!status){ status = 'Sucesso!'; }
    if(!message){ message = ''; }
    
    document.getElementById('box-alert').innerHTML += '<div class="alert alert-danger" role="alert"><strong>'+status+'</strong>&nbsp;&nbsp;'+message+'</div>';

    setTimeout(() => {
        document.getElementById('box-alert').innerHTML = '';
    }, 3000);
}

const alertWarning = (status, message) => {

    document.getElementById('box-alert').innerHTML = '';

    if(!status){ status = 'Sucesso!'; }
    if(!message){ message = ''; }
    
    document.getElementById('box-alert').innerHTML += '<div class="alert alert-warning" role="alert"><strong>'+status+'</strong>&nbsp;&nbsp;'+message+'</div>';

    setTimeout(() => {
        document.getElementById('box-alert').innerHTML = '';
    }, 3000);
}

const alertNotify = (status, message) => {

    document.getElementById('box-alert').innerHTML = '';

    if(!status){ status = 'Sucesso!'; }
    if(!message){ message = ''; }
    
    document.getElementById('box-alert').innerHTML += '<div class="alert alert-info" role="alert"><strong>'+status+'</strong>&nbsp;&nbsp;'+message+'</div>';

    setTimeout(() => {
        document.getElementById('box-alert').innerHTML = '';
    }, 3000);
}