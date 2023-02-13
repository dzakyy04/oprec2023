function createForm(token) {
    const form = document.getElementById('form');

    const formElement = document.createElement('form');
    formElement.action = '/pengumuman';
    formElement.method = 'post';

    const inputToken = document.createElement('input');
    inputToken.type = 'hidden';
    inputToken.name = '_token';
    inputToken.value = token;

    const divGroup = document.createElement('div');
    divGroup.classList.add('input-group');

    const inputNim = document.createElement('input');
    inputNim.type = 'text';
    inputNim.classList.add('form-control');
    inputNim.name = 'nim';
    inputNim.placeholder = 'Masukkan NIM';
    inputNim.required = true;

    const buttonSubmit = document.createElement('button');
    buttonSubmit.classList.add('btn', 'btn-outline-purple');
    buttonSubmit.type = 'submit';
    buttonSubmit.textContent = 'Cek';

    divGroup.appendChild(inputNim);
    divGroup.appendChild(buttonSubmit);

    formElement.appendChild(inputToken);
    formElement.appendChild(divGroup);

    form.appendChild(formElement);
}
