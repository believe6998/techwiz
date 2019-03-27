$('#signUp-form').validate({
    rules: {
        userName: {
            required: true,
            minlength: 2,
            maxlength: 15
        },
        email: {
            required: true,
            email: true
        },
        password: {
            required: true,
            minlength: 8,
            maxlength: 20
        },
        'confirm-password': {
            equalTo: '[name="password"]'
        },
        phone: {
            required: true,
            minLength: 11,
            maxlength: 11
        },
        address: {
            required: true,
        },
        passport: {
            required: true,
        },
        voterID: {
            required: true,
        },
        driving: {
            required: true,
        }
    },
    messages: {
        userName: {
            required: 'Please enter your name.',
            minlength: 'The name is too short, please enter at least {2} characters',
            maxlength: 'The name is too long, please enter at most {15} characters',
        },
        email: {
            required: 'Please enter your email.',
            email: 'Please enter the correct email format.',
        },
        password: {
            required: 'Please enter your password.',
            minlength: 'The password is too short, please enter at least {8} characters.',
            maxlength: 'The password is too long, please enter at most {20} characters',
        },
        'confirm-password': {
            equalTo: 'The password and confirm password are not the same.',
        },
        phone: {
            required: 'Please enter your phone number.',
            minlength: 'The phone number is too short, please enter enough {11} characters.',
            maxlength: 'The phone number is too long, please enter enough {11} characters.',
        },
        address: {
            required: 'Please enter your address.',
        },
        passport: {
            required: 'Please enter your passport.',
        },
        voterID: {
            required: 'Please enter your voter ID.',
        },
        driving: {
            required: 'Please enter your driving licenses.',
        },
    }
});


$('#signIn-form').validate({
    rules: {
        userName: {
            required: true,
            userName: true
        },
        password: {
            required: true,
            minlength: 8,
            maxlength: 20
        }
    },
    messages: {
        userName: {
            required: 'Please enter your user name.',
        },
        password: {
            required: 'Please enter your password.',
            minlength: 'The password is too short, please enter at least {8} characters.',
            maxlength: 'The password is too long, please enter at most {20} characters.',
        }
    }
});