const other = () => {
    const hideScroll = () => {
        document.querySelector('body').classList.add('fixed');
        document.querySelector('html').classList.add('fixed');
    }

    const showScroll = () => {
        document.querySelector('body').classList.remove('fixed');
        document.querySelector('html').classList.remove('fixed');
    }

    async function postData(url, data) {
        let res = await fetch(url, {
            method: "POST",
            body: data
        });

        return await res.text();
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

    try {
        const ajaxElems = document.querySelectorAll('.ajax-elems');

        ajaxElems.forEach(field => {
            const ajaxBtn = field.querySelector('.ajax-elems-btn'),
                  ajaxList = field.querySelector('.ajax-elems-list'),
                  ajaxVis = +field.getAttribute('data-vis'),
                  ajaxBlock = +field.getAttribute('data-block');

            let ajaxType = field.getAttribute('data-type'),
                page = ajaxBtn ? +(ajaxBtn.getAttribute('data-page') || 1) : 1;

            const addList = () => {
                ajaxBtn && ajaxBtn.classList.add('loading');

                const formData = new FormData();
                formData.append('page', page);
                formData.append('block', ajaxBlock);
                formData.append('vis', ajaxVis);

                if (ajaxType) formData.append('type', ajaxType);

                postData('/ajax/elems.php', formData)
                .then((res) => {
                    ajaxBtn && ajaxBtn.classList.remove('loading');

                    ajaxList.innerHTML += res;
                    
                    if (ajaxBtn && ajaxList.querySelectorAll('.ajax-elems-item').length < page*ajaxVis)
                        ajaxBtn.remove();
                });
            }

            if (field.classList.contains('init'))
                addList();

            ajaxBtn && ajaxBtn.addEventListener('click', () => {
                page++;

                addList();
            });
        });
    } catch (e) {
        console.log(e.stack);
    }
}

export default other;