let image = document.getElementById('image');
let content = document.getElementById('content');
let btnCreate = document.getElementById('btnCreate');
btnCreate.onclick = () => {
    if (content.value == '') return;
    let linkQR = 'https://api.qrserver.com/v1/create-qr-code';
    image.src = linkQR + '?size=500px500&data=' + content.value;
}