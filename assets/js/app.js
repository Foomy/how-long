const init = (document) => {
    const addRowButton = document.querySelector('button[data-type]');

    addRowButton.addEventListener('click', () => {
        const row = document.querySelector('div[data-js="row"');
        let newRow;
// console.log(row);
        row.removeAttribute('data-js');
        newRow = cloneElement(row);
// console.log(newRow);
    });
};

const cloneElement = (element) => {
    let cloned = element.cloneNode(true);
    cloned.setAttribute('data-js', 'row');

    cloned.childNodes.forEach((item) => {
        if ('LABEL' === item.nodeName) {
            item.setAttribute('for', 'ts-2-begin')
        }

        if ('INPUT' === item.nodeName) {
            const id = item.getAttribute('id');

            if (id.includes('begin')) {
                item.setAttribute('id', 'ts-2-begin');
            }

            if (id.includes('end')) {
                item.setAttribute('id', 'ts-2-end');
            }
        }

        if ('BUTTON' === item.nodeName) {
            // console.log(item);
        }
    });

    return cloned;
};

document.addEventListener('DOMContentLoaded', () => {
    init(document);
});