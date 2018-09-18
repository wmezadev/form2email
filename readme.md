## ¿Que hace este proyecto?

Este proyecto permite automatizar el Envio de formulario a traves de SMPT.

(NO MAS BACKEND PARA LANDING PAGES).

## Ejemplo

```
<form action="http://server.example/send_to/your@email.com"
      method="POST">
    <input type="text" name="_name">
    <input type="email" name="_email">
    <input type="submit" value="Enviar">
</form>
```

**USO:**

Es muy fácil

1. Diseña el formulario en HTML, cambia el atributo action con la url de la aplicacion "../send_to/{email}", coloca el email donde quieres que llegue el correo al final de la url.

http://server.example/send_to/nombre@email.com

2. Agrega un name en atributo en cada campo, asegurate que cada ```<input>, <select>``` y ```<textarea>``` dentro de tu formulario tengo un nombre (especificamente los nombres permitidos por la web app), de otra forma no se recibirá la información.

3. Estamos listos, recibe tus formularios por email.

**Avanzado:**

Por defecto al hacer submit, deberia regresarte a la página desde donde hiciste submit, pero la intención es redirigir a una página de gracias, lo haces con el siguente campo:
```
<input type="hidden" name="_next" value="https://site.example/gracias.html" />
```

Además, para enviar el formulario con copia (CC) solo falta agregar el siguiente campo:
```
<input type="hidden" name="_cc" value="otro@email.com" />
```

Campos Disponibles:
- _cc
- _next
- _email (se valida que sea un email)
- _name (máximo 191 caracteres)
- _subject (máximo 191 caracteres)
- _message (máximo 191 caracteres)
- _phone (máximo 191 caracteres)

## Instalación

Usa la documentación de Laravel, necesitaras, composer, acceso ssh, queue, una cuenta SMTP o mailgun, etc.

## Contributing

Gracias a  Laravel... [Laravel documentation](https://laravel.com/docs/contributions).

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
