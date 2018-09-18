<div>
    <h1>Formulario de Contacto</h1>
    <p>Nombre: {{ $form_data['_name'] or '' }}</p>
    <p>Email: {{ $form_data['_email'] or '' }}</p>
    <p>Telefono: {{ $form_data['_phone'] or '' }}</p>
    <p>Asunto: {{ $form_data['_subject'] or '' }}</p>
    <p>Mensaje: {{ $form_data['_message'] or '' }}</p>
</div>