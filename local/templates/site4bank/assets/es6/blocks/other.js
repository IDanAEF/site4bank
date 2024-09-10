const other = () => {
    const hideScroll = () => {
        document.querySelector('body').classList.add('fixed');
        document.querySelector('html').classList.add('fixed');
    }

    const showScroll = () => {
        document.querySelector('body').classList.remove('fixed');
        document.querySelector('html').classList.remove('fixed');
    }

    const returnHeight = () => {
        return window.innerWidth <= 600 ? window.innerHeight / 1.05 : window.innerHeight / 1.2
    }

    const setAnim = (mass) => {
        mass.forEach(item => {
            if (returnHeight() + window.scrollY >= item.getBoundingClientRect().y + window.scrollY) {
                item.classList.add('anim');
            }
        });
    }

    function setCookie(name, value, hours) {
        var expires;
        if (hours || hours === 0) {
            var date = new Date();
            date.setTime(date.getTime() + (hours * 60 * 60 * 1000));
            expires = "; expires=" + date.toGMTString();
        }
        else {
            expires = "";
        }
        document.cookie = name + "=" + encodeURIComponent(value) + expires + "; path=/";
    }

    async function postData(url, data) {
        let res = await fetch(url, {
            method: "POST",
            body: data
        });

        return await res.text();
    }

    try {
        const cookiesModal = document.querySelector('.modal__cookie');

        if (cookiesModal) {
            setTimeout(() => cookiesModal.classList.add('active'), 2000);

            cookiesModal.querySelector('button').addEventListener('click', () => {
                setCookie('cookie_agree', 1, 1000);

                cookiesModal.classList.remove('active');
            });
        }
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
        const bodyClickContent = document.querySelectorAll('.body-click-content'),
              bodyClickTarget = document.querySelectorAll('.body-click-target');

        document.body.addEventListener('click', (e) => {
            if (e.target.classList.contains('body-click-target') || e.target.classList.contains('body-click-close')) {
                if (e.target.getAttribute('data-content')) 
                    document.querySelector('.body-click-content[data-content="'+e.target.getAttribute('data-content')+'"]').classList.toggle('active');
                else if (e.target.nextElementSibling.classList.contains('body-click-content'))
                    e.target.nextElementSibling.classList.toggle('active');
                else 
                    e.target.parentElement.classList.remove('active');

                !e.target.classList.contains('not-active') ? e.target.classList.toggle('active') : '';
            } else if (!e.target.closest('.body-click-content')) {
                bodyClickContent.forEach(item => !item.classList.contains('not-global') ? item.classList.remove('active') : '');
                bodyClickTarget.forEach(item => !item.classList.contains('not-active') && !item.classList.contains('not-global') ? item.classList.remove('active') : '');
            }
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
                page = ajaxBtn ? +(ajaxBtn.getAttribute('data-page') || 1) : 1,
                animates,
                scrollSetted = false;

            const addList = () => {
                ajaxBtn && ajaxBtn.classList.add('loading');

                const formData = new FormData();
                formData.append('page', page);
                formData.append('block', ajaxBlock);
                formData.append('vis', ajaxVis);
                formData.append('page-url', window.location.pathname);

                if (ajaxType) formData.append('type', ajaxType);

                postData('/ajax/elems.php', formData)
                .then((res) => {
                    ajaxBtn && ajaxBtn.classList.remove('loading');

                    ajaxList.innerHTML += res;
                    
                    if (ajaxBtn && ajaxList.querySelectorAll('.ajax-elems-item').length < page*ajaxVis)
                        ajaxBtn.remove();

                    if (ajaxList.querySelector('.elem_animate')) {
                        animates = ajaxList.querySelectorAll('.elem_animate');

                        setAnim(animates);

                        if (!scrollSetted) {
                            window.addEventListener('scroll', () => setAnim(animates));
                            scrollSetted = true;
                        }
                    }
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

    try {
        const lightboxes = document.querySelectorAll('.lightbox-field');

        lightboxes.forEach(field => {
            const lightboxItems = field.querySelectorAll('.lightbox-item');

            let lightbox = new FsLightbox();
            lightbox.props.sources = [];

            lightboxItems.forEach((item, i) => {
                lightbox.props.sources.push(item.href);

                item.addEventListener('click', e => {
                    e.preventDefault();

                    lightbox.open(i);
                });
            });
        });
    } catch (e) {
        console.log(e.stack);
    }

    try {
        const funcsItems = document.querySelectorAll('.bitrix1c__func-item'),
              funcsTexts = document.querySelectorAll('.bitrix1c__func-texts .item');

        funcsItems.forEach((funcItem, i) => {
            funcItem.addEventListener('click', () => {
                funcsItems.forEach(item => item.classList.remove('active'));
                funcsTexts.forEach(item => item.classList.remove('active'));

                funcItem.classList.add('active');
                funcsTexts[i].classList.add('active');
            });
        });
    } catch (e) {
        console.log(e.stack);
    }
    
    try {
        const contBlocks = document.querySelectorAll('.bitrix1c__func-cont');

        contBlocks.forEach(contBlock => {
            const funcsItems = contBlock.querySelectorAll('.bitrix1c__func-cont-tabs .btn'),
                  funcsTexts = contBlock.querySelectorAll('.bitrix1c__func-cont-item');

            funcsItems.forEach((funcItem, i) => {
                funcItem.addEventListener('click', () => {
                    funcsItems.forEach(item => item.classList.remove('active'));
                    funcsTexts.forEach(item => item.classList.remove('active'));

                    funcItem.classList.add('active');
                    funcsTexts[i].classList.add('active');
                });
            });
        });
    } catch (e) {
        console.log(e.stack);
    }
}

export default other;