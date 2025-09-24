const init = (document) => {
    const buttons = document.querySelectorAll('button[data-action="add-row"]');

    buttons.forEach((button) => {
        button.addEventListener('click', (event) => {
            const form    = document.querySelector('form[data-js="tt-form"]');
            const row     = document.querySelector('div[data-js="row-template"]');
            const rowType = event.target.dataset.type;

            const rowNumber = form.childElementCount;
            let newRow      = cloneElement(row, rowType, rowNumber);

            newRow.removeAttribute('data-js');
            newRow.classList.remove('hidden');
console.log(newRow);

            form.appendChild(newRow);
        });
    });
};

const initRemoveRowButtons = (document) => {

};

const cloneElement = (element, type, rowNumber) => {
    let cloned = element.cloneNode(true);
    cloned.setAttribute('data-js', 'row');

    cloned.childNodes.forEach((item) => {
        if ('LABEL' === item.nodeName) {
            item.setAttribute('for', 'ts-' + rowNumber + '-begin');
            item.innerHTML = strUCFirst(type);
        }

        if ('INPUT' === item.nodeName) {
            // const id = item.getAttribute('id');
            //
            // if (id.includes('begin')) {
            //     item.setAttribute('id', 'ts-2-begin');
            // }
            //
            // if (id.includes('end')) {
            //     item.setAttribute('id', 'ts-2-end');
            // }
        }

        if ('BUTTON' === item.nodeName) {
            item.setAttribute('data-js', 'remove-row-1');
    console.log(item);
        }
    });

    return cloned;
};

document.addEventListener('DOMContentLoaded', () => {
    init(document);
});