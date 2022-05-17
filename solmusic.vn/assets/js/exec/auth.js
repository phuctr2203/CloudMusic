/* global BootstrapDialog */

$(document).ready(function() {
    
    /**
     * auth login
     * path: auth/login
     */
    if ($('#formtype').length && $('#formtype').val() === 'auth_login') {      
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%'
        });
        var lang = $('#lang').val();
        if(lang==="" || lang==="vi" ){
            $('#vi').addClass('active');
        }
        if(lang==="en" ){
            $('#vi').removeClass('active');
            $('#en').addClass('active');
        }
        
        /*$('#en').click(function () {
            $('#vi').removeClass('active');
            $('#en').addClass('active');
            $('#lang').val('en');
            return;
        });
        $('#vi').click(function () {
            $('#en').removeClass('active');
            $('#vi').addClass('active');
            $('#lang').val('vi');
            return;
        });*/
        $('#baseform').bootstrapValidator({
            message: mapjs['Invalidinputdata'],
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                username: {
                    message: mapjs['Pleaseenteryourusername'],
                    validators: {
                        notEmpty: {
                            message: mapjs['Usernamenotempty']
                        },
                        stringLength: {
                            min: 3,
                            max: 32,
                            message: mapjs['Username632']
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9_\.]+$/,
                            message: mapjs['Usernameformat']
                        }
                    }
                },
                password: {
                    message: mapjs['PleaseinputPassword'],
                    validators: {
                        notEmpty: {
                            message: mapjs['Passwordisnotempty']
                        },
                        stringLength: {
                            min: 6,
                            max: 32,
                            message: mapjs['Password632']
                        }
                    }
                }
            }
        }).on('success.form.bv', function(e) {
            e.preventDefault();            
            
            var $form = $(e.target);
            
            $form.find('.alert').hide();

            $.post('/auth/login?lang='+lang, $form.serialize(), function(data) {
                if (data.status === 'ok') {
                    window.location = data.redirect_uri;
                } else {
                    $form.find('.alert').html(data.error.msg).show();
                    $('#baseform').data('bootstrapValidator').resetForm();
                }
            }, 'json');
        });
    }
    
    /**
     * auth changePassAdmin
     * path: auth/changePassAdmin
     */
    if ($('#formtype').length && $('#formtype').val() === 'auth_change_pass_admin') {
        var lang = $('#lang').val();
        if(lang==="" || lang==="vi" ){
            $('#vi').addClass('active');
        }
        if(lang==="en" ){
            $('#vi').removeClass('active');
            $('#en').addClass('active');
        }
        console.log(lang);
        $('#baseform').bootstrapValidator({
            message: mapjs['Invalidinputdata'],
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                old_password_admin: {
                    message: mapjs['PleaseinputPassword'],
                    validators: {
                        notEmpty: {
                            message: mapjs['Oldpasswordnotempty']
                        },
                        stringLength: {
                            min: 6,
                            max: 32,
                            message: mapjs['OldPassword632']
                        },
                        different: {
                            field: 'new_password_admin',
                            message: mapjs['Oldpasswordmatchednew']
                        }
                    }
                },
                new_password_admin: {
                    message: mapjs['PleaseinputPassword'],
                    validators: {
                        notEmpty: {
                            message: mapjs['Newpasswordnotempty']
                        },
                        stringLength: {
                            min: 6,
                            max: 32,
                            message: mapjs['NewPassword632']
                        },
                        different: {
                            field: 'old_password_admin',
                            message: mapjs['Newpasswordmatchedold']
                        }
                    }
                },
                new_password_admin_confirm: {
                    message: mapjs['Pleaseinputcpassword'],
                    validators: {
                        notEmpty: {
                            message: mapjs['Confirmpwdisnotempty']
                        },
                        stringLength: {
                            min: 6,
                            max: 32,
                            message: mapjs['ConfirmPassword632']
                        },
                        identical: {
                            field: 'new_password_admin',
                            message: mapjs['Confirmpwdnotmatch']
                        }
                    }
                }
            }
        }).on('success.form.bv', function(e) {
            e.preventDefault();            
            
            var $form = $(e.target);
            
            $form.find('.alert').hide();

            $.post('/auth/changePassAdmin?lang='+lang, $form.serialize(), function(data) {
                if (data.status === 'ok') {
                    alertModel(mapjs['ChangepwdSucc'], BootstrapDialog.TYPE_SUCCESS, function() {
                        window.location = '/auth/login';
                    });
                } else {
                    $form.find('.alert').html(data.error.msg).show();
                    $('#baseform').data('bootstrapValidator').resetForm();
                }
            }, 'json');
        });
    }
});