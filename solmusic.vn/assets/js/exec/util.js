/* global BootstrapDialog */

$(function () {

    buildUrl = function (url, params) {
        var queries = '';

        if (params.length > 0) {
            queries += '?';
            $.each(params, function (index, data) {
                queries += data.key + '=' + data.value;
                if (index < (params.length - 1)) {
                    queries += '&';
                }
            });
        }

        return url + queries;
    };

    alertModel = function (msg, type, callback) {
        BootstrapDialog.alert({
            title: mapjs['Notification'],
            message: msg,
            buttonLabel: mapjs['Close'],
            closable: false,
            type: type,
            callback: callback
        });
    };

    msgModel = function (msg, type, title, isOpen, callback) {
        var open = isOpen();
        if (open) {
            BootstrapDialog.alert({
                title: title,
                message: msg,
                buttonLabel: mapjs['Close'],
                closable: false,
                type: type,
                callback: callback
            });
        }
    };

    confirmModel = function (msg, callback) {
        return new BootstrapDialog({
            title: mapjs['Confirmation'],
            message: msg,
            closable: false,
            data: {
                'callback': callback
            },
            buttons: [{
                    label: mapjs['Cancel'],
                    action: function (dialog) {
                        typeof dialog.getData('callback') === 'function' && dialog.getData('callback')(false);
                        dialog.close();
                    }
                }, {
                    label: mapjs['Ok'],
                    cssClass: 'btn-primary',
                    action: function (dialog) {
                        typeof dialog.getData('callback') === 'function' && dialog.getData('callback')(true);
                        dialog.close();
                    }
                }]
        }).open();
    };

    keySubmit = function (fieldElm, btnElm) {
        fieldElm.keypress(function (e) {
            if (e.keyCode === 10 || e.keyCode === 13) {
                e.preventDefault();
                btnElm.trigger('click');
            }
        });
    };

    

    $('.sidebar-toggle').on('click', function (e) {
        var state = '';

        if (!$('body').hasClass('sidebar-collapse')) {
            state = 'sidebar-collapse';
        }

        $.ajax({
            type: 'post',
            url: '/common/sidebar',
            data: {
                state: state
            }
        });
    });

    $('.popup-reset-pass').click(function () {
        var id = $(this).attr('data-id');
        var username = $(this).attr('data-username');

        var isLoadForm = false;

        BootstrapDialog.show({
            title: mapjs['Changeapppasswordof'] + ' "' + username + '"',
            message: $('<div></div>').load('/user/resetPassFormDialog?id=' + id),
            closeByBackdrop: false,
            closeByKeyboard: false,
            cssClass: 'reset-pass-dialog',
            buttons: [{
                    label: mapjs['Save'],
                    action: function (dialogRef) {
                        if (isLoadForm === false) {
                            saveResetPass(dialogRef);
                            isLoadForm = true;
                        }

                        $('#baseformDialog').submit();
                    }
                }]
        });
    });

    var saveResetPass = function (dialogRef) {
        $('#baseformDialog').bootstrapValidator({
            excluded: ':disabled',
            message: mapjs['Invalidinputdata'],
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
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
                        },
                        identical: {
                            field: 'password_confirm',
                            message: mapjs['Confirmpwdnotmatch']
                        }
                    }
                },
                password_confirm: {
                    message: mapjs['Pleaseinputcpassword'],
                    validators: {
                        notEmpty: {
                            message: mapjs['Confirmpwdisnotempty']
                        },
                        stringLength: {
                            min: 6,
                            max: 32,
                            message: mapjs['Password632']
                        },
                        identical: {
                            field: 'password',
                            message: mapjs['Confirmpwdnotmatch']
                        }
                    }
                }
            }
        }).on('success.form.bv', function (e) {
            e.preventDefault();

            var $form = $(e.target);

            $.post('/user/resetPassFormDialog', $form.serialize(), function (data) {
                if (data.status === 'ok') {
                    dialogRef.close();

                    alertModel(mapjs['Savesuccessfully'], BootstrapDialog.TYPE_SUCCESS);
                } else {
                    alertModel(data.error.msg, BootstrapDialog.TYPE_WARNING, function () {
                        $('#baseformDialog').data('bootstrapValidator').resetForm();
                    });
                }
            });
        });
    };
});