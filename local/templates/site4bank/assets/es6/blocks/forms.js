const forms = () => {
    async function postData(url, data) {
        let res = await fetch(url, {
            method: "POST",
            body: data
        });

        return await res.text();
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