const other = () => {
    const hideScroll = () => {
        document.querySelector('body').classList.add('fixed');
        document.querySelector('html').classList.add('fixed');
    }

    const showScroll = () => {
        document.querySelector('body').classList.remove('fixed');
        document.querySelector('html').classList.remove('fixed');
    }

    try {
        const modalsBtn = document.querySelectorAll('[data-modal]'),
              modalsField = document.querySelector('.modals'),
              modalsItems = modalsField.querySelectorAll('.modals__item');

        modalsBtn.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();

                modalsItems.forEach(item => item.classList.remove('active'));
                modalsField.querySelector('#'+btn.getAttribute('data-modal').trim()).classList.add('active');

                modalsField.classList.add('active');
                hideScroll();
            });
        });

        modalsField.addEventListener('click', (e) => {
            if (e.target == modalsField || e.target.classList.contains('modals__close')) {
                modalsItems.forEach(item => item.classList.remove('active'));

                modalsField.classList.remove('active');
                showScroll();
            }
        });
    } catch (e) {
        console.log(e.stack);
    }

    try {
        //elem-text animate
        const targetElem = document.querySelectorAll('.elem_animate'),
              targetText = document.querySelectorAll('.text_animate');
        
        targetText.forEach(item => {
            let textCont = item.textContent.trim(),
                newInner = '',
                transit = 0;

            for (let i = 0; i < textCont.length; i++) {
                newInner += `<i class="or" style="transition: 0.4s all ${transit.toFixed(2)}s">${textCont[i]}</i>`;
                transit += 0.03;
            }
            item.innerHTML = newInner;
        });

        function returnHeight() {
            return window.innerWidth <= 600 ? window.innerHeight / 1.05 : window.innerHeight / 1.2
        }

        function setAnim(mass) {
            mass.forEach(item => {
                if (returnHeight() + window.scrollY >= item.getBoundingClientRect().y + window.scrollY) {
                    item.classList.add('anim');
                }
            });
        }

        setAnim(targetElem);
        setAnim(targetText);

        window.addEventListener('scroll', () => {
            setAnim(targetElem);
            setAnim(targetText);
        });
    } catch (e) {
        console.log(e.stack);
    }
}

export default other;