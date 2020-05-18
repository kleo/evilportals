var translations = {
    'es': {
        'One moment while we<br>log you in':
            'Espera un momento mientras<br>iniciamos tu sesión',
        'You are now connected to the network':
            'Ahora estás conectado a la red',
        'Account signups/purchases are disabled in preview mode':
            'La inscripciones de cuenta/compras están desactivadas en el modo de vista previa.',
        'Notice':
            'Aviso',
        'Day':
            'Día',
        'Days':
            'Días',
        'Hour':
            'Hora',
        'Hours':
            'Horas',
        'Minutes':
            'Minutos',
        'Continue':
            'Continuar',
        'Thank You for Trying TWC WiFi':
            'Gracias por probar TWC WiFi',
        'Please purchase a TWC Access Pass to continue using WiFi':
            'Adquiere un Pase de acceso (Access Pass) de TWC para continuar usando la red WiFi',
        'Your TWC Access Pass has expired. Please select a new Access Pass Now.':
            'Tu Access Pass (Pase de acceso) de TWC ha vencido. Selecciona un nuevo Access Pass (Pase de acceso) ahora.',
        'Your account information has been pre-populated into the form. If you wish to change any information, you may edit the form before completing the order.':
            'El formulario ha sido llenado con la información de tu cuenta. Si deseas modificar algún dato, puedes editar el formulario antes de completar la solicitud.',
        'Your Password':
            'Tu contraseña',
        'Proceed to Login':
            'Proceder con el inicio de sesión',
        'Payment portal is not available at this moment':
            '',
        'Redirecting to Payment portal...':
            '',
        'Could not log you into the network':
            'No se pudo iniciar sesión en la red'
    }
}

function translate(text, language) {
    if (language == 'en')
        return text;

    if (!translations[language])
        return text;

    if (!translations[language][text])
        return text;

    return translations[language][text] || text;
}
