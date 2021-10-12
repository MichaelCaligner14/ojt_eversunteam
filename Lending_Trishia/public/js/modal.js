const buttons = document.querySelectorAll("#buttonmodal");

    buttons.forEach(button => {
    button.addEventListener('click', () => {
        modal.classList.add('scale-100');
    });
    })

    const closeButton = document.querySelectorAll("#closeButton");

    closeButton.forEach(button => {
    button.addEventListener('click', () => {
        modal.classList.add('scale-100');
    });
    })