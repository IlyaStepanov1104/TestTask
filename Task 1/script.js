let activated_buttons = 0;
let paragraph = document.getElementById('paragraph');

function click() {
    if (this.id === 'btn-1') {
        activated_buttons = 1;
    } else {
        if (activated_buttons === 1) {
            activated_buttons = 0;
            if (paragraph.classList.contains('hidden')) {
                paragraph.classList.remove('hidden');
            } else {
                paragraph.classList.add('hidden');
            }
        }
    }
    return true;
}

document.getElementById('btn-1').onclick = click;
document.getElementById('btn-2').onclick = click;