const forms = () => {
    async function postData(url, data) {
        let res = await fetch(url, {
            method: "POST",
            body: data
        });

        return await res.text();
    }

    try {
        const formChecks = document.querySelectorAll('.form-checks');

        formChecks.forEach(field => {
            const checks = field.querySelectorAll('.form-checks-item input');

            checks.forEach(input => {
                input.addEventListener('change', () => {
                    input.parentElement.classList.toggle('active');
                });
            });
        });
    } catch (e) {
        console.log(e.stack);
    }

    try {
        const ajaxForms = document.querySelectorAll('.form');

        ajaxForms.forEach(form => {
            form.addEventListener('submit', (e) => {
                e.preventDefault();
                
            });
        });
    } catch (e) {
        console.log(e.stack);
    }
}

export default forms;