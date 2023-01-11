<form id="form">
    <div class="d-flex flex-column w-100 gap-2">
        <label for="name" class="visually-hidden">Nombre</label>
        <input name="name" id="name" type="text" class="form-control" placeholder="Nombre">

        <label for="phone" class="visually-hidden">Celular</label>
        <input name="phone" id="phone" type="text" class="form-control" placeholder="Su número de celular">

        <label for="company" class="visually-hidden">Empresa</label>
        <input name="company" id="company" type="text" class="form-control" placeholder="Empresa">

        <label for="message" class="visually-hidden">Mensaje</label>
        <textarea id="message" name="message" class="form-control" placeholder="Mensaje" rows="3" required></textarea>

        <button class="btn btn-primary" type="submit">Enviar</button>
    </div>
</form>
<a href="mailto:gerencia@rcomconsultores.com" id="enviar-correo" class="visually-hidden">Correo</a>
<script>
    const $form = document.querySelector('#form');
    const $buttonMailto = document.querySelector('#enviar-correo');

    $form.addEventListener('submit',handleSubmit);

    function handleSubmit(event){
        event.preventDefault();
        const form = new FormData(this);
        // console.log(form.get('name'));
        $buttonMailto.setAttribute('href',`mailto:gerencia@rcomconsultores.com?subject=Mensaje de ${form.get('name')}, empresa ${form.get('company')} desde el sitio web rcomconsultores.com&body=${form.get('message')} - Celular : ${form.get('phone')}`);
        $buttonMailto.click();
    }
</script>